<div class="modal fade" id="modal_showclieprove" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title" id="myModalLabel"><span class="fa fa-plus-circle fa-fw "></span> Detalles <b id="modusuario_id"></b></h2>
            </div>
            <div class="modal-body" id="cuerpo_modal">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row"> 
                                    <div class="col-lg-6" >
                                        <b id="subtitulo">Datos</b>
                                    </div>
                                    <div class="col-lg-2" >
                                        <button id="btn_mod_show" type="button" class="btn btn-warning btn-block btn-sm">
                                            <span class="fa fa-pencil fa-fw "></span> 
                                        </button>
                                    </div>
                                    <div class="col-lg-2" >
                                        <button id="btn_reg_show" type="button" onclick="updateClieprove();" class="btn btn-success btn-block btn-sm">
                                            <span class="fa fa-save fa-fw "></span> 
                                        </button>
                                    </div>
                                    <div class="col-lg-2" >
                                        <button id="btn_del_show" type="button" onclick="deleteClieprove();"class="btn btn-danger btn-block btn-sm">
                                            <span class="fa fa-trash fa-fw "></span> 
                                        </button>
                                    </div>  
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group" id="rut_grupo_show">
                                            <label for="showclieprove_rut">Rut</label>
                                            <input class="form-control" placeholder="Rut"  name="showclieprove_rut" id="showclieprove_rut" required maxlength="13" readonly>
                                            <input type="hidden" placeholder="Rut"  name="showclieprove_rut_bak" id="showclieprove_rut_bak" required maxlength="13" readonly>
                                            <input type="hidden" placeholder="Rut"  name="showclieprove_id" id="showclieprove_id" required maxlength="13" readonly>
                                            <input type="hidden" placeholder="Rut"  name="showclieprove_tipo" id="showclieprove_tipo" required maxlength="13" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group" id="nombre_grupo_show">
                                            <label for="showclieprove_nombre">Nombre</label>
                                            <input class="form-control" placeholder="Nombre"  name="showclieprove_nombre" id="showclieprove_nombre" required maxlength="45" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-lg-8">
                                        <div class="form-group" id="direccion_grupo_show">
                                            <label for="showclieprove_direccion">Direccion</label>
                                            <input class="form-control" name="showclieprove_direccion" id="showclieprove_direccion" placeholder="Direccion"  required maxlength="45" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group" id="fono_grupo_show">
                                            <label for="showclieprove_fono">Fono</label>
                                            <input name="showclieprove_fono" id="showclieprove_fono" onKeyPress="return soloNumeros(event);" class="form-control" placeholder="" maxlength="8" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group" id="giro_grupo_show">
                                            <label for="showclieprove_giro">Giro</label>
                                            <input class="form-control" name="showclieprove_giro" id="showclieprove_giro" placeholder="Giro" required maxlength="60" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group" id="region_grupo_show">
                                            <label for="showclieprove_region">Region</label><br>
                                            <select id="showclieprove_region" class="form-control" disabled>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group" id="provincia_grupo">
                                            <label for="showclieprove_provincia">Provincia</label><br>
                                            <select id="showclieprove_provincia" class="form-control"disabled>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group" id="comuna_grupo_show">
                                            <label for="showclieprove_comuna">Comuna</label><br>
                                            <select id="showclieprove_comuna" name="addclieprove_comuna" class="form-control" disabled>
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
                                <table id="empresa_clieprove" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
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
                                    <div class="col-lg-6">
                                        <div class="form-group" id="clieprove_empresa_grupo">
                                            <select id="clieprove_empresa_show" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="button" onclick="agregarEmpresaClieprove();" class="btn btn-success btn-block">
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
                    <div class="col-lg-9"></div>

                    <div class="col-lg-3">
                        <div class="btn-toolbar" role="toolbar">
                            <button type="button" class="btn btn-primary btn-block" data-dismiss="modal" aria-hidden="true">
                                <span class="fa fa-arrow-circle-left fa-fw "></span> Volver
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>