<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Row/Column Highlighting</title>
	
	<style type="text/css">
.hover {
    color: #FFFFFF;
	border-color: #FFFFFF #FFFFFF #FFFFFF #FFFFFF;
	background-color: #BFBFBF;
	box-shadow: 2px 2px 5px;
}
.tg th{
	font-family: Arial, sans-serif;
	font-size: 14px;
	font-weight: bold;
	padding: 10px 5px;
	border-style: solid;
	border-width: 1px 2px 1px 1px;
	overflow: hidden;
	word-break: normal;
	border-color: #bbb #BFBFBF #bbb #bbb;
	background-color: #93A8C5;
	border-top-right-radius: 25px;
	-webkit-box-shadow: 1px 0px 5px;
	box-shadow: 1px 0px 5px;
}

.tg td{
	font-family: Arial, sans-serif;
	font-size: 14px;
	border-style: solid;
	border-width: 1px;
	overflow: hidden;
	word-break: normal;
	border-color: #bbb;
	color: #594F4F;
	background-color: #F3F3F3;
	text-align: center;
	padding-top: 6px;
	padding-bottom: 6px;
}


.tg .tg-ugh9{
	background-color: #D4D4D4;
	padding-top: 6px;
	padding-bottom: 6px;
}


	#header{
	width: 653px;
	padding-top: 0px;
	padding-bottom: 0px;
	background-image: -webkit-linear-gradient(270deg,rgba(147,168,197,1.00) 0%,rgba(123,123,123,1.00) 35.75%,rgba(243,243,243,1.00) 100%);
	background-image: -moz-linear-gradient(270deg,rgba(147,168,197,1.00) 0%,rgba(123,123,123,1.00) 35.75%,rgba(243,243,243,1.00) 100%);
	background-image: -o-linear-gradient(270deg,rgba(147,168,197,1.00) 0%,rgba(123,123,123,1.00) 35.75%,rgba(243,243,243,1.00) 100%);
	background-image: linear-gradient(180deg,rgba(147,168,197,1.00) 0%,rgba(123,123,123,1.00) 35.75%,rgba(243,243,243,1.00) 100%);
	color: #FFFFFF;
	font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-style: italic;
	text-align: center;
	text-decoration: underline;
	font-weight: bold;
	text-shadow: 1px 0px #000000;
}



#mañanam{
	background-color: #6BFFA0;
	}
	#mañanal{
	background-color: #CDFF6B;
	}
	#mañanami{
	background-color: #FFD46B;
	}
	#mañanaj{
	background-color: #FF6B6B;
	}
	#mañanad{
	background-color: #6BFFA0;
	}
	

    </style>
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
</head>
<body>


<table class="tg">
  <tr>
    <th    class="th-ugh9">Domingo</th> 
    <th   class="th-ugh9">Lunes</th>
    <th   class="th-ugh9">Martes</th>
    <th   class="th-ugh9">Miercol..</th>
    <th   class="th-ugh9">Jueves</th>
    <th   class="th-ugh9">Viernes</th>
    <th   class="th-ugh9">Sabado</th>
  </tr>
  <tr>
    <td class="tg-ugh9" id="header" colspan="14">-Turnos-</td>
  
  </tr>
  <tr>
    <td class="tg-031e" id="mañanad"><label >09:00</label></td>
    
    <td class="tg-031e" id="mañanal"><label >08:00</label></td>
   
    <td class="tg-031e" id="mañanam"><label >08:00</label></td>
   
    <td class="tg-031e" id="mañanami"><label >08:00</label></td>
    
    <td class="tg-031e" id="mañanaj"><label >08:00</label></td>
    
    <td class="tg-031e" id="mañanav"><label >08:00</label></td>
    
    <td class="tg-031e" id="mañanas"><label >08:00</label></td>
   
  </tr>
  <tr>
    <td class="tg-ugh9"><label >10:30</label></td>
   
     <td class="tg-ugh9"><label >10:30</label></td>
    
   <td class="tg-ugh9"><label >10:30</label></td>
   
     <td class="tg-ugh9"><label >10:30</label></td>
    
     <td class="tg-ugh9"><label >10:30</label></td>
    
    <td class="tg-ugh9"><label >10:30</label></td>
   
   <td class="tg-ugh9"><label >10:30</label></td>
    
  </tr>
  <tr>
    <td class="tg-031e"><label >12:30</label></td>
    
    <td class="tg-031e"><label >12:00</label></td>
    
    <td class="tg-031e"><label >12:00</label></td>
   
    <td class="tg-031e"><label >12:00</label></td>
   
    <td class="tg-031e"><label >12:00</label></td>
    
    <td class="tg-031e"><label >12:00</label></td>
    
    <td class="tg-031e"><label >12:00</label></td>
   
  </tr>
  <tr>
    <td class="tg-ugh9"><label >14:00</label></td>
    
    <td class="tg-ugh9"><label >14:00</label></td>
   
    <td class="tg-ugh9"><label >14:00</label></td>
   
    <td class="tg-ugh9"><label >14:00</label></td>
    
    <td class="tg-ugh9"><label >14:00</label></td>
   
    <td class="tg-ugh9"><label >14:00</label></td>
   
    <td class="tg-ugh9"><label >14:00</label></td>
    
  </tr>
  <tr>
    <td class="tg-031e"><label >15:30</label></td>
  
    <td class="tg-031e"><label >15:30</label></td>
   
    <td class="tg-031e"><label >15:30</label></td>
   
    <td class="tg-031e"><label >15:30</label></td>
   
    <td class="tg-031e"><label >15:30</label></td>
    
    <td class="tg-031e"><label >15:30</label></td>
   
    <td class="tg-031e"><label >15:30</label></td>
    
  </tr>
  <tr>
    <td class="tg-ugh9"><label >17:30</label></td>
   
    <td class="tg-ugh9"><label >17:30</label></td>
   
    <td class="tg-ugh9"><label >17:30</label></td>
    
    <td class="tg-ugh9"><label >17:30</label></td>
    
    <td class="tg-ugh9"><label >17:30</label></td>
   
    <td class="tg-ugh9"><label >17:30</label></td>
    
    <td class="tg-ugh9"><label >17:30</label></td>
    
  </tr>
  <tr>
    <td class="tg-031e"><label >19:00</label></td>
    
    <td class="tg-031e"><label >19:00</label></td>
    
    <td class="tg-031e"><label >19:00</label></td>
    
    <td class="tg-031e"><label >19:00</label></td>
    
    <td class="tg-031e"><label >19:00</label></td>
    
    <td class="tg-031e"><label >19:00</label></td>
    
    <td class="tg-031e"><label >19:00</label></td>
    
  </tr>
</table>

</body>

 <script >
    $(function() {

    var $cols = $('.th-ugh9');

    $('td').live('mouseover', function(){
        var i =  ($(this).prevAll('td').length);
		
       $($cols[i]).addClass('hover');
    
    }).live('mouseout', function(){
        var i = ($(this).prevAll('td').length);
         $($cols[i]).removeClass('hover');
    })
    
    $('.tg').mouseleave(function(){
        $cols.removeClass('hover');
    })

});</script>

</html>