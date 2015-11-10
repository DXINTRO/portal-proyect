<div class="modal fade" id="modal_showvehiculo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">

        <!-- <form role="form" method="POST" id="registro_usuario" onclick="registrarUsuario();" name="registro_usuario" >-->

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title" id="myModalLabel"><span class="fa fa-plus-circle fa-fw "></span> Detalle de vehiculo</h2>
            </div>
            <div class="modal-body" id="cuerpo_modal">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group" id="showpatente_grupo">
                            <label for="addvehiculo_patente" id="patente_rut">Patente</label>
                            
                            <input class="form-control" placeholder="patente del vehiculo"  name="showvehiculo_patente" id="showvehiculo_patente" required maxlength="45" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group" id="showdescripcion_grupo">
                            <label for="addvehiculo_descripcion">Descripcion</label>
                            <input class="form-control" placeholder="Sin descripcion"  name="showvehiculo_descripcion" id="showvehiculo_descripcion" required maxlength="80">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group" id="showtipo_grupo">
                            <label for="showvehiculo_tipo">Tipo Vehiculo</label><br>
                            <select id="showvehiculo_tipo" class="form-control">

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="showkm_grupo">
                            <label for="showvehiculo_km" id="label_rut">Km</label>
                            <input class="form-control" placeholder=""  name="showvehiculo_km" id="showvehiculo_km" required maxlength="11" value="0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body" id="estado_registro"></div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-lg-3">
                        <button id="btn_reg_ok" type="button" class="btn btn-primary btn-block" data-dismiss="modal" aria-hidden="true">CERRAR</button>
                    </div>
                    <div class="col-lg-2">
                        <div class="btn-toolbar" role="toolbar">
                            <button id="btn_del" name="btn_del" type="button" class="btn btn-danger btn-block">
                                <span class="fa fa-trash fa-fw "></span> 
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="btn-toolbar" role="toolbar">
                            <button id="btn_del_conf" name="btn_del_conf" type="button" class="btn btn-success btn-block">
                                <span class="fa fa-trash fa-fw "></span> Confirmar!
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="btn-toolbar" role="toolbar">
                            <button id="btn_mod_show" name="btn_mod_show" type="button" class="btn btn-warning btn-block">
                                <span class="fa fa-edit fa-fw "></span> 
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="btn-toolbar" role="toolbar">
                            <button id="btn_reg_show" name="btn_reg_show" onclick="updateVehiculo();" type="submit" class="btn btn-success btn-block" disabled>
                                <span class="fa fa-save fa-fw "></span>
                            </button>
                        </div>
                    </div>
                    <input type="hidden" name="showvehiculo_id" id="showvehiculo_id">
                </div>
            </div>
            <!-- /.modal-content -->
        </div> 
        <!-- /.modal-dialog -->
        <!--</form>-->
    </div>
</div>
