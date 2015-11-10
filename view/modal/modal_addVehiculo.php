<div class="modal fade" id="modal_addvehiculo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">

        <!-- <form role="form" method="POST" id="registro_usuario" onclick="registrarUsuario();" name="registro_usuario" >-->

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title" id="myModalLabel"><span class="fa fa-plus-circle fa-fw "></span> Nuevo Vehiculo</h2>
            </div>
            <div class="modal-body" id="cuerpo_modal">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group" id="patente_grupo">
                            <label for="addvehiculo_patente" id="patente_rut">Patente</label>
                            
                            <input class="form-control" placeholder="patente del vehiculo"  name="addvehiculo_patente" id="addvehiculo_patente" required maxlength="45" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group" id="descripcion_grupo">
                            <label for="addvehiculo_descripcion">Descripcion</label>
                            <input class="form-control" placeholder="Descripcion (opcional)"  name="addvehiculo_descripcion" id="addvehiculo_descripcion" required maxlength="80">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group" id="tipo_grupo">
                            <label for="addvehiculo_tipo">Tipo Vehiculo</label><br>
                            <select id="addvehiculo_tipo" class="form-control">

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="km_grupo">
                            <label for="addvehiculo_km" id="label_rut">Km</label>
                            <input class="form-control" placeholder=""  name="addvehiculo_km" id="addvehiculo_km" required maxlength="11" value="0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body" id="estado_registro"></div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-lg-3">
                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal" aria-hidden="true">CERRAR</button>
                    </div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3">
                        <div class="btn-toolbar" role="toolbar">
                            <button id="btn_reg" name="btn_reg" onclick="registrarVehiculo();"type="submit" class="btn btn-success btn-block">
                                <span class="fa fa-save fa-fw "></span> Registrar
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
