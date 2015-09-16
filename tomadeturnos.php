<!DOCTYPE HTML>
<html>
<head>
<title>toma de turnos</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/bootstrap-toggle.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/main.css" />
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="assets/js/bootstrap-toggle.js"></script>
</head>
<body>
<div id="page-wrapper"> 
  
  <!-- Header -->
  <header id="header">
    <input  type="text" name="piocha" id="piocha" value="c44" readonly />
    <nav id="nav">
      <ul>
        <li><a href="index.html"><img width="20" height="20" src="images/home.png" /> Home</a></li>
        <li> <a href="#" class="icon fa-angle-down">= Menu</a>
          <ul>
            <li><a href="tomadeturnos.html">Toma de Turnos</a></li>
            <li><a href="download.html">Descargar&nbsp Planilla</a></li>
            <li><a href="contact.html">Regalar T. 17:30/19:00</a></li>
            <li><a href="#">Cuenta.</a></li>
            <li><a href="#">Contact</a></li>
            <li> <a href="#">Gestionar</a>
              <ul>
                <li><a href="#">Administrar</a></li>
                <li><a href="#">Suspender</a></li>
                <li><a href="#">Bloqueados</a></li>
                <li><a href="redimencionado.html">Redimencionar</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="https://www.google.com/" class="button">Salir&nbsp (Logout)</a></li>
      </ul>
    </nav>
  </header>
  
  <!-- Main -->
  <section id="main" class="container 75%">
    <header>
      <h2 style="font-weight: bold; text-shadow: 0px 0;">Toma de turnos</h2>
      <br>
      <span id="liveclock" ></span> </header>
    <div class="box">
      <form >
        <div class="row-uniform">
          <div class="comun0">
            <input type="text" name="name" id="name" value="" placeholder="Name" />
          </div>
          <div class="comun1">
            <input type="text" name="apellido" id="apellido" value="" placeholder="Apellido" />
          </div>
        </div>
        <div class="row-uniform">
          <center>
            <img SRC="images/misturnos.png" ALT="seleccione sus turnos" >
          </center>
        </div>
        <div class="row-uniform">
          <div class="comun0">
            <select name="dias" class="c0days">
              <option value="">Dia?</option>
              <option value="">Lunes</option>
              <option value="">Martes</option>
              <option value="">Miercoles</option>
              <option value="">Jueves</option>
              <option value="">Viernes</option>
              <option value="">Sabado</option>
              <option value="">Domingo</option>
            </select>
          </div>
          <img  class="imgfila" SRC="images/pri1.gif" />
          <div class="comun1">
            <select name="turno" class="c1tour">
              <option value="">Turno de?</option>
              <option value="">08:00</option>
              <option value="">10:30</option>
              <option value="">12:00</option>
              <option value="">14:00</option>
              <option value="">15:30</option>
              <option value="">17:30</option>
              <option value="">19:00</option>
            </select>
          </div>
        </div>
        <div class="row-uniform">
          <div class="comun0">
            <select name="dias" class="c0days">
              <option value="">Dia?</option>
              <option value="">Lunes</option>
              <option value="">Martes</option>
              <option value="">Miercoles</option>
              <option value="">Jueves</option>
              <option value="">Viernes</option>
              <option value="">Sabado</option>
              <option value="">Domingo</option>
            </select>
          </div>
          <img  class="imgfila" SRC="images/pri2.gif" />
          <div class="comun1">
            <select name="turno" class="c1tour">
              <option value="">Turno de?</option>
              <option value="">08:00</option>
              <option value="">10:30</option>
              <option value="">12:00</option>
              <option value="">14:00</option>
              <option value="">15:30</option>
              <option value="">17:30</option>
              <option value="">19:00</option>
            </select>
          </div>
        </div>
        <div class="row-uniform">
          <div class="comun0">
            <select name="dias" class="c0days">
              <option value="">Dia?</option>
              <option value="">Lunes</option>
              <option value="">Martes</option>
              <option value="">Miercoles</option>
              <option value="">Jueves</option>
              <option value="">Viernes</option>
              <option value="">Sabado</option>
              <option value="">Domingo</option>
            </select>
          </div>
          <img  class="imgfila" SRC="images/pri3.gif" />
          <div class="comun1">
            <select name="turno" class="c1tour">
              <option value="">Turno de?</option>
              <option value="">08:00</option>
              <option value="">10:30</option>
              <option value="">12:00</option>
              <option value="">14:00</option>
              <option value="">15:30</option>
              <option value="">17:30</option>
              <option value="">19:00</option>
            </select>
          </div>
        </div>
        <div class="row-uniform">
          <div class="comun0">
            <select name="dias" class="c0days">
              <option value="">Dia?</option>
              <option value="">Lunes</option>
              <option value="">Martes</option>
              <option value="">Miercoles</option>
              <option value="">Jueves</option>
              <option value="">Viernes</option>
              <option value="">Sabado</option>
              <option value="">Domingo</option>
            </select>
          </div>
          <img  class="imgfila" SRC="images/opc0.gif" />
          <div class="comun1">
            <select name="turno" class="c1tour">
              <option value="">Turno de?</option>
              <option value="">08:00</option>
              <option value="">10:30</option>
              <option value="">12:00</option>
              <option value="">14:00</option>
              <option value="">15:30</option>
              <option value="">17:30</option>
              <option value="">19:00</option>
            </select>
          </div>
        </div>
        <div class="row-uniform">
          <div class="comun0">
            <select name="dias" class="c0days">
              <option value="">Dia?</option>
              <option value="">Lunes</option>
              <option value="">Martes</option>
              <option value="">Miercoles</option>
              <option value="">Jueves</option>
              <option value="">Viernes</option>
              <option value="">Sabado</option>
              <option value="">Domingo</option>
            </select>
          </div>
          <img  class="imgfila" SRC="images/opc0.gif" />
          <div class="comun1">
            <select name="turno" class="c1tour">
              <option value="">Turno de?</option>
              <option value="">08:00</option>
              <option value="">10:30</option>
              <option value="">12:00</option>
              <option value="">14:00</option>
              <option value="">15:30</option>
              <option value="">17:30</option>
              <option value="">19:00</option>
            </select>
          </div>
        </div>
        <div class="row-uniform">
          <div class="comun0">
            <select name="dias" class="c0days">
              <option value="">Dia?</option>
              <option value="">Lunes</option>
              <option value="">Martes</option>
              <option value="">Miercoles</option>
              <option value="">Jueves</option>
              <option value="">Viernes</option>
              <option value="">Sabado</option>
              <option value="">Domingo</option>
            </select>
          </div>
          <img  class="imgfila" SRC="images/opc0.gif" />
          <div class="comun1">
            <select name="turno" class="c1tour">
              <option value="">Turno de?</option>
              <option value="">08:00</option>
              <option value="">10:30</option>
              <option value="">12:00</option>
              <option value="">14:00</option>
              <option value="">15:30</option>
              <option value="">17:30</option>
              <option value="">19:00</option>
            </select>
          </div>
        </div>
        <div class="row-uniform"><img id="more" SRC="images/more.png" onmouseover="this.src='images/more1.png';" onmouseout="this.src='images/more.png';" ALT="Agregar fila" ></div>
      </form>
      <div class="row uniform">
        <div class="12u">
          <ul class="actions align-center">
            <input type="submit" value="---Send---" />
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" id="toggle-trigger" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
          </ul>
          </div>
          <br />
          <div class="12u">
            <iframe width="100%" height="315" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0"  src="disponibilidad.html"></iframe>
          </div>
        
      </div>
    </div>
  </section>
  
  <!-- Footer -->
  <footer id="footer">
    <ul class="icons">
      <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
      <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
      <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
      <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
      <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
      <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
    </ul>
    <div class="example">
      <button class="btn btn-success" onclick="toggleOn()">On by API</button>
      <button class="btn btn-danger" onclick="toggleOff()">Off by API</button>
      <button class="btn btn-success" onclick="toggleOnByInput()">On by Input</button>
      <button class="btn btn-danger" onclick="toggleOffByInput()">Off by Input</button>
      <script>
					function toggleOn() {
						$('#toggle-trigger').bootstrapToggle('on')
					}
					function toggleOff() {
						$('#toggle-trigger').bootstrapToggle('off')	
					}
					function toggleOnByInput() {
						$('#toggle-trigger').prop('checked', true).change()
					}
					function toggleOffByInput() {
						$('#toggle-trigger').prop('checked', false).change()
					}
				</script> 
    </div>
  </footer>
</div>

<!--<script src="assets/js/jquery.min.js"></script>--> 

<script src="assets/js/jquery.dropotron.min.js"></script> 
<script src="assets/js/jquery.scrollgress.min.js"></script> 
<script src="assets/js/skel.min.js"></script> 
<script src="assets/js/util.js"></script> 
<script src="assets/js/main.js"></script> 
<script language="JavaScript" type="text/javascript">
    function show5(){
        if (!document.layers&&!document.all&&!document.getElementById)
        return

         var Digital=new Date()
         var hours=Digital.getHours()
         var minutes=Digital.getMinutes()
         var seconds=Digital.getSeconds()
		 var milesimas=Digital.getMilliseconds()

        var dn="PM"
        if (hours<12)
        dn="AM"
        if (hours>12)
        hours=hours-12
        if (hours==0)
        hours=12

         if (minutes<=9)
         minutes="0"+minutes
         if (seconds<=9)
         seconds="0"+seconds
		 if (milesimas<=99)
         milesimas="0"+milesimas
        //change font size here to your desire
        myclock="<font size='10' face='Arial' ><b><font size='3'>Hora actual:</font></br>"+hours+":"+minutes+":"
         +seconds+"<font size='4'>"+milesimas+ "</font>"+dn+"</b></font>"
        if (document.layers){
        document.layers.liveclock.document.write(myclock)
        document.layers.liveclock.document.close()
        }
        else if (document.all)
        liveclock.innerHTML=myclock
        else if (document.getElementById)
        document.getElementById("liveclock").innerHTML=myclock
        setTimeout("show5()",100)
         }

        window.onload=show5
       
     </script>
</body>
</html>