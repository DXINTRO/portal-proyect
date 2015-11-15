/* global skel */
var q = 1;
// this is a global variable
var temp = null;
var temp2 = null;
var $ = jQuery.noConflict();
(function nav($) {skel.breakpoints({
    wide: '(max-width: 1680px)',
    normal: '(max-width: 1280px)',
    narrow: '(max-width: 980px)',
    narrower: '(max-width: 840px)',
    mobile: '(max-width: 736px)',
    mobilep: '(max-width: 480px)'
});

$(function () {
    var $window = $(window),
            $body = $('body'),
            $header = $('#header'),
            $banner = $('#banner');

    // Fix: Placeholder polyfill.
    $('form').placeholder();

    // Prioritize "important" elements on narrower.
    skel.on('+narrower -narrower', function () {
        $.prioritize('.important\\28 narrower\\29', skel.breakpoint('narrower').active);
    });

    // Dropdowns.
    $('#nav > ul').dropotron({alignment: 'right'});

    // Off-Canvas Navigation.

    // Navigation Button.
    $('<div id="navButton">' + '<a href="#navPanel" class="toggle"></a>' + '</div>').appendTo($body);

    // Navigation Panel.
    $('<div id="navPanel" style="display:none;">' + '<nav>' + $('#nav').navList() + '</nav>' + '</div>')
            .appendTo($body)
            .panel({delay: 500, hideOnClick: true, hideOnSwipe: true, resetScroll: true, resetForms: true, side: 'left', target: $body, visibleClass: 'navPanel-visible'});

    // Fix: Remove navPanel transitions on WP<10 (poor/buggy performance).
    if (skel.vars.os === 'wp' && skel.vars.osVersion < 10){$('#navButton, #navPanel, #page-wrapper').css('transition', 'none');}

    // Header.
    // If the header is using "alt" styling and #banner is present, use scrollwatch
    // to revert it back to normal styling once the user scrolls past the banner.
    // Note: This is disabled on mobile devices.
    if (!skel.vars.mobile && $header.hasClass('alt') && $banner.length > 0) {

        $window.on('load', function () {
            $banner.scrollwatch({
                delay: 0,
                range: 0.5,
                anchor: 'top',
                on: function () {
                    $header.addClass('alt reveal');
                },
                off: function () {
                    $header.removeClass('alt');
                }  });});}});})( window.jQuery);

var progress = setInterval(function () {// funcion para la barra de carga
    var $bar = $('.bar');
    if ($bar.width() === 400) {
        clearInterval(progress);
        $('.progress').removeClass('active');
    } else {
        $bar.width($bar.width() + 40);
    }
    $bar.text($bar.width() / 4 + "%");
}, 800);


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

function button_more() {//funcion agregar filas en principal
             if (q===1) {
            $('#one').show(500);$('#one').css("display","inline-table");
        }else if(q ===2) {$('#two').show(500);$('#two').css("display","inline-table");}
        else if(q===3) {$('#three').show(500);$('#three').css("display","inline-table");}
        else if(q===4) {$('#four').show(500);$('#four').css("display","inline-table");}
        else if(q >=5) {$('#five').show(500);$('#five').css("display","inline-table");q=0;}
        q++;
}

