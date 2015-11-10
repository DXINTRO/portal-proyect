<div class="modal fade" id="modal_showchofer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">

        <!-- <form role="form" method="POST" id="registro_usuario" onclick="registrarUsuario();" name="registro_usuario" >-->

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title" id="myModalLabel"><span class="fa fa-plus-circle fa-fw "></span>Detalle Chofer</h2>
            </div>
            <div class="modal-body" id="cuerpo_modal">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group" id="rut_grupo">
                            <label for="showchofer_rut" id="label_rut">Rut</label>
                            <input class="form-control" placeholder="Rut del chofer"  name="showchofer_rut" id="showchofer_rut" required maxlength="11" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="codigo_grupo">
                            <label for="showchofer_codigo">Codigo</label>
                            <input class="form-control" placeholder="codigo para identificar"  name="showchofer_codigo" id="showchofer_codigo" required maxlength="4" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group" id="nombre_grupo_show">
                            <label for="showchofer_nombre">Nombre</label>
                            <input class="form-control" placeholder="nombre del chofer"  name="showchofer_nombre" id="showchofer_nombre" required maxlength="80" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group" id="clasificacion_grupo_show">
                            <label for="showchofer_clasificacion">Clasificacion</label><br>
                            <select id="showchofer_clasificacion" class="form-control" disabled>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group" id="grupo_tipo_vehiculo_show">
                            <label for="showchofer_tipo_vehiculo"> Tipo Vehiculo</label><br>
                            <select id="showchofer_tipo_vehiculo" class="form-control" disabled>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="vehiculo_grupo_show">
                            <label for="showchofer_vehiculo">Vehiculo</label><br>
                            <select id="showchofer_vehiculo" class="form-control" disabled>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
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
                            <button id="btn_reg_show" name="btn_reg_show" onclick="updateChofer();" type="submit" class="btn btn-success btn-block" disabled>
                                <span class="fa fa-save fa-fw "></span>
                            </button>
                        </div>
                    </div>
                    <input type="hidden" name="showchofer_id" id="showchofer_id">
                </div>
            </div>
            <!-- /.modal-content -->
        </div> 
        <!-- /.modal-dialog -->
    </div>
</div>
