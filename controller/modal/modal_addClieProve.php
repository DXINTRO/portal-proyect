<div class="modal fade" id="modal_addclieprove" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">

        <!-- <form role="form" method="POST" id="registro_usuario" onclick="registrarUsuario();" name="registro_usuario" >-->

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title"><span class="fa fa-plus-circle fa-fw "></span>Nuevo Cliente / Proveedor</h2>
            </div>
            <div class="modal-body" id="cuerpo_modal">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="has-success" id="egresos_prove">
                            <label for="addclieprove_tipo">Tipo</label>
                            <select id="addclieprove_tipo" class=" form-control">
                                <option value="2">Cliente</option>
                                <option value="1">Proveedor</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="rut_grupo">
                            <label for="addclieprove_rut">Rut</label>
                            <input class="form-control" placeholder="Rut"  name="addclieprove_rut" id="addclieprove_rut" required maxlength="11" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group" id="nombre_grupo">
                            <label for="addclieprove_nombre">Nombre</label>
                            <input class="form-control" placeholder="Nombre"  name="addclieprove_nombre" id="addclieprove_nombre" required maxlength="45">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group" id="direccion_grupo">
                            <label for="addclieprove_direccion">Direccion</label>
                            <input class="form-control" name="addclieprove_direccion" id="addclieprove_direccion" placeholder="Direccion"  required maxlength="45">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group" id="giro_grupo">
                            <label for="addclieprove_giro">Giro</label>
                            <input class="form-control" name="addclieprove_giro" id="addclieprove_giro" placeholder="Giro" required maxlength="60">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group" id="fono_grupo">
                            <label for="addclieprove_fono">Fono</label>
                            <input name="addclieprove_fono" id="addclieprove_fono" onKeyPress="return soloNumeros(event);" class="form-control" placeholder="8 digitos" maxlength="8">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="region_grupo">
                            <label for="addclieprove_region">Region</label><br>
                            <select id="addclieprove_region" class="form-control">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group" id="provincia_grupo">
                            <label for="addclieprove_provincia">Provincia</label><br>
                            <select id="addclieprove_provincia" class="form-control">
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group" id="comuna_grupo">
                            <label for="addclieprove_comuna">Comuna</label><br>
                            <select id="addclieprove_comuna" name="addclieprove_comuna" class="form-control">
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
                            <button id="btn_reg" name="btn_reg" onclick="registrarClieprove();"type="submit" class="btn btn-success btn-block">
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


<?php
/*
  $datos_array['id']         ok
  $datos_array['rut']        ok
  $datos_array['nombre']     ok
  $datos_array['rsocial']    ok
  $datos_array['giro']       ok
  $datos_array['direccion']  ok
  $datos_array['comuna']     ok
  $datos_array['fono']       ok
  $datos_array['fecha']
  $datos_array['ultimo_mod']
  $datos_array['estado']
 */
?>