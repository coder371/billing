function saveBill(){
    err = Array()
    client = $("#client").val();
    barcode = $("#barcode").val();
    if(!barcode){
        barcode = $("#barcode").attr("data-bar");
    }
    date = $("#date").val();
    send = $("#send").is(":checked");
    paid = $("#paid").is(":checked");
    dataBill = [];
    allItems = $(".itemBill");
    for(i=0;i<allItems.length;i++){
        arrItem = {};
        item = allItems[i];
        IDitem = $(item).attr("ID");
        producerItem = $($("#" + IDitem + " input.title")[1]).val();
        if(producerItem){
            arrItem["producer"] = producerItem;
            amountItem = $("#" + IDitem + " .amount").val();
            arrItem["amount"] = amountItem;
            sellItem = $("#" + IDitem + " .sell").val();
            arrItem["sell"] = sellItem;
            totalItem = $("#" + IDitem + " .total").val();
            arrItem["total"] = totalItem;
            dataBill.push(arrItem);
        }
    }
    checkP= checkProducer(dataBill);
    checkC= checkClient(client);
    total = $(".allTotal").attr("val");

    if(!$($("#row-1 input.title")[1]).val()){
        err.push("لا يمكن انشاء فاتورة فارغة");
    }else{
        if(checkP){
            err.push("بعض المنتجات غير موجودة في المحزن");
        }else{
            if(total == 0){
                err.push("لا يمكن انشاء فاتورة بلا قيمة");
            }else{
                if(!client){
                    err.push("الرجاء أختيار العميل");
                }else{
                    if(!checkC){
                        err.push("العميل غير موجود في السجلات");
                    }else{
                        if(!date){
                            err.push("الرجاء أختيار تاريخ الاصدار");
                        }
                    }
                }
            }
        }
    }

    if(err.length < 1){
        $("#loaderProgres").fadeIn();
        data    = new FormData();
        data.append("client",client);
        data.append("barcode",barcode);
        data.append("date",date);
        data.append("send",send);
        data.append("paid",paid);
        data.append("dataBill",JSON.stringify(dataBill));
        data.append("total",total);
        ajax = ajaxFunction();
        ajax.upload.addEventListener("progress", progress, false);
        ajax.onreadystatechange = function(e){
            if(e.target.readyState == 4 && e.target.status == 200){
                res = e.target.response;
                JsonRes = JSON.parse(res);
                if(JsonRes['status'] == "success"){
                    if($("#loaderProgres").fadeOut()){
                        if(swal({
                            title: 'تم توليد الفاتورة بنجاح',
                            text: "جاري التحويل !",
                            type: 'success',
                        })){
                            $("#loader").fadeIn();
                            setTimeout(function(){
                                window.location = config['site'] + "/bill/" + JsonRes['IDBill']
                            },1000)
                        }
                    }
                }else if(JsonRes['status'] == "isset"){
                    $("#loaderProgres").fadeOut();
                    swal('خطأ !',"الباركود موجود من قبل", 'error');
                }else if(JsonRes['status'] =="userisset"){
                    $("#loaderProgres").fadeOut();
                    swal('خطأ !',"المستخد غير موجود في السجلات", 'error');
                }
            }
        }
        ajax.open("POST", config['site'] + "/event/newBill/saveBill.php");
        ajax.send(data);
    }else{
        err.forEach(e => {
            swal('خطأ !', e, 'error');
        });
    }
}
function progress(event){
    var percent = (event.loaded / event.total) * 100;
    $(".progress-bar").html(percent + "%");
    $(".progress-bar").attr("style","width:" + percent + "%;");
}   

function checkProducer(dataBill){
    errIsset = [];
    for(x=0;x<fullDataJspn.length;x++){
        for(i=0;i<dataBill.length;i++){
            if(dataBill[i]['producer']){
                if(fullDataJspn[x]['ID'] == dataBill[i]['producer']){
                    errIsset.push(dataBill[i]['producer']);
                }
            }
        }
    }
    if(errIsset.length < dataBill.length){
        return true;
    }
}
function checkClient(ID){
    clientIsset = false;
    console.log(ID);
    for(x=0;x<JsonDataClient.length;x++){
        if(ID){
            console.log(JsonDataClient[x]['ID']);
            if(JsonDataClient[x]['value'] == ID){
                clientIsset = true;
            }
        }
    }
    return clientIsset;
}

