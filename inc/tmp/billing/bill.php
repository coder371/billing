<?php 
    require_once "../../../conn/conn.php";
    require_once "../../../init/config.php";
    require_once "../../../init/function.php";
    require_once "../../../init/GW.php";
    if(isset($_GET['IDBill']) AND is_numeric($_GET['IDBill'])){
        $IDBill = intval($_GET['IDBill']);
        $stmt = $db->prepare("SELECT * FROM bill WHERE ID = ?");
        $stmt->execute(array($IDBill));
        if($stmt->rowcount() > 0){
            $bill = $stmt->fetch();

            $stmtItms = $db->prepare("SELECT * FROM itembill WHERE IDbill = ? ");
            $stmtItms->execute(array($IDBill));
            if($stmtItms->rowcount() > 0){
                $items = $stmtItms->fetchall();
            }else{
                gotopage("home");
                exit();
            }

            $stmtClient = $db->prepare("SELECT * FROM client WHERE ID = ? ");
            $stmtClient->execute(array($bill['IDclient']));
            if($stmtClient->rowcount() > 0){
                $client = $stmtClient->fetch();
            }else{
                gotopage("home");
                exit();
            }

        }else{
            gotopage("home");
            exit();
        }
        ?>
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                    <title>Invoice Template</title>
                </head>
                <style type="text/css">
                    *{ margin:0; padding:0;}body{ background:#ffffff; font:12px "Tahoma", Arial, Helvetica, sans-serif; direction:rtl; text-align:right; }.invoice-wrap{  margin:0 auto; background:#FFF; color:#000}.invoice-inner{ margin:0 30px; padding:20px 0}.listing-table th{background-color: #e5e5e5;border-bottom: 1px solid #555555;border-top: 1px solid #555555;font-weight: bold; text-align:right; padding:6px 4px}.listing-table td{border-bottom: 1px solid #555555; text-align:right; padding:5px 6px; vertical-align:top}.total-table td{ border-right: 1px solid #555555;}.total-row{ background-color: #e5e5e5;border-bottom: 1px solid #555555;border-top: 1px solid #555555;font-weight: bold;}.row-items{ margin:5px 0; display:block}.notes-block{ margin:50px 0 0 0}
                </style>
                <body>
                    <div class="invoice-wrap">
                        <div class="invoice-inner">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="right" valign="top">
                                        <h1><p id="invoice_title" class="editable-area invoice-name">فاتورة</p></h1>
                                    </td>
                                    <td align="left" valign="top" >
                                        <img style="vertical-align:top;margin-bottom:10px;max-height: 70px;"  id="logo" class='editable-area'  src="<?php echo $config['cdnAssist'] . $GW['logo'] ?>"  width="200" height=""/>
                                        <div id="business_info" class='editable-area'>
                                            <p>
                                                <p class="bussines-name"><?php echo $GW['title'] ?></p><br/>
                                                <?php echo $GW['billAddress'] ?>
                                            </p>
                                        </div>

                                    </td>
                                </tr>
                            </table>
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <div class="invoice-address">
                                <table  border="0" cellspacing="0" cellpadding="0" width="100%">
                                    <tr>
                                        <td align="right" valign="top">
                                            <div style="vertical-align:top" align="right" id="client_info" class='editable-area'>
                                                <strong id="field1" class="editable-area">فاتورة إلى:</strong> : <?php echo $client['fullname'] ?><br />
                                                <?php echo $client['address'] ?><br />
                                            </div>
                                        </td>
                                        <td id="shipping_options" style="display:none;" align="right" valign="top"></td>				
                                        <td  valign="top" align="left">
                                            <table id="invoice_basics"  border="0" cellspacing="0" cellpadding="0" >
                                                <tr>
                                                    <td align="left"><strong class="editable-area" id="label_invoice_no">رقم الفاتورة</strong></td>
                                                    <td  style="padding-right:20px;" align="right" ><?php echo $bill['ID']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td  align="left"><strong class="editable-area" id="label_date">تاريخ الفاتورة</strong></td>
                                                    <td  style="padding-right:20px;" align="right"><?php dateFormat($bill['date'],"Y/m/d") ?></td>
                                                </tr>
                                            
                                                
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <br />
                            <br />
                            <br />
                            <br />




                            

                            <div id="items-list">
                <table cellspacing="0" cellpadding="0" border="0" width="100%" id="listing_table" class="listing-table total-table" style=" ">
                    <tr>
                        <th width="" bgcolor="#e5e5e5" class="editable-area col-1" id="label_field1">البند</th>
                        <th width="80" bgcolor="#e5e5e5" class="editable-area col-7" id="label_unit_price">سعر الوحدة</th>        
                        <th width="80" bgcolor="#e5e5e5" class="editable-area col-6" id="label_quantity">الكمية</th>
                        <th width="80" bgcolor="#e5e5e5" class="editable-area col-9" id="label_subtotal">الإجمالي</th>
                    </tr>
                    <?php  foreach($items as $item){ ?>
                        <tr>   
                            <td class="col-1"> <?php echo getDateInfo($db,"title","producer","ID = " . $item['IDproducer']); ?> </td>
                            <td class="col-7"> <?php echo $item["sell"] ?> </td>
                            <td class="col-6"> <?php echo $item["amount"] ?> </td>
                            <td class="col-9">  <?php echo $item["total"] ?> </td>
                        </tr>
                    <?php } ?>
                        <tr>
                            <th width="" bgcolor="#e5e5e5" class="editable-area col-1" id="label_field1">البند</th>
                            <th width="80" bgcolor="#e5e5e5" class="editable-area col-7" id="label_unit_price">سعر الوحدة</th>        
                            <th width="80" bgcolor="#e5e5e5" class="editable-area col-6" id="label_quantity">الكمية</th>
                            <th width="80" bgcolor="#e5e5e5" class="editable-area col-9" id="label_subtotal"><?php echo $bill['total'] ?> ج.م</th>
                        </tr>
                </table>
            <!-- <table width="100%" cellspacing="0" cellpadding="0" border="0" width="100%"  class="listing-table total-table" style=" "> -->
                <!-- Subtotal -->
                <!-- <tr>
                    <td width="65%" style="border:none;" bgcolor="#FFF" ></td>
                    <td  style="border-left:none;border-right:none;"   ><strong class="editable-area" id="label_item_total">الإجمالي</strong></td>
                    <td width="80" style="border-left:none;border-right:none;" align="left"></td>
                </tr> -->

                <!-- /Subtotal
                <tr class="row-tax-summary">
                    <td bgcolor="#FFF" colspan="1" style="border:none;"></td>
                    <td colspan="1" style="border-left:none;border-right:none;"><strong id="label_item_total" class="editable-area">القيمة المضافة (4%)</strong></td>
                    <td class="text-left" style="border-left:none;border-right:none;">3.12 ج.م</td>
                </tr>
                <tr class="total-row">
                    <td width="65%" style="border:none;" bgcolor="#FFF" ></td>
                    <td style="border-left:none;border-right:none;"  ><h4><strong class="editable-area" id="label_total">الإجمالي</strong></h4></td>
                    <td  width="80"  width="80" style="border-left:none;border-right:none;" align="left">31,650.12 ج.م</td>
                </tr> -->
                
                <!-- PaidAmount -->
                <!-- <tr class="row-paid-amount">
                    <td width="65%" style="border:none;" bgcolor="#FFF" ></td>
                    <td style="border-left:none;border-right:none;"   ><strong class="editable-area" id="label_paid_amount">مدفوع</strong></td>
                    <td style="border-left:none;border-right:none;" align="left">0.00 ج.م</td>
                </tr>
                <tr class="row-unpaid-amount">
                    <td width="65%" style="border:none;" bgcolor="#FFF" ></td>
                    <td style="border-left:none;border-right:none;"  ><strong class="editable-area" id="label_unpaid_amount">الرصيد المستحق</strong></td>
                    <td style="border-left:none;border-right:none;" align="left">31,650.12 ج.م</td>
                </tr> -->
                <!-- /PaidAmount -->
            <!-- </table> -->

            <div style="clear:both; height:1px;">&nbsp;</div>

                            </div>
                            <div class="notes-block">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td>
                                                                    <div style="font-style:italic" class="editable-area" id="footer"><span style="font-style: normal;" ></span></div>
                                                                    </td>
                                    </tr>
                                </table>

                            </div>
                            
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />



                        </div>
                    </div>
                </body>
            </html>
                <style type="text/css">body { direction: rtl; text-align: right;font-size: 12px; font-family: "Tahoma", arial, helvetica }

            .invoice-wrap  {width: 700px !important; }
            #invoice_basics { white-space: nowrap;} 
            .invoice-address  { white-space: nowrap;}
            ul, ol {padding: 0 20px;}
            .total-table td:last-child {
                border-left: 1px solid #555555;
            }
            .total-table th:first-child {
                border-right: 1px solid #555555;
            }
            .total-table th:last-child {
                border-left: 1px solid #555555;
            }

            @media print {
                @page { margin: 0cm }
            }
            </style>    
            <style id="view_style_css" type="text/css">    
            body {
            font-size:;
            font-family:;
            }
            .listing-table th {
            background-color:;
            border-bottom:1px solid ;
            border-top:1px solid ;
            color: ;
            }

            .listing-table td {
            border-bottom:1px solid ;
            }

            /*.total-table td {
            border-right:1px solid ;
            }*/

            .total-row {
            background-color:;
                color: ;
            border-bottom:1px solid ;
            border-top:1px solid ;
            }
            .total-table tr.line:nth-child(even) td {
                background-color:;
            }	
            .total-table tr.line:nth-child(odd) td {
                background-color:;
            }	


            body {
                
                    max-width: 8cm !important;
                    margin: auto;
                
            
                
            }

            .invoice-wrap {
                width: 100% !important;
                
            }
            .invoice-inner {
                margin: 0 10px;
                padding: 0px !important;
            }

            .invoice-wrap {
                
            }
            body > div > div > table > tbody > tr > td:nth-child(1){
                display: block;
                text-align: center;
                margin-bottom: 10px;
            }

            body > div > div > table > tbody > tr > td:nth-child(2){
                display: block;
                text-align: center;
            }

            body > div > div > div.invoice-address{
                margin-top: -40px;
            }

            body > div > div > div.invoice-address > table > tbody > tr > td:nth-child(1){
                display: block;
            }

            body > div > div > div.invoice-address > table > tbody > tr > td:nth-child(3){
                display: block;
                text-align: right;
                margin-top: 10px;
            }

            #invoice_basics > tbody > tr:nth-child(1) > td:nth-child(1){
                text-align: right;
            }

            body > div > div.invoice-inner{
                margin: 10px !important;
            }

            #items-list > table:nth-child(2) > tbody > tr > td:nth-child(1){
                display: none;
            }
                
            </style>

            <style type="text/css">
            @media screen {
            div.StickyFooter {
            
            }
            }

            </style><style>
            body{ background:#c3c3c3; }

            </style>




    <?php
    }else{
        gotopage("home");
        exit();
    }
?>
