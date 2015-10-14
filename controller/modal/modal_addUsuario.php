<div class="modal fade" id="modal_addUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">

        <!-- <form role="form" method="POST" id="registro_usuario" onclick="registrarUsuario();" name="registro_usuario" >-->

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2 class="modal-title" id="myModalLabel"><span class="fa fa-plus-circle fa-fw "></span> Nuevo Usuario</h2>
                </div>
                <div class="modal-body" id="cuerpo_modal">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" id="rut_grupo">
                                <label for="addusuario_rut">Rut</label>
                                <input class="form-control" placeholder="Rut del usuario"  name="addusuario_rut" id="addusuario_rut" required maxlength="11" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" id="usuario_grupo">
                                <label for="addusuario_usuario">Usuario</label>
                                <input class="form-control" placeholder="nombre para inicio de sesion"  name="addusuario_usuario" id="addusuario_usuario" required maxlength="20">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group" id="usuario_nombre_grupo">
                                <label for="addusuario_nombre">Nombre</label>
                                <input class="form-control" placeholder="nombre del usuario"  name="addusuario_nombre" id="addusuario_nombre" required maxlength="80">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" id="correo_grupo">
                                <label for="addusuario_correo">Correo</label>
                                <input class="form-control" placeholder="ejemplo@gmail.com"  name="addusuario_correo" id="addusuario_correo" required maxlength="45">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" id="fono_grupo">
                                <label for="addusuario_fono">Fono</label>
                                <input onKeyPress="return soloNumeros(event);" class="form-control" placeholder="8 digitos"  name="addusuario_fono" id="addusuario_fono" maxlength="8">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" id="pass1_grupo">
                                <label for="addusuario_pass1">Contrase&ntilde;a</label>
                                <input type="password" class="form-control" placeholder="Contrase&ntilde;a"  name="addusuario_pass1" id="addusuario_pass1" required maxlength="100">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" id="pass2_grupo">
                                <label for="addusuario_pass2">Repetir Contrase&ntilde;a</label>
                                <input type="password" class="form-control" placeholder="Repetir Contrase&ntilde;a"  name="addusuario_pass2" id="addusuario_pass2" required maxlength="100">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" id="perfil_grupo">
                                <label for="addusuario_perfil">Perfil</label><br>
                                <select id="addusuario_perfil" class="selectpicker" data-live-search="false">
                                    <option value="0">Selecciona un Perfil</option>
                                    <?php $fun->getRolesDeUsuario(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" id="empresa_grupo">
                                <label for="addusuario_empresa">Empresa por defecto</label><br>
                                <select id="addusuario_empresa" class="selectpicker" data-live-search="false">
                                    <option value="0">Seleccionar Empresa</option>
                                    <?php $fun->getListadoEmpresas(); ?>
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
                                <button id="btn_reg" name="btn_reg" onclick="registrarUsuario();"type="submit" class="btn btn-success btn-block">
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
