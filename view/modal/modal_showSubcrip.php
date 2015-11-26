
<div class="modal fade bs-example-modal-lg" id="modalSubcrip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="border">
                </div>
                <div class="container-fluid">

                    <div class="row content">
                        <div class="col-sm-3 sidenav">
                            <img src="images/licence.png" alt="license" style="width:180px;height:200px;">
                        </div>

                        <div  id="col1" class="col-sm-9">
                            <h4>LICENCE</h4>    					
                            <hr>
                            <div class="row">
                                <div class="col-xs-4 col-md-4">Clave:</div>
                                <div class="col-xs-4 col-md-4"><span class="label label-inverse"><a><i class="fa fa-caret-right"></i>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX<i class="fa fa-caret-left"></i></a></span></div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4 col-md-4">Estado de la clave</div>
                                <div class="col-xs-4 col-md-4"> <i class="fa fa-caret-right">&nbsp;</i>	<span class="label label-info">Activa</span></div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4 col-md-4">Fecha de activacion:</div>
                                <div class="col-xs-4 col-md-4"><i class="fa fa-caret-right">&nbsp;</i>08/052015</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4 col-md-4">Facha de caducidad:</div>
                                <div class="col-xs-4 col-md-4"><i class="fa fa-caret-right">&nbsp;</i>08/052015</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4 col-md-4">Dias restantes:</div>
                                <div class="col-xs-4 col-md-4"><p><i class="fa fa-caret-right">&nbsp;</i><span class="badge badge-warning">2</span> Dias</p></div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><a>Contrato de licencia de usuario final</a></div>
                            </div></br>
                        </div>

                        <div id="menu" class="col-sm-8 menu">
                            <div class="col-sm-1 sidenav2">
                                <i class="fa fa-key fa-4x"></i>
                            </div>
                            <div class="row" >   
                                <h5><span class="label label-success">Codigo de activacion nuevo</span></h5>
                                <p>Puede introducir un código nuevo para tener su licencia permanente, si aun no la tiene póngase en contacto con un encargado o envíenos un correo a : <a href="mailto:#">portalestudiantilturnos@gmail.com</a>.</p>
                            </div> 
                            <div class="row" > 
                                </br>
                                <div class="col-lg-11">
                                    <div class="input-group">
                                        <input class="form-control" aria-label="Text input with multiple buttons" id="kay" type="text">
                                        <span class="input-group-btn">
                                            <button class="btn btn-success" id="boton11" onclick="FormSubcrip($('#kay'));" type="button"><i id="loadin11" class="fa fa-question-circle"></i>&nbsp;Cambiar</button>
                                        </span>
                                    </div><!-- /.input-group -->
                                </div>   
                                <br><br> </br>  
                            </div> 
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
