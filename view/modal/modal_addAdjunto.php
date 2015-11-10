<!-- /Modal Proveedor-->
<div class="modal fade" id="modal_adjunto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Adjuntar Archivo</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12" align="center">
                        <label>Solo se aceptan imagenes jpg, png y documentos como pdf, word y excel</label>
                    </div>
                </div> 
                <form enctype="multipart/form-data" class="formulario">
                    <div class="row form-group"> 

                        <div class="col-lg-9">
                            <script>
                                init.push(function () {
                                    $('#imagen').pixelFileInput({placeholder: 'No hay archivo seleccionado...'});
                                });
                            </script>
                            <input name="archivo" type="file" id="imagen" class="pixel-file-input" />
                            <input type="hidden" name="MAX_FILE_SIZE" value="100000"> 
                        </div>
                        <div class="col-lg-3">
                            <button type="button" id="upload" class="btn btn-success btn-block" >
                                <span class="fa fa-upload fa-fw"></span>Subir
                            </button>
                        </div>

                    </div>
                    <div class="row form-group">
                        <div class="col-lg-9">
                            <textarea class="form-control" rows="4" name="adjunto_glosa" id="adjunto_glosa"></textarea>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-lg-12" align="center">
                        <div class="messages" id="mensaje"></div>
                        <!--div para visualizar en el caso de imagen-->
                        <div class="showImage" ></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button  id="cerrar_modal_rut"  type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <!-- <button id="cerrar_modal_rut" type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div> 
    <!-- /.modal-dialog -->
</div>
