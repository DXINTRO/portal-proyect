<div class="modal fade" id="modal_addTipoVehiculo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Añadir tipo de vehiculo</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="form-group" id="tipoVehiculo_grupo">
                            <input class="form-control" name="addTipoVehiculo_nombre" id="addTipoVehiculo_nombre" required maxlength="45">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="btn-toolbar" role="toolbar">
                            <button id="btn_reg" name="btn_reg" onclick="addTipoVehiculo($('#addTipoVehiculo_nombre').val());" class="form-control btn btn-success btn-block">
                                <span class="fa fa-save fa-fw "></span> Registrar
                            </button>
                        </div>
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
