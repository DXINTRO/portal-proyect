  <style>.jumbotr {background: #358CCE;color: #FFF;border-radius: 1px;}.h1 small {font-size: 24px;}</style>
  <div id="modal_showContact" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title">Contact</h4>
              </div>
              <div class="modal-body">
                  <div class="containter">
                      <div class="jumbotr">
                          <div class="modal-body">
                              <div class="row">
                                  <div class="col-sm-12 col-lg-12">
                                      <h1 class="h1">
                                          Contáctese <small>con nosotros</small></h1>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="modal-body">
                          <div class="row">
                              <div class="col-md-8">
                                  <div class="well well-sm">
                                      <form name="commentform" method="post" action="">
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="name">
                                                          Nombre</label>
                                                      <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter name" required="required" />
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="email">
                                                          Email Address</label>
                                                      <div class="input-group">
                                                          <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                                          </span>
                                                          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required" /></div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="subject">
                                                          Asunto</label>
                                                      <select id="subject" name="subject" class="form-control" required="required">
                                                          <option value="na" selected="">Seleccione uno:</option>
                                                          <option value="service">Servicio General </option>
                                                          <option value="suggestions">Sugerencias</option>
                                                          <option value="product">Soporte</option>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label for="name">
                                                          Message</label>
                                                      <textarea name="comments" id="comments" class="form-control" rows="9" cols="25" required="required"
                                                                placeholder="Message"></textarea>
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <input type="submit" name="submit" id="submit" value="Enviar mensaje" class="btn btn-info pull-right">
                                              </div>
                                          </div>

                                      </form>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <form>
                                      <legend><span class="glyphicon glyphicon-globe"></span> Ubicacion</legend>
                                      <address>
                                          <strong>Twitter, Inc.</strong><br>
                                          795 Folsom Ave, Suite 600<br>

                                          <abbr title="Phone">
                                              P:</abbr>
                                          (+569) 85632341
                                      </address>
                                      <address>
                                          <strong><br>Correo electrónico</strong><br>
                                          <a href="mailto:#">portalestudiantilturnos@gmail.com</a>
                                      </address>
                                  </form>
                              </div>

                          </div>
                      </div><!-- End of Modal body -->
                  </div><!-- End of Modal content -->
              </div><!-- End of Modal dialog -->
          </div><!-- End of Modal --></div><!-- End of Modal --></div><!-- End of Modal -->


        <!--PhP code for the email sending, copy this code and nme it send_form_email.php and on line 120 change the link.
 <?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "Su dirección de correo electrónico";
    $email_subject = $_POST['subject'];;
 

 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['email']) ||        
        !isset($_POST['comments'])) {
        died('Lo sentimos, pero parece que hay un problema con la forma que ha enviado.');       
    }
 
    $first_name = $_POST['first_name']; // required
  
    $email_from = $_POST['email']; // required    
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'La dirección de correo electrónico que ha introducido no parece ser válido.<br />';
  }
    $string_exp = "/^[A-Za-z\s.'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'El nombre que ha introducido no parece ser válido.<br />';
  }

  if(strlen($comments) < 2) {
    $error_message .= 'Los comentarios que ha entrado no parecen ser válidas.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";   
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
sleep(1);
echo "<meta http-equiv='refresh' content=\"0; url=http://graphicdesk.ro/index.html\">";

}
?>