<div class="modal fade" id="modal_showRol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">

        <!-- <form role="form" method="POST" id="registro_usuario" onclick="registrarUsuario();" name="registro_usuario" >-->

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title" id="myModalLabel"><span class="fa fa-plus-circle fa-fw "></span> Detalle del Perfil <b id="rol_nombre">Administrador</b></h2>
            </div>
            <div class="modal-body" id="cuerpo_modal">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row"> 
                                    <div class="col-lg-12" align="center">
                                        <b id="subtitulo">Permisos</b>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                
                                <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 50%;"></th>
                                            
                                            <th>
                                                Vista
                                            </th>
                                            <th>
                                                Crear
                                            </th>
                                            <th>
                                                Editar
                                            </th>
                                            <th>
                                                Eliminar
                                            </th>
                                            <th>
                                                Reportes
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Factura Compra</th>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Factura Venta</th>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Transporte</th>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                        </tr>                                        
                                        <tr>
                                            <th>Configuracion</th>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                <input id="modusuario_estado" type="checkbox" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                        </tr>                                        
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <button type="button" class="btn btn-success btn-block">
                            <span class="fa fa-save fa-fw "></span> Guardar
                        </button>
                        <button type="button"  class="btn btn-danger btn-block" >
                            <span class="fa fa-remove "></span> Eliminar
                        </button>
                        
                    </div>
                    
                </div>

            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-lg-9"></div>
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