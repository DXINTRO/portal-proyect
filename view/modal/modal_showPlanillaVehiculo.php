<div class="modal fade" id="modal_showPlanillaVehiculo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">

        <!-- <form role="form" method="POST" id="registro_usuario" onclick="registrarUsuario();" name="registro_usuario" >-->

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title" id="myModalLabel"><span class="fa fa-plus-circle fa-fw "></span>Vehiculo <b id="patente_modal">GXX-FX</b></h2>
            </div>
            <div class="modal-body" id="cuerpo_modal">
                <div class="row">
                    <div class="col-lg-12">

                        <table id="registros_vehiculo" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >fecha</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >chofer</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >clasificacion</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >km</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >consumo</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >redimiento</th>
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >Observacion</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>  
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-lg-10"></div>

                    <div class="col-lg-2">
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