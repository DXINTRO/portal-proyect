


//Hide Hints
$(".msj").hide();


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
        data: {"parametro1" : code, "parametro2" : subject},
        cache: false,
              beforeSend: function () {
            $('#save').hide(10);
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
                var t = setTimeout("$('#save').css('display', 'inline-table');", 2700);
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
        }) .done(function (data, textStatus, result) {//true
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



});

 
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
   


    
function msjpass(obj) {

    if ($("#newpassword").val().length > 7) {
        //Hind hint if valid
        $("#newpassword").next().hide();
        if ($("#newpassword").val() === $("#confirm_password").val()) {
            //Hide hint if matched
            $("#confirm_password").next().hide();
            $("#save").prop("disabled", false);
        } else {
            //else show hint
            $("#save").prop("disabled", true);
            $("#confirm_password").next().show();
        }
    } else {
        //else show hint
        $("#newpassword").next().show();

    }
}


