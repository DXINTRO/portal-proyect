//Hide Hints
$(".msj").hide();
/////////////////////////////////////////////////VALIDACIONES///////////////////////////////////////////////////////////////////////////////////////////////////////////
function ValitatePass() {
   
    if ($("#newpassword").val().length > 7) {
        //Hind hint if valid
        $("#newpassword").next().hide();
        if ($("#newpassword").val() === $("#confirm_password").val()) {
            //Hide hint if matched
            $("#confirm_password").next().hide();
            $("#boton2").prop("disabled", false);
            return true;
           } else {
            //else show hint
            $("#boton2").prop("disabled", true);
            $("#confirm_password").next().show();
            return false;
        }
    } else {
        //else show hint
        $("#newpassword").next().show();
return false;
    }
}

function validateT() {
    var category1 = $('select[name=category1]').val();
    var category01 = $('select[name=category1-right]').val();
    var category02 = $('select[name=category2]').val();
    var category2 = $('select[name=category2-right]').val();
    if ((category1 !== "" && category01 !== "") || (category2 !== "" && category02 !== "")) {
        $("#myDiv").removeClass('error');
        return true;
    } else {
        alert("Porfavor, seleccione por lo menos un turno");
        $("#myDiv").addClass('error');// to add the style $(".hilight").removeClass("hilight"); 
        return false;
    }
}
function validateR() {
    var expr;
    for (var i = 1, max = 49; i <= max; i++) {
       if ((document.getElementsByTagName("input")[i].value === "") || (document.getElementsByTagName("input")[i].value === "0")) {
            expr = true;break;} else {expr = false;}
    }
    if (expr) {
        alert("Porfavor, No deje ningun campo sin valor ");
        $("#tableResize").addClass('error');// to add the style $(".hilight").removeClass("hilight");
        return false;
    } else {
        $("#tableResize").removeClass('error');
        return true;
    } 
}
function twoclick(e){   
    if ($(e).is('[disabled]')) {
        $(e).removeAttr("disabled");
         $("#errormsj2").hide();
         $(e).removeClass('error');
        return false;
    }else{
        return true;
    }
}
function oneclick(e){   
        $(e).removeAttr("disabled");
         $("#errormsj").hide();
        $("#errormsjradio").hide();
         $(e).removeClass('error');
     }
function validateEmail(e) {
    if (twoclick(e)) {
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if (!emailReg.test($(e).val())) {
              var t = setTimeout("$('#email').addClass('error')", 800);
        return false;
    } else {
          $("#email").removeClass('error');
         $("#email").attr('disabled','disabled');
         return true;
         }}

}
////////////////////////////////////READY SUBMITES////////////////////////////////////////////
 $( document ).ready(function() {

$('#formPrimary').submit(function (e) {
    if (validateT() !== false) {
        e.preventDefault();  //prevent form from submitting
        //e.unbind(); //unbind. to stop multiple form submit.
        var data = $("#formPrimary :input").serializeArray();
        console.log(data); //use the console for debugging, F12 in Chrome, not alerts
        //alert('Handler for .submit() called.');
        // Enviamos el formulario usando AJAX
        $.ajax({
            type: "POST", // POST, GET, PUT, DELETE
            url: $(this).attr('action'),
           // dataType: 'json',
            data: data,
            cache: false,
            beforeSend: function () {
                $('.loading').show(300);
                $('.loading').css("display", "inline-table");
                 $('#boxbuttons').hide(300);
            }
        }) .done(function (data, textStatus, result) {//true
                    console.log("Stado? : " + textStatus);
                    console.log("son: " + data);
                })
                .fail(function () { //false
                    console.log("Ha ocurrido un error! :(");
                })
                .always(function () {
                    console.log("complete! :)");
                  var t = setTimeout("$('.loading').hide(50);", 1800);
                  var t = setTimeout("$('#formPrimary').trigger('reset');", 1800);
                 var t = setTimeout("$('#detalles').css('display', 'inline-table');", 2000);
                });
        return false;
    }
});

    $('#formmail').submit(function () {

        var code = document.getElementById('mail-body').value;
        var subject = document.getElementById("mail-subject").value;
        $.ajax({
            type: "POST", // POST, GET, PUT, DELETE
            url: $(this).attr('action'),
            data: {"parametro1": code, "parametro2": subject},
            beforeSend: function () {
                $('#boton2').hide(10);
                $('#loading2').show(300);
            }
        }).done(function (data, textStatus, result) {//true
            console.log("Stado? : " + textStatus);
            console.log("son: " + data);
        })

                .fail(function () { //false
                    console.log("Ha ocurrido un error! :(");
                })
                .always(function () {
                    console.log("complete! :)");
                    var t = setTimeout("$('#loading2').hide(50);", 1700);
                    var t = setTimeout("$('#boton2').css('display', 'inline-table');", 2700);
                });
        return false;

    });

    $('#Formredi').submit(function (e) {
        if (validateR() !== false) {
            e.preventDefault();
            var data = $("#Formredi :input").serializeArray();
            console.log(data); //use the console for debugging, F12 in Chrome, not alerts
            // Enviamos el formulario usando AJAX
            $.ajax({
                type: "POST", // POST, GET, PUT, DELETE
                url: $(this).attr('action'),
                // dataType: 'json',
                data: data,
                cache: false,
                beforeSend: function () {
                    $('#aplicar').hide(10);
                    $('#loading1').show(300);
                    $('#loading1').css("display", "inline-table");

                }
            }).done(function (data, textStatus, result) {//true
                console.log("Stado? : " + textStatus);
                console.log("son: " + data);
            })
                    .fail(function () { //false
                        console.log("Ha ocurrido un error! :(");
                    })
                    .always(function () {
                        console.log("complete! :)");
                        var t = setTimeout("$('#loading1').hide(50);", 1700);
                        var t = setTimeout("$('#aplicar').css('display', 'inline-table');", 2700);
                    });
            return false;
        }
    });
    
    $('#formModal_showDatos').submit(function (e) {
        e.preventDefault();
        var data = $("#formModal_showDatos :input").serializeArray();
        $.ajax({
            type: "POST", // POST, GET, PUT, DELETE
            url: $(this).attr('action'),
            data: data,
            beforeSend: function () {
                $('#tableDAtos').hide(0);
                $('#loadin3').show(0);
            }
        }).done(function (data, textStatus, result) {//true
            console.log("Stado? : " + textStatus);
            console.log("son: " + data);
        })
                .fail(function () { //false
                    console.log("Ha ocurrido un error! :(");
                })
                .always(function () {
                    var t = setTimeout("$('#loadin3').hide(50);", 2000);
                     $("#buscar").val("");
                     $('#btnSearh').attr('disabled', true);
                      $('#btncancelar').attr('disabled', true);
                      var t = setTimeout("$('#modalDatos').modal('hide');", 2700);
                });
        return false;

    });

});
/////////////////////////////////////////ACCOUNT//////////////////////////////////////////////////////////////////
//    $.each( data, function( key, value ) {
//  console.log( key + ": " + value );
//}); 
function FormAccount(e) {
    var data,load,expr,forhtml;
          if ($("#boton1").is(":focus")) {
          if (validateEmail(e)) {
         data = {"parametro0" : $(e).val()};load="#loadin1";expr=true;}
    }else if ($("#boton2").is(":focus")){ 
           if(ValitatePass()){ expr=true; var data=  {"parametro1" : $('#password').val(), "parametro2" : $('#newpassword').val(), "parametro3" : $('#confirm_password').val()}; load="#loadin2";}
    }else if ($("#boton3").is(":focus")){  data = {"parametro4" : $(e).val()};load="#loadin3";expr=true;
    }else if ($("#boton4").is(":focus")&&(twoclick(e))){  data = {"parametro5" : $(e).val()};load="#loadin4";expr=true;
    }else if ($("#boton5").is(":focus")&&(twoclick(e))){  data = {"parametro6" : $(e).val()};load="#loadin5";expr=true;
    }else if ($("#boton6").is(":focus")&&(twoclick(e))){  data = {"parametro7" : $(e).val()};load="#loadin6";expr=true;
    }else if ($("#boton7").is(":focus")&&(twoclick(e))){  data = {"parametro8" : $(e).val()};load="#loadin7";expr=true;
    }
     if (expr) {
        
  
        $.ajax({
         type: "POST", // POST, GET, PUT, DELETE
          url: "../controller/fun_account.class.php",
           // dataType: 'json',
               data:data ,
               cache: false,
            beforeSend: function () {
                 $(load).show(50);
                 $(load).css("display", "inline-table");
                $('.pass').val('');
                return true;
    
            }
        }) .done(function (data, textStatus, result) {//true
                    console.log("Stado? : " + data);
                    var obj = jQuery.parseJSON(data);
                     console.log( obj.Rpass );
                    if (obj.Rpass==='0') {var t = setTimeout("$('#password').addClass('error')", 800); $("#errormsj1").show(); }
                    else if(obj.Remail==='0'){var t = setTimeout("$('#email').addClass('error')", 800);$("#errormsj2").show();}
                })
                .fail(function () { //false
                    console.log("Ha ocurrido un error! :(");
                    return false;
    
                })
                .always(function () {
                    console.log("complete! :)");
                  $(load).hide(1500);
              
                 });
        
}  }

function FormGiftYlayoll(e){
    if ($(e).val()!=="") {
//    var txtsearh= $(e).val().toLowerCase();
      var txtsearh= $(e).val();
      var data = "";
      if($('#radios-1').is(':checked')){data = {"txtsearhE" : txtsearh};} 
        else if ($('#radios-2').is(':checked')){data = {"txtsearhP" : txtsearh};}
        else if ($('#radios-0').is(':checked')){data = {"txtsearhN" : txtsearh};}
        $.ajax({
              type: "POST", // POST, GET, PUT, DELETE
               url: "../controller/fun_giftYlayoll.class.php",
           // dataType: 'json',
               data:data ,
               cache: false
              }) .done(function (data, textStatus, result) {//true
                    // console.log("Stado? : " + data);
                      if (data!=="null") {
                      var obj = jQuery.parseJSON(data);
                      $('#identificador').val(obj[0].id);
                       $('#tableDatos').bootstrapTable('destroy');
                      $('#tableDatos').bootstrapTable({  data: obj, flat: true  });
                      $('#modalDatos').modal({show: true, backdrop: true,keyboard: false});
                 }else{var t = setTimeout("$('#buscar').addClass('error')", 800); $("#errormsj").show(); }})
                .fail(function () { //false
                    console.log("Ha ocurrido un error! :(");
                    return false;    
                });
    }
}  




///////////////////////////////////MODAL//////////////////////////////////////////////////////////////////////


 
function verDetalle() {
       var codigo = $("#piocha").val();
                 $.ajax({
            type: 'POST',
            data: 'codigo='+codigo,
            url: '../controller/getDetalles.php'
            }) .done(function (data, textStatus, result) {//true
                    console.log("Stado? : " + textStatus);
                       $('#datosAqui').html(data);
                })
                .fail(function () { //false
                    console.log("Ha ocurrido un error! :(");
                })
                .always(function () {
                    console.log("complete! :)");
                  $('#modalDetalle').modal({show: true, backdrop: true});
                });
        return false;
    }
    
function modalviewAcoount(e) {
    if ($(e).attr("id")==="sub") {
         $('#modalSubcrip').modal({show: true, backdrop: true});
   console.log("shoe sub");}else if($(e).attr("id")==="sus"){
       var codigo = $("#piochaid").val();
                 $.ajax({
            type: 'POST',
            data: 'codigo='+codigo,
            url: '../'
            }) .done(function (data, textStatus, result) {//true
                    console.log("Stado? : " + textStatus);
                       $('#datosAqui').html(data);
                })
                .fail(function () { //false
                    console.log("Ha ocurrido un error! :(");
                })
                .always(function () {
                    console.log("complete! :)");
                  $('#modalSuspencion').modal({show: true, backdrop: true});
                });
        return false;}
    }

/////////////////////////////////////KEY UP///////////////////////////////////////////////////////////////////////////////

function keyup(e){
    var data="";
   
    if(($('#radios-0').is(':checked'))||($('#radios-1').is(':checked'))||($('#radios-2').is(':checked'))) { 
        
       if($('#radios-0').is(':checked')) {data = {"data" : $(e).val(),"radio" : "displayname"}; }else if($('#radios-1').is(':checked')){ data = {"data" : $(e).val(),"radio" : "email"};}else if($('#radios-2').is(':checked')){ data = {"data" : $(e).val(),"radio" : "piochaid"};}
          console.log(data);
	 $.ajax({
	   type:'POST',
	   url: "../controller/fun_giftYlayoll.class.php",
	   data:data,
	   dataType: "json",
	   success: function(msg){
                console.log("data:"+msg);
	        var availableTags = msg;
		$("#buscar").autocomplete({ source: availableTags});
                console.log("complete! :)");
	   }
	});
    
    }else{$("#errormsjradio").show();}
}

