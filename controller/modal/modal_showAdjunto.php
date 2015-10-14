<div class="modal fade" id="modal_showAdjunto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog ">

        <!-- <form role="form" method="POST" id="registro_usuario" onclick="registrarUsuario();" name="registro_usuario" >-->

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title" id="myModalLabel"><span class="fa fa-plus-circle fa-fw "></span>Detalle Adjunto</h2>
            </div>
            <div class="modal-body" id="cuerpo_modal">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row"> 
                                    <div class="col-lg-6" >
                                        <b id="subtitulo">Vista Previa</b>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row " align="center" >
                                    <embed id="show_adjunto" src="" class="img-responsive" style="width: 70%; height: 50%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="show_adjunto_id" value="">
                    <input type="hidden" id="show_adjunto_path" value="">
                    <div class="col-lg-3">
                        <button type="button" onclick="abrirAdjunto($('#show_adjunto_path').val());" class="btn btn-warning btn-block">
                            <span class="fa fa-external-link fa-fw "></span> Abrir
                        </button>
                        <button type="button" onclick="descargarAdjunto($('#show_adjunto_path').val());" class="btn btn-primary btn-block" >
                            <span class="fa fa-download fa-fw "></span> Descargar
                        </button>
                        <button type="button"  id="eliminar_adjunto" onclick="eliminarAdjunto();" class="btn btn-danger btn-block" >
                            <span class="fa fa-remove "></span> Eliminar
                        </button>
                        <button type="button" id="confirmar_eliminar_adjunto" onclick="confirmarEliminar($('#show_adjunto_id').val(),$('#show_adjunto_path').val());" class="hidden btn btn-success btn-block" >
                            <span class="fa fa-trash "></span> Confirmar!
                        </button>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-3 col-sm-6"></div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="btn-toolbar" role="toolbar">
                            <button type="button" class="btn btn-primary btn-block" data-dismiss="modal" aria-hidden="true">
                                <span class="fa fa-arrow-circle-left fa-fw "></span> Volver
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div> 
        <!-- /.modal-dialog -->
        <!--</form>-->
    </div>
</div>

