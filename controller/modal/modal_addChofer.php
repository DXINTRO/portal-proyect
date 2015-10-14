<div class="modal fade" id="modal_addchofer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">

        <!-- <form role="form" method="POST" id="registro_usuario" onclick="registrarUsuario();" name="registro_usuario" >-->

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title" id="myModalLabel"><span class="fa fa-plus-circle fa-fw "></span> Nuevo Chofer</h2>
            </div>
            <div class="modal-body" id="cuerpo_modal">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group" id="rut_grupo">
                            <label for="addchofer_rut" id="label_rut">Rut</label>
                            <input class="form-control" placeholder="Rut del chofer"  name="addchofer_rut" id="addchofer_rut" required maxlength="11" >
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="codigo_grupo">
                            <label for="addchofer_codigo">Codigo</label>
                            <input class="form-control" placeholder="codigo para identificar"  name="addchofer_codigo" id="addchofer_codigo" required maxlength="4">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group" id="nombre_grupo">
                            <label for="addchofer_nombre">Nombre</label>
                            <input class="form-control" placeholder="nombre del chofer"  name="addchofer_nombre" id="addchofer_nombre" required maxlength="80">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group" id="clasificacion_grupo">
                            <label for="addchofer_clasificacion">Clasificacion</label><br>
                            <select id="addchofer_clasificacion" class="form-control">

                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group" id="grupo_tipo_vehiculo">
                            <label for="addchofer_tipo_vehiculo"> Tipo Vehiculo</label><br>
                            <select id="addchofer_tipo_vehiculo" class="form-control">
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="vehiculo_grupo">
                            <label for="addchofer_vehiculo">Vehiculo</label><br>
                            <select id="addchofer_vehiculo" class="form-control">
                            </select>
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
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3">
                        <div class="btn-toolbar" role="toolbar">
                            <button id="btn_reg" name="btn_reg" onclick="registrarChofer();"type="submit" class="btn btn-success btn-block">
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
