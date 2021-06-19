/* Ajax */ function ajaxFunction() {var ajax;try {ajax = new XMLHttpRequest();} catch (e) {try {ajax = new ActiveXObject("Msxml2.XMLHTTP");} catch (e) {try {ajax = new ActiveXObject("Microsoft.XMLHTTP");} catch (e) {alert("الرجاء تغير المتصفح!");return false;}}}return ajax;}
/* Validate Email */ function validateEmail(email) {var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;return re.test(String(email).toLowerCase());}
/* Show Loader */ function showLoader(){$("#loader").fadeIn();}
/* Hide Loader */ function hideLoader(){$("#loader").fadeOut();}
/* Create Element */ function crt(e){ele = document.createElement(e);return ele;};
$(".deleteContact").on("click",function(){
    deleteContact(this);
});

function deleteContact(e){
    ele = $(e);
    swal({
        title: 'هل انت متأكد ؟',
        text: "أنت في طريقك لحذف هذا العميل !",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#0CC27E',
        cancelButtonColor: '#FF586B',
        confirmButtonText: 'نعم, قم بالحذف !',
        cancelButtonText: 'لا, قم بالإلغاء !',
        confirmButtonClass: 'btn btn-danger ladda-button basic-ladda-button mr-5',
        cancelButtonClass: 'btn btn-success',
        buttonsStyling: false
      }).then(function () {
        showLoader()
        parentE = ele.parent().parent();
        IDContact = ele.attr("data-id");
        data    = new FormData();
        data.append("ID",IDContact);
        ajax = ajaxFunction();
        ajax.onreadystatechange = function(e){
          if(e.target.readyState == 4 && e.target.status == 200){
              res = e.target.response;
              if(res == 1){
                $(parentE).slideUp(1000);
                hideLoader();
                swal('تم !', 'تم حذف العميل بنجاح.', 'success');
              }
          }
        }
        ajax.open("POST", config['site'] + "/event/contacts/delete.php");
        ajax.send(data);

      }, function (dismiss) {
        // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
        if (dismiss === 'cancel') {
          swal('الغاء', 'تم الغاء الامر :)', 'error');
        }
    });
}

$(".formAddContant").on("submit",function(event){
  event.preventDefault();
  err = Array();
  fullname = $("#fullname").val()
  email = $("#email").val()

  if(fullname){
    if(fullname.length < 5){
      err.push("لا يجب ان يكون اسم العميل أقل من 5 أحرف");
    }else if(fullname.length > 45){
    
      err.push("لا يجب ان يكون اسم العميل اكثر من 45 حرف");
    }
  }else{
  
    err.push("يجب كتابة أسم العميل");
  }
  if(err.length < 1){
    if(email){
      if(validateEmail(email) != true){
        err.push("الرجاء كتابة البريد الالكتروني بشكل صحيح");
      }
    }else{
      err.push("يجب كتابة البريد الالكتروني الخاص بالعميل");
    }
  }
  err.forEach(e => {
    swal('خطأ !', e, 'error');
  });

  if(err.length < 1){
    showLoader()
    data    = new FormData();
    data.append("fullname",fullname);
    data.append("email",email);
    ajax = ajaxFunction();
    ajax.onreadystatechange = function(e){
      if(e.target.readyState == 4 && e.target.status == 200){
          res = JSON.parse(e.target.response);
          if(res.status == 1){
            hideLoader();
            $(".modal").click()
            swal('تم', 'قمت للتو بإضافة عميل جديد', 'success');
            $("#fullname").val("");
            $("#email").val("");
            setTimeout(function(){
              swal({
                title: 'هل  تسمح ؟',
                text: " هل تريد الذهاب للعميل !",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#0CC27E',
                cancelButtonColor: '#FF586B',
                confirmButtonText: 'نعم, من فضلك  !',
                cancelButtonText: 'لا, البقاء هنا !',
                confirmButtonClass: 'btn btn-danger ladda-button basic-ladda-button mr-5',
                cancelButtonClass: 'btn btn-success',
                buttonsStyling: false
              }).then(function () {
                    swal('تحديث!', 'سيتم التحديث الأن.', 'success');
                    window.location.href = "/client/" + res.ID;

              }, function (dismiss) {
                // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
                if (dismiss === 'cancel') {
                  swal('الغاء', 'شكرا لك  :)', 'error');
                }
              });
            },3000)
          }else if(res.status == 2){

            hideLoader();
            swal('خطأ !', "اكتشفنا ان هذا البريد الالكتروني مرتبط بعميل أخر بالفعل", 'error');
            

          }
      }
    }
    ajax.open("POST", config['site'] + "/event/contacts/add.php");
    ajax.send(data);
  }
})

$(".fromUserContact").on("submit",function(event){
  event.preventDefault();
  ID = $(this).attr('data-id');
  err = Array();
  status = 0;
  fullname = $("#fullname").val();
  email = $("#email").val();
  address = $("#address").val();
  password = $("#password").val();
  actpassword = $("#actpassword").val();
  oldpassword = $("#oldpassword").val();

  if(fullname){
    if(fullname.length < 5){
      err.push("لا يجب الا يكون اسم العميل أقل من 5 أحرف");
    }else if(fullname.length > 45){
      err.push("لا يجب الا يكون اسم العميل اكثر من 45 حرف");
    }else{
      if(email){
        if(validateEmail(email) != true){
          err.push("الرجاء كتابة البريد الالكتروني بشكل صحيح");
        }else{

          if(password){
            if(password.length < 8){
              err.push("لا يجب الا يكون رمز المرور أقل من 8 أحرف");
            }else if(password.length > 40){
              err.push("لا يجب الا يكون رمز المرور اكثر من 40 حرف");
            }else{
              if(password != actpassword){
                err.push("رمزي المرور غير متطابيقين");
              }
            }
          }

        }
      }else{
        err.push("يجب كتابة البريد الالكتروني الخاص بالعميل");
      }
    }
  }else{
    err.push("يجب كتابة أسم العميل");
  }


  err.forEach(e => {
    swal('خطأ !', e, 'error');
  });

  if(err.length < 1){
    swal({
      title: 'هل انت متأكد ؟',
      text: "أنت في طريقك لتعديل بيانات هذا العميل !",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#0CC27E',
      cancelButtonColor: '#FF586B',
      confirmButtonText: 'نعم, قم بذلك !',
      cancelButtonText: 'لا, قم بالإلغاء !',
      confirmButtonClass: 'btn btn-danger ladda-button basic-ladda-button mr-5',
      cancelButtonClass: 'btn btn-success',
      buttonsStyling: false
    }).then(function () {
      showLoader()
      data    = new FormData();
      data.append("ID",ID);
      data.append("fullname",fullname);
      data.append("email",email);
      data.append("address",address);
      data.append("password",password);
      data.append("actpassword",actpassword);
      data.append("oldpassword",oldpassword);
      ajax = ajaxFunction();
      ajax.onreadystatechange = function(e){
        if(e.target.readyState == 4 && e.target.status == 200){
            res = e.target.response;
            if(res == 1){
              hideLoader();
              swal('تم!', 'قمت للتو بتعديل بيانات هذا العميل.', 'success');
              $("#PFullName").html(fullname);
              $("#PAddress").html(address);
            }else if(res == 2){
              hideLoader();
              swal('خطأ !', "اكتشفنا ان هذا البريد الالكتروني مرتبط بعميل أخر بالفعل", 'error');
            }
        }
      }
      ajax.open("POST", config['site'] + "/event/users/edit.php");
      ajax.send(data);
  
    }, function (dismiss) {
      // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
      if (dismiss === 'cancel') {
        swal('الغاء', 'تم الغاء الامر :)', 'error');
      }
  
  });

  }

});

$(".fromEditContact").on("submit",function(event){
  event.preventDefault();
  ID = $(this).attr('data-id');
  err = Array();
  status = 0;
  fullname = $("#fullname").val()
  email = $("#email").val()
  address = $("#address").val()

  if(fullname){
    if(fullname.length < 5){
    
      err.push("لا يجب ان يكون اسم العميل أقل من 5 أحرف");
    }else if(fullname.length > 45){
    
      err.push("لا يجب ان يكون اسم العميل اكثر من 45 حرف");
    }
  }else{
  
    err.push("يجب كتابة أسم العميل");
  }
  if(err.length < 1){
    if(email){
      if(validateEmail(email) != true){
      
        err.push("الرجاء كتابة البريد الالكتروني بشكل صحيح");
      }
    }else{
      err.push("يجب كتابة البريد الالكتروني الخاص بالعميل");
    }
  }
  err.forEach(e => {
    swal('خطأ !', e, 'error');
  });

  if(err.length < 1){
    swal({
      title: 'هل انت متأكد ؟',
      text: "أنت في طريقك لتعديل بيانات هذا العميل !",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#0CC27E',
      cancelButtonColor: '#FF586B',
      confirmButtonText: 'نعم, قم بذلك !',
      cancelButtonText: 'لا, قم بالإلغاء !',
      confirmButtonClass: 'btn btn-danger ladda-button basic-ladda-button mr-5',
      cancelButtonClass: 'btn btn-success',
      buttonsStyling: false
    }).then(function () {
      showLoader()
      data    = new FormData();
      data.append("ID",ID);
      data.append("fullname",fullname);
      data.append("email",email);
      data.append("address",address);
      ajax = ajaxFunction();
      ajax.onreadystatechange = function(e){
        if(e.target.readyState == 4 && e.target.status == 200){
            res = e.target.response;
            if(res == 1){
              hideLoader();
              swal('تم!', 'قمت للتو بتعديل بيانات هذا العميل.', 'success');
              $("#PFullName").html(fullname);
              $("#PAddress").html(address);
            }else if(res == 2){
              hideLoader();
              swal('خطأ !', "اكتشفنا ان هذا البريد الالكتروني مرتبط بعميل أخر بالفعل", 'error');
            }
        }
      }
      ajax.open("POST", config['site'] + "/event/contacts/edit.php");
      ajax.send(data);
  
    }, function (dismiss) {
      // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
      if (dismiss === 'cancel') {
        swal('الغاء', 'تم الغاء الامر :)', 'error');
      }
  
  });

  }

});
$(".formAddContantOut").on("submit",function(event){
  err = Array();
  titletel = $("#titletel").val()
  tel = $("#tel").val()
  if(titletel){
    if(titletel.length < 5){
      err.push("لا يجب ان يكون عنوان الهاتف أقل من 5 أحرف");
    }else if(titletel.length > 45){
      err.push("لا يجب ان يكون عنوان الهاتف اكثر من 45 حرف");
    }
  }else{
    err.push("يجب كتابة عنوان الهاتف");
  }

  err.forEach(e => {
    swal('خطأ !', e, 'error');
  });

  if(err.length < 1){
    showLoader()
  }else{
    event.preventDefault();
  }
});

$(".deleteContactTel").on("click",function(){
  deleteContactTel(this);
});


function deleteContactTel(e){
  ele = $(e);
  swal({
      title: 'هل انت متأكد ؟',
      text: "أنت في طريقك لحذف هذا الرقم !",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#0CC27E',
      cancelButtonColor: '#FF586B',
      confirmButtonText: 'نعم, قم بالحذف !',
      cancelButtonText: 'لا, قم بالإلغاء !',
      confirmButtonClass: 'btn btn-danger ladda-button basic-ladda-button mr-5',
      cancelButtonClass: 'btn btn-success',
      buttonsStyling: false
    }).then(function () {

      showLoader()
      parentE = ele.parent().parent();
      IDContact = ele.attr("data-id");
      data    = new FormData();
      data.append("ID",IDContact);
      ajax = ajaxFunction();
      ajax.onreadystatechange = function(e){
        if(e.target.readyState == 4 && e.target.status == 200){
            res = e.target.response;
            if(res == 1){
              $(parentE).slideUp(1000);
              hideLoader();
              swal('Deleted!', 'Your imaginary file has been deleted.', 'success');
            }
        }
      }
      ajax.open("POST", config['site'] + "/event/phone/delete.php");
      ajax.send(data);

    }, function (dismiss) {
      // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
      if (dismiss === 'cancel') {
        swal('الغاء', 'تم الغاء الامر :)', 'error');
      }
  });
}
function preparesuggest(e){
  $(e).kendoComboBox({
      dataTextField: "text",
      dataValueField: "value",
      dataSource: JsonData,
      filter: "contains",
      suggest: true,
      index: "",
  });
}

titleCount = 1;
function newRow(){
  titleCount += 1;
  tr = crt("tr");
  $(tr).attr("role","row");
  $(tr).attr("class","odd itemBill");
  $(tr).attr("ID","row-" + titleCount);
  $(tr).attr("data-row",titleCount);

  drag = crt("td");
  $(drag).attr("class","p-0 text-center toggleMove");
  spandrag = crt("span");
  $(spandrag).attr("style","font-size: 21px;cursor: move;");
  idrag = crt("i");
  $(idrag).attr("class","i-Drag");
  $(spandrag).append(idrag);
  $(drag).append(spandrag);
  $(tr).append(drag);

  del = crt("td");
  $(del).attr("class","p-0 text-center toggleDelete");
  spandel = crt("span");
  $(spandel).attr("style","font-size: 21px;cursor: pointer;");
  $(spandel).attr("onclick","deleteRow(this)");

  idel = crt("i");
  $(idel).attr("class","i-Close-Window");
  $(spandel).append(idel);
  $(del).append(spandel);
  $(tr).append(del);

  td1 = crt("td");
  $(td1).attr("class","p-0");
  input1 = crt("input");
  $(input1).attr("ID","title-" + titleCount);
  $(input1).attr("style","border-radius: 0;");
  $(input1).attr("type","text");
  $(input1).attr("class","form-control title p-0");
  $(td1).append(input1);
  $(tr).append(td1);

  td2 = crt("td");
  $(td2).attr("class","p-0");
  $(td2).attr("style","position: relative;");
  input2 = crt("input");
  $(input2).attr("type","number");
  $(input2).attr("class","form-control amount");
  $(input2).attr("disabled","disabled");
  $(input2).attr("min","0");
  $(input2).attr("ID","amount-" + titleCount);
  $(input2).attr("onchange","clcAmount(this)");
  pop = crt("div");
  $(pop).attr("class","pops");
  $(pop).attr("ID","pop-" + titleCount);
  $(td2).append(input2);
  $(td2).append(pop);

  $(tr).append(td2);

  td3 = crt("td");
  $(td3).attr("class","p-0");
  input3 = crt("input");
  $(input3).attr("type","text");
  $(input3).attr("class","form-control sell");
  $(input3).attr("ID","sell-" + titleCount);
  $(input3).attr("disabled","disabled");
  $(td3).append(input3);
  $(tr).append(td3);

  td4 = crt("td");
  $(td4).attr("class","p-0");
  input4 = crt("input");
  $(input4).attr("type","text");
  $(input4).attr("class","form-control total");
  $(input4).attr("ID","total-" + titleCount);
  $(input4).attr("disabled","disabled");
  $(td4).append(input4);
  $(tr).append(td4);

  $("#bodyBill").append(tr);
  preparesuggest("#title-" + titleCount);
  var fabric = $("#title-" + titleCount).data("kendoComboBox");
  addEventBill("#title-" + titleCount);
  $(".toggleMove").hide(1);  
  $(".toggleDelete").hide(1);  
}

  $(".addRow").on("click",function(){
    emptyRows = 0;
    for(x=0;x<=$('.itemBill').length;x++){
      IDEle = $($('.itemBill')[x]).attr("data-row");
      if($($("#row-"+ IDEle +" input.title")[1]).val() == ""){
        emptyRows = 1;
      }
    }

    if(emptyRows == 1){
      swal({
        type: 'warning',
        title: 'تحذير!',
        text: 'لعدم وجود اي قيم فارغة , لقد قمنا بالتأكد من وجود حقل فارغ بالفعل',
        confirmButtonText: 'فهمت',
        buttonsStyling: false,
        confirmButtonClass: 'btn btn-lg btn-warning'
      });
    }else{
      newRow();
      emptyRows = 0;
    }

  });
function addEventBill(e){
  $(e).on("change",function(){
    setInfoRow(this);
  });
}
function setInfoRow(e){
  producerID = $(e).val();
  parentID = $($(e).parent().parent().parent()).attr("data-row");
  eleAmount = $("#amount-" + parentID);
  sell = $("#sell-" + parentID);
  eleTotal = $("#total-" + parentID);

  if(!eleAmount.val()){
    eleAmount.val(0);
    eleAmount.removeAttr("disabled");
  }


  setMaxAmount();
  clcSell();
  clcAllTotal();

}

function clcAmount(e){

  IDamount = e.getAttribute("ID");
  parentID = $($("#" + IDamount).parent().parent()).attr("data-row");
  producerID = $("title-"+ parentID).val();
  if(producerID){
    sell = $("#sell-" + parentID);
    eleTotal = $("#total-" + parentID);
  }
  CountAmount(parentID,$("#"+IDamount).val());

  setMaxAmount();
  clcSell();
  clcAllTotal();
}


function clcSell(){
  for(i=0;i<$(".amount").length;i++){
    IDE = $($('.amount')[i]).parent().parent().attr("data-row");
    thisInput = $("#row-"+ IDE +" .amount");
    thisAmount = thisInput.val();
    PID = $($("#row-"+ IDE +" input.title")[1]).val();
    if(PID){
      for(x=0;x<fullDataJspn.length;x++){
        if(fullDataJspn[x]["ID"] == PID){
          producer = fullDataJspn[x];
        }
      } 
      thisPrice = (thisAmount*producer['sell']);
      if(thisPrice >= 0){
        if(thisPrice > 0){
          $("#row-"+ IDE +" .sell").val(producer['sell']);
          $("#row-"+ IDE +" .total").val(thisPrice);
        }else{
          $("#row-"+ IDE +" .sell").val(producer['sell']);
          $("#row-"+ IDE +" .total").val(thisPrice);
        }
      }else{
        $("#row-"+ IDE +" .sell").val(producer['sell']);
        $("#row-"+ IDE +" .total").val("");
      }
    }else{
      $("#row-"+ IDE +" .sell").val("");
      $("#row-"+ IDE +" .total").val("");
    }
  }
  clcAllTotal();
  producer = "";
}

function clcAllTotal(){
  x = $(".total").length;
  total = 0;
  for(i=0;i<x;i++){
    total += Number($($(".total")[i]).val());
  }
  $(".allTotal").html(total + " جنيه");
  $(".allTotal").attr("val",total);
}

$(".btnSort").on("click",function(){
  $(".toggleMove").toggle(1);  
  $(".toggleDelete").hide(1);  
  sortableEle();
})
$(".btnDeleteRow").on("click",function(){
  $(".toggleMove").hide(1);  
  $(".toggleDelete").toggle(1);  
})

function sortableEle(){
  $( "#bodyBill" ).sortable();
  $( "#bodyBill" ).disableSelection();
}
function CountAmount(ID,thisAmount){

  IDproducer = $($("#row-"+ ID +" input.title")[1]).val();
  amountTotal = 0;
  if(IDproducer){
    for(i=0;i<$('.itemBill').length;i++){

      IDE = $($('.itemBill')[i]).attr("data-row");
      if($($("#row-"+ IDE +" input.title")[1]).val() == IDproducer){
        amountTotal += Number($($("#row-"+ IDE +" .amount")).val());
      }
    }

    for(i=0;i<fullDataJspn.length;i++){
      if(fullDataJspn[i]["ID"] == IDproducer){
        producer = fullDataJspn[i];
        restAmount = producer['amount'];
      }
    }
  }
  theRest = Number(restAmount - amountTotal);

  alertAmount(ID,IDproducer,theRest)
}
clearInt = "";
function alertAmount(ID,IDp,num){
  if(clearInt){
    clearInterval(clearInt);
  }

  if(num > 0){
    $("#pop-" + ID).html("باقي : " + num);
    $("#pop-" + ID).fadeIn();
    clearInt = setTimeout(function(){
      $("#pop-" + ID).fadeOut();
    },500);
  }else{
    $("#pop-" + ID).html("تم استهلاك الكمية");
    $("#pop-" + ID).fadeIn();
    clearInt = setTimeout(function(){
      $("#pop-" + ID).fadeOut();
    },1500);
    swal({
      type: 'warning',
      title: 'تحذير!',
      text: 'في حالة اتمام الفاتورة ستكون قد نفذت كل الكمية الموجودة في المخزن من المنتج رقم : ' + IDp,
      confirmButtonText: 'فهمت',
      buttonsStyling: false,
      confirmButtonClass: 'btn btn-lg btn-warning'
    });
  }


}

function setMaxAmount(){
  for(i=0;i<$(".itemBill").length;i++){

    IDEle = $($('.itemBill')[i]).attr("data-row");
    PID = $($("#row-"+ IDEle +" input.title")[1]).val();
    thisInput = $("#row-"+ IDEle +" .amount");
    thisAmountVal = thisInput.val();




    if(PID > 0){
      restInputAmount = allWithOutMe(PID,thisInput);
      restAmount = amountPr(PID,fullDataJspn);
      maxAmount = (restAmount - restInputAmount);
      $("#row-"+ IDEle +" .amount").attr("max",maxAmount);
      if(thisAmountVal >= maxAmount){
        if(restInputAmount == 0){
          $("#row-"+ IDEle +" #amount-" + IDEle).val(maxAmount);
        }else if(maxAmount == 0){
          $("#row-"+ IDEle +" .amount").val(0);
        }
      }
    }else{
      $("#row-"+ IDEle +" .amount").attr("disabled","disabled");
      $("#row-"+ IDEle +" .amount").val("");
    }
  }
}

function allWithOutMe(PID,thisInput){
  if(PID){
    restInputAmount = 0;
    for(x=0;x<$('.itemBill').length;x++){
      IDE = $($('.itemBill')[x]).attr("data-row");
      if($($("#row-"+ IDE +" input.title")[1]).val() == PID){
        if($($("#row-"+ IDE +" .amount"))[0] != thisInput[0]){
          restInputAmount += Number($($("#row-"+ IDE +" .amount")).val());
        }
      }
    }
    return restInputAmount;
  }
}

function amountPr(PID,fullDataJspn){
  if(PID){
    for(y=0;y<fullDataJspn.length;y++){
      if(fullDataJspn[y]["ID"] == PID){
        producer = fullDataJspn[y];
        restAmount = producer['amount'];
      }
    }
    return restAmount;
  }
}
function deleteRow(ele){
  if($(".itemBill").length <= 1){
    swal({
      type: 'warning',
      title: 'تحذير!',
      text: 'لا يمكن تنفيذ الطلب , بسبب وجود حقل واحد فقط',
      confirmButtonText: 'فهمت',
      buttonsStyling: false,
      confirmButtonClass: 'btn btn-lg btn-warning'
    });
  }else{
    eletr = $(ele).parent().parent();    
    eletr.fadeOut(300);
    setTimeout(function(){
      eletr.remove();setMaxAmount();
    },500);
    
  }
  
}

$("#buyAddProducer").on("change",function(){diffAddProducer();});
$("#sellAddProducer").on("change",function(){diffAddProducer();});
function diffAddProducer(){
  buy = $("#buyAddProducer").val();
  sell = $("#sellAddProducer").val();
  diff = sell - buy; 
  diff = diff.toFixed(2);  
  $("#diffAddProducer").val(diff);
  if(diff > 0){
    $("#diffStatus").html("مكسب");
    $("#diffStatus").addClass("bg-success");
    $("#diffStatus").removeClass("bg-danger bg-warning");
  }else if(diff == 0){
    $("#diffStatus").html("لا تأثير");
    $("#diffStatus").addClass("bg-warning");
    $("#diffStatus").removeClass("bg-danger bg-success");
  }else if(diff < 0){
    $("#diffStatus").html("خسارة");
    $("#diffStatus").addClass("bg-danger");
    $("#diffStatus").removeClass("bg-success bg-warning");
  }
}
$(".reBar").on("click",function(){
  $("#barcode").val($("#barcode").attr("data-bar"));
});

$("#client").on("change",function(){
  $("#contClient").fadeOut();
  $("#loaderContClient").fadeIn();
  ID = $("#client").val();
  data    = new FormData();
  data.append("ID",ID);
  ajax = ajaxFunction();
  ajax.onreadystatechange = function(e){
    if(e.target.readyState == 4 && e.target.status == 200){
        res = e.target.response;
        if(res != 0){
          $("#contClient").html(res);
          $("#loaderContClient").fadeOut();
          $("#contClient").fadeIn();
        }
    }
  }
  ajax.open("POST", config['site'] + "/event/newBill/getClientInfo.php");
  ajax.send(data);
});
$("#printBill").on("click",function(){
  window.frames["printBill"].print();
});
$("#printBarCodeProducuer").on("click",function(){
  window.frames["BarCodeProducuer"].print();
});

$(".checkboxeventallproducer").change(function() {
  num = 0;
  for(x=0;x<$(".checkboxeventallproducer").length;x++){
    if($(".checkboxeventallproducer")[x].checked) {
      num += 1;
    }
  }
  if(num>0){
    $(".settingAllProducer").slideDown();
  }else{
    $(".settingAllProducer").slideUp();
  }
});

function getAllProducerCheckBoxVal(){
  arrID = [];
  for(x=0;x<$(".checkboxeventallproducer").length;x++){
    if($(".checkboxeventallproducer")[x].checked) {
      arrID.push($($(".checkboxeventallproducer")[x]).val());
    }
  }
  return JSON.stringify(arrID);
}

$(".btnDeleteMultiEventAllProducer").on("click",function(){
  swal({
    title: 'هل انت متأكد ؟',
    text: "أنت في طريقك لحذف عدد من المنتجات !",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#0CC27E',
    cancelButtonColor: '#FF586B',
    confirmButtonText: 'نعم, قم بالحذف !',
    cancelButtonText: 'لا, قم بالإلغاء !',
    confirmButtonClass: 'btn btn-danger ladda-button basic-ladda-button mr-5',
    cancelButtonClass: 'btn btn-success',
    buttonsStyling: false
  }).then(function () {
    arrval = getAllProducerCheckBoxVal();
    data    = new FormData();
    data.append("arrval",arrval);
    ajax = ajaxFunction();
    ajax.onreadystatechange = function(e){
      if(e.target.readyState == 4 && e.target.status == 200){
          res = e.target.response;
          if(res == 1){
            hideLoader();
            swal('تم حذف !', 'تم الحذف بنجاح.', 'success');
            window.location = config['site'] + "/allProducer";
          }
      }
    }
    ajax.open("POST", config['site'] + "/event/producer/multiDelete.php");
    ajax.send(data);

  }, function (dismiss) {
    // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
    if (dismiss === 'cancel') {
      swal('الغاء', 'تم الغاء الامر :)', 'error');
    }
  });
}) 

$(".btnNotSellMultiEventAllProducer").on("click",function(){
  swal({
    title: 'هل انت متأكد ؟',
    text: "أنت في طريقك لتحديد عدد من المنتجات بأنه غير قابل للبيع !",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#0CC27E',
    cancelButtonColor: '#FF586B',
    confirmButtonText: 'نعم, قم بالحذف !',
    cancelButtonText: 'لا, قم بالإلغاء !',
    confirmButtonClass: 'btn btn-danger ladda-button basic-ladda-button mr-5',
    cancelButtonClass: 'btn btn-success',
    buttonsStyling: false
  }).then(function () {
    arrval = getAllProducerCheckBoxVal();
    data    = new FormData();
    data.append("arrval",arrval);
    ajax = ajaxFunction();
    ajax.onreadystatechange = function(e){
      if(e.target.readyState == 4 && e.target.status == 200){
          res = e.target.response;
          if(res == 1){
            $(parentE).slideUp(1000);
            hideLoader();
            swal('Deleted!', 'Your imaginary file has been deleted.', 'success');
            window.location = config['site'] + "/allProducer";
          }
      }
    }
    ajax.open("POST", config['site'] + "/event/producer/multiNotSell.php");
    ajax.send(data);

  }, function (dismiss) {
    if (dismiss === 'cancel') {
      swal('Cancelled', 'تم الالغاء :)', 'error');
    }
  });
}) 

$(".inputAmount").on("change",function(){
  newAmount = $(this).val();
  type = $("#typeUpdataAmount").val();
  before = $(".beforeAmount").val();
  if(type == 1){
    after = Number(newAmount) + Number(before);
  }else if(type == 2){
    after = Number(before -  newAmount);
  }
  $(".afterAmount").val(after);
});
$("#typeUpdataAmount").on("change",function(){
  type = $("#typeUpdataAmount").val();
  newAmount = $('.inputAmount').val();
  before = $(".beforeAmount").val();
  if(type == 1){
    after = Number(newAmount) + Number(before);
  }else if(type == 2){
    after = Number(before -  newAmount);
  }
  $(".afterAmount").val(after);
})

$($("#liveDate")[0]).on("change",function(){
  if($("#liveDate")[0].checked){
    $("#GroubDate").hide();
  }else{
    $("#GroubDate").show();
  }
});

$("#FormAddMovements").on("submit",function(event){
  event.preventDefault();
  swal({
    title: 'هل انت متأكد ؟',
    text: "هل متأكد من تنفيذ هذه العملية !",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#0CC27E',
    cancelButtonColor: '#FF586B',
    confirmButtonText: 'نعم, قم بالتنفيذ !',
    cancelButtonText: 'لا, قم بالإلغاء !',
    confirmButtonClass: 'btn btn-danger ladda-button basic-ladda-button mr-5',
    cancelButtonClass: 'btn btn-success',
    buttonsStyling: false
  }).then(function () {

    IDp = JsonProducer["ID"];
    newAmount = $(".inputAmount").val();
    type = $("#typeUpdataAmount").val();
    note = $("#note").val();
    sell = $("#sell").val();
    if($("#liveDate")[0].checked){
      liveDate = true;
    }else{
      liveDate = false;
    }
    date = $("#date").val();
    time = $("#time").val();
    total = (newAmount * sell);
    afterAmount = $(".afterAmount").val();
    if(afterAmount < 0){
      swal('خطأ !', "الكمية المراد انقاصها من المخزن أقل من الكمية الحالية", 'error');
    }else{
      addMovements(IDp,newAmount,type,sell,liveDate,date,time,note,total);
    }
  }, function (dismiss) {
    if (dismiss === 'cancel') {
      swal('Cancelled', 'تم الالغاء :)', 'error');
    }
  });
  
})

function addMovements(MIDP,Mamount,Mtype,Msell,McurentDate,Mdate,Mtime,Mnote,Mtotal){

  MIDP        = MIDP;
  Mamount     = Mamount;
  Mtype       = Mtype;
  Msell       = Msell;
  McurentDate = McurentDate;
  Mdate       = Mdate;
  Mtime       = Mtime;
  Mnote       = Mnote;
  Mtotal      = Mtotal;

  data    = new FormData();
  data.append("MIDP",MIDP);
  data.append("Mamount",Mamount);
  data.append("Mtype",Mtype);
  data.append("Msell",Msell);
  data.append("McurentDate",McurentDate);
  data.append("Mdate",Mdate);
  data.append("Mtime",Mtime);
  data.append("Mnote",Mnote);
  data.append("Mtotal",Mtotal);

  ajax = ajaxFunction();
  ajax.onreadystatechange = function(e){
    if(e.target.readyState == 4 && e.target.status == 200){
        res = e.target.response;
        if(res == 1){
          $(parentE).slideUp(1000);
          hideLoader();
          swal('Deleted!', 'Your imaginary file has been deleted.', 'success');
          window.location = config['site'] + "/allProducer";
        }
    }
  }
  ajax.open("POST", config['site'] + "/event/producer/updateAmount.php");
  ajax.send(data);


}

function readURL(input,ID) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onloadend = function (a) {
          $(ID).attr('src', a.target.result);
      };
      reader.readAsDataURL(input.files[0]);
  }
}

$(".formAddUser").on("submit",function(event){
  err = Array();
  fullname = $("#fullname").val()
  email = $("#email").val()
  password = $("#password").val()
  actpassword = $("#actpassword").val()
  // avatar = $("#avatarUserInput")[0];

  if(fullname){
    if(fullname.length < 5){
      err.push("لا يجب ان يكون اسم العميل أقل من 5 أحرف");
    }else if(fullname.length > 45){
      err.push("لا يجب ان يكون اسم العميل اكثر من 45 حرف");
    }else{
      //////////////////////////
      if(email){
        if(validateEmail(email) != true){
          err.push("الرجاء كتابة البريد الالكتروني بشكل صحيح");
        }else{
          ////////////////////////
          if(password){
            if(password.length < 8){
              err.push("لا يجب ان يكون رمز المرور أقل من 8 أحرف");
            }else if(password.length > 45){
              err.push("لا يجب ان يكون رمز المرور اكثر من 45 حرف");
            }else{

              if(actpassword){
                if(password != actpassword){
                  err.push("رمز المرور غير متطابقين");
                }
              }else{
                err.push("يجب كتابة تأكيد رمز المرور");
              }

            }
          }else{
            err.push("يجب كتابة رمز المرور");
          }
        }
      }else{
        err.push("يجب كتابة البريد الالكتروني الخاص بالعميل");
      }

    }
  }else{
    err.push("يجب كتابة أسم العميل");
  }

  err.forEach(e => {
    swal('خطأ !', e, 'error');
  });

  if(err.length < 1){
    showLoader();
  }else{
    event.preventDefault();
  }
})