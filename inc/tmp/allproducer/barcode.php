
<?php 
    require_once "../../../conn/conn.php";
    require_once "../../../init/config.php";
    require_once "../../../init/function.php";
    require_once "../../../init/GW.php";
    if(isset($_GET['IDProducer']) AND is_numeric($_GET['IDProducer'])){
        $IDProducer = intval($_GET['IDProducer']);
        $stmt = $db->prepare("SELECT barcode,sell FROM producer WHERE ID = ?");
        $stmt->execute(array($IDProducer));
        if($stmt->rowcount() > 0){
            $producer = $stmt->fetch();
        }else{
            gotopage("home");
            exit();
        }
    }
    ?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <style>


#barcode_template{
	text-align: left;
	direction:ltr;
}
table, td, th {
    border: 1px solid #9a9a9a;
}
td, th {
    padding: 5px;
}
th{
    background: #e5e5e5;
}

table {
    border-collapse: collapse;
    width: 100%;
}

.no-border{
    border:0px !important;
}
.no-border td, .no-border th {
    border:0px !important;
}

.bg{
    background: #e5e5e5;
}

/*.journal_invoice-inner {*/
    /*margin: 0 30px;*/
    /*padding: 20px 0;*/
/*}*/

/*.journal_h2 {*/
    /*font-size: 24px;*/
/*}*/

/*.journal_f_table {*/
    /*margin-top: 20px;*/
    /*width: 100%;*/
    /*font-size: 15px;*/
    /*margin-bottom: 5px;*/
/*}*/

/*.journal_t_table, .journal_t_table th, .journal_t_table td {*/
    /*border: 1px solid #555555;*/
    /*border-collapse: collapse;*/
    /*padding: 3px 5px 3px 5px;*/
/*}*/

/*.journal_t_table {*/
    /*margin-top: 20px;*/
    /*width: 100%;*/
/*}*/

/*.journal_bold {*/
    /*font-weight: bold !important;*/
/*}*/

/*.journal_t_table tr:first-child {*/
    /*background: #e5e5e5;*/
/*}*/
.product_barcode_number{
    float: right;
}
body{
    direction: ltr;
    width: fit-content;
    height: fit-content;
    margin: 0;
}


        #barcode_template{
            text-align: left;
            direction:ltr;
        }
        table, td, th {
            border: 1px solid #9a9a9a;
        }
        td, th {
            padding: 5px;
        }
        th{
            background: #e5e5e5;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        .no-border{
            border:0px !important;
        }
        .no-border td, .no-border th {
            border:0px !important;
        }

        .bg{
            background: #e5e5e5;
        }

        .journal_invoice-inner {
            margin: 0 30px;
            padding: 20px 0;
        }

        .journal_h2 {
            font-size: 24px;
        }

        .journal_f_table {
            margin-top: 20px;
            width: 100%;
            font-size: 15px;
            margin-bottom: 5px;
        }

        .journal_t_table, .journal_t_table th, .journal_t_table td {
            border: 1px solid #555555;
            border-collapse: collapse;
            padding: 3px 5px 3px 5px;
        }

        .journal_t_table {
            margin-top: 20px;
            width: 100%;
        }

        .journal_bold {
            font-weight: bold !important;
        }

        .journal_t_table tr:first-child {
            background: #e5e5e5;
        }
        .product_barcode_number{
            float: right;
        }
        body{
            direction: ltr;
        }
        #PrintableContent{
            padding: 0 0 1px 0;
            margin: 5px 0 0 auto;
            background-color: rgb(255, 255, 255);
            width: 140px;
        }
        </style>
        <script src="<?php echo $config['site'] ?>/barcode/dist/JsBarcode.all.js"></script>
    </head>
    <body>
        <div id="PrintableContent">
            <div>
                <div class="barcode_img_container" style="text-align: center;"><img width="100%" ID='imgBarCode'  style="height:1.4cm;"  src="https://barcode.tec-it.com/barcode.ashx?data=<?php echo $producer['barcode'] ?>&code=Code128&dpi=96&dataseparator=" /></div>
                <div class="num_contain" style="font-size: 11px; width: 95%; margin: auto;"><span class="product_unit_price"><?php echo $producer['sell'] ?> ج.م</span> <span class="product_barcode_number"><?php echo $producer['barcode'] ?></span></div>
            </div>        
        </div>
        <script>
				JsBarcode("#imgBarCode", "<?php echo $producer['barcode']; ?>",{displayValue:false,fontSize:20});
		</script>
    </body>
</html>
