function cargarT(obj) {
    var index = obj.options[obj.selectedIndex].value; //index left
    var name = $(obj).attr("name");
    var n = name.split("y");
    var id = "#" + n[1];// id del raght
    $(id).empty();
    $(id).append('<option selected hidden value="">- Turnos -</option>');
    var myInt = parseInt(n[1]) - 1;//numero del up
    var indeup = $('select[name=category' + myInt + ']').val();// index del up
    //setTimeout(alert(myInt),500);
    // $('select[name=category01]').empty();
    if (index !== indeup) {
        $.get('../controller/cargarlist.php', 'day=' + index + '&inx=null', function (data) {
            $(id).append(data);
        });
    } else {
        // alert("data cargaT ddia: "+index+" y se envio t "+temp);
        $.get('../controller/cargarlist.php', 'day=' + index + '&inx=' + temp, function (data) {
            $(id).append(data);
        });
    }

    index = null;
}

function cargarNext(obj) {
    var indexR = obj.options[obj.selectedIndex].value; // index de la rigth
    var name = $(obj).attr("name");
    var n = name.split("-");
    var num = name.split("category");
    var num2 = num[1].split("-right");
    var indexL = $('select[name=' + n[0] + ']').val(); //index de la left
    var myInt = parseInt(num2[0]) + 1;
    $('select[name=category' + myInt + ']').prop('selectedIndex', 0);
    $('select[name=category' + myInt + '-right]').prop('selectedIndex', 0);

    //alert("data d y t: "+indexL+" y "+indexR);

    for (var i = 0; i < 9; i++) {//turnos
        for (var x = 0; x < 7; x++) {//dias
            // alert("data d y t: "+i+" y "+x);
            if (indexL === x.toString() && indexR === i.toString()) {
                //alert("dataif dia y tur : " + indexL + " y " + indexR + " se guardo" + i);
                temp = i.toString();
                temp2 = true;
            }
        }
    }
}