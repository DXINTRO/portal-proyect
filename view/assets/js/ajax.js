
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
            beforeSend: function () {
                $('#loading').show(300);
                $('#loading').css("display", "inline-table");
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
                  var t = setTimeout("$('#loading').hide(50);", 1800);
                  var t = setTimeout("$('#formPrimary').trigger('reset');", 1800);
                 var t = setTimeout("$('#detalles').css('display', 'inline-table');", 2000);
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





//$('#formPrimary').submit(function(e) {
// e.preventDefault();  //prevent form from submitting
//        var data = $("#primary :input").serializeArray();
//        console.log(data); //use the console for debugging, F12 in Chrome, not alerts
//    alert('Handler for .submit() called.');
//});

