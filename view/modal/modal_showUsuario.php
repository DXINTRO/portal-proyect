<div class="modal fade" id="modal_showUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">

        <!-- <form role="form" method="POST" id="registro_usuario" onclick="registrarUsuario();" name="registro_usuario" >-->

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title" id="myModalLabel"><span class="fa fa-plus-circle fa-fw "></span> Detalles de usuario <b id="modusuario_id"></b></h2>
            </div>
            <div class="modal-body" id="cuerpo_modal">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row"> 
                                    <div class="col-lg-6" >
                                        <b id="subtitulo">Datos personales</b>
                                    </div>

                                    <div class="col-lg-2" ></div>
                                    <div class="col-lg-2" >
                                        <button id="btn_reg_mod" type="button" onclick="modificarUsuario();" class="btn btn-warning btn-block btn-sm">
                                            <span class="fa fa-pencil fa-fw "></span> 
                                        </button>
                                    </div>
                                    <div class="col-lg-2" >
                                        <button id="btn_reg_save" type="button" onclick="guardarUsuario();" class="btn btn-success btn-block btn-sm">
                                            <span class="fa fa-save fa-fw "></span> 
                                        </button>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group" id="modrut_grupo">
                                            <label for="modusuario_rut">Rut</label>
                                            <input class="form-control" placeholder="Rut del usuario"  name="modusuario_rut" id="modusuario_rut" required maxlength="11" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group" id="modusuario_grupo">
                                            <label for="modusuario_usuario">Usuario</label>
                                            <input class="form-control" placeholder="nombre para inicio de sesion"  name="modusuario_usuario" id="modusuario_usuario" required maxlength="20" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group" id="modusuario_nombre_grupo">
                                            <label for="modusuario_nombre">Nombre</label>
                                            <input class="form-control" placeholder="nombre del usuario"  name="modusuario_nombre" id="modusuario_nombre" required maxlength="80" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group" id="modcorreo_grupo">
                                            <label for="modusuario_correo">Correo</label>
                                            <input class="form-control" placeholder="ejemplo@gmail.com"  name="modusuario_correo" id="modusuario_correo" required maxlength="45" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group" id="modfono_grupo">
                                            <label for="modusuario_fono">Fono</label>
                                            <input onKeyPress="return soloNumeros(event);" class="form-control" placeholder="8 digitos"  name="modusuario_fono" id="modusuario_fono" maxlength="8" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group" id="modpass1_grupo">
                                            <label for="modusuario_pass1">Contrase&ntilde;a</label>
                                            <input type="password" class="form-control" placeholder="Contrase&ntilde;a"  name="modusuario_pass1" id="modusuario_pass1" required maxlength="100" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group" id="modpass2_grupo">
                                            <label for="modusuario_pass2">Repetir Contrase&ntilde;a</label>
                                            <input type="password" class="form-control" placeholder="Repetir Contrase&ntilde;a"  name="modusuario_pass2" id="modusuario_pass2" required maxlength="100" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group" id="modperfil_grupo">
                                            <label for="modusuario_perfil">Perfil</label><br>
                                            <select id="modusuario_perfil" class="form-control" disabled>
                                                <option value="0" selected>Selecciona un Perfil</option>
                                                <?php $fun->getRolesDeUsuario(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group" id="modempresa_grupo">
                                            <label for="modusuario_empresa">Empresa por defecto</label><br>
                                            <select id="modusuario_empresa" class="form-control" disabled>
                                                <option value="0">Seleccionar Empresa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- tabla -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row"> 
                                    <div class="col-lg-8" >
                                        <b id="subtitulo">Empresas Relacionadas</b>
                                    </div>
                                    <div class="col-lg-2" ></div>
                                    <div class="col-lg-2" ></div>
                                    
                                </div>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <table id="empresas_usuario" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 5%;">Defecto</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100%;">Nombre empresa</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 3%;">eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>  
                                </table>
                            </div>
                            <!-- .panel-body -->
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group" id="modempresa_grupo">
                                            <select id="usuario_empresa_add" class="form-control">
                                                <option value="0">Agregar Empresa</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-6">
                                        <button type="button" onclick="registrarEmpresaUsuario();" class="btn btn-success btn-block">
                                            <span class="fa fa-plus-circle fa-fw "></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="btn-toolbar" role="toolbar">
                            <button type="button" class="btn btn-danger btn-block" id="eliminar_usu">
                                <span class="fa fa-trash fa-fw "></span> Eliminar
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-2" >
                        <div class="btn-toolbar" role="toolbar" id="eli_confirmar">
                            <button type="button" class="btn btn-success btn-block" id="eliminar_usu_ok">
                                <span class="fa fa-trash fa-fw "></span> Confirmar !
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <input type="hidden" class="form-control" placeholder=""  name="modusuario_id_input" id="modusuario_id_input" required maxlength="11" readonly>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <input id="modusuario_estado" onblur="cambiarEstadoUsuario();" type="checkbox" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="success" data-offstyle="danger">
                    </div>
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