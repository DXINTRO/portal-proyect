<div class="modal fade" id="modalDatos">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title">Result</h3>
            </div>
            <div class="modal-body">
                <h5 class="text-center bg-primary" >Compruebe si los datos son correctos.</h5>
                  <div class="actions align-center" ><img id="loadin3"  height="136" draggable="false" SRC="images/loading3.gif"  ALT="ok" > </div>
                            
                  <div id="tableDAtos" class="table-responsive">
                <table id="tableDatos" class="table table-striped" data-card-view="true" >
                    <thead>
                        <tr >
                            <th data-field="id">User ID:</th>
                            <th data-field="Piocha">Piocha:</th>
                            <th data-field="Nombre">Nombre:</th>
                            <th data-field="Apellido1">Apallido: </th>
                            <th data-field="Email">Email:</th>
                        </tr>
                    </thead>
                </table>  </div></br>
                <div class="form-group">
                    <input class="btn btn-warning btn-sm pull-right" data-dismiss="modal" value="Cancelar" id="btncancelar" type="button">
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="modal-footer bg-success" >
                      <form  method="POST" action="../controller/fun_gift.class.php" id="formModal_showDatos" accept-charset="UTF-8"  >
                <input type="hidden" id="identificador" name="identificador" value="" >
                <button type="submit"  class="btn btn-primary">- Aceptar -</button>       </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->