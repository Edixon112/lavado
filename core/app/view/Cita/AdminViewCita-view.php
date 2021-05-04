<!-- Scrollable Table Start -->
<div class="col-md-12 col-lg-12">
   <div class="card mg-b-20">
      <div class="card-header">
         <h4 class="card-header-title">
          Tabla Cita Cliente 
         </h4>
         <div class="card-header-btn">
            <a href="#" data-toggle="collapse" class="btn card-collapse" data-target="#collapse7" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
            <a href="#" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
            <a href="#" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
            <a href="#" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
         </div>
      </div>

      <div class="table-responsive">
         <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0" width="100%">
            <thead class="tx-dark tx-uppercase tx-10 tx-bold">
               <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Fecha solicitada</th>
                  <th>Estado</th>
                  <th> </th>
               </tr>
            </thead>
            <tbody>
               <?php $citas=CitaData::GetAll();

                  foreach($citas as $cita):

                     if($cita->estado!=2){
                     
                  $cliente=ClienteData::getById($cita->idcliente);              
               ?>
               <tr>
                  <td><?php echo $cita->id;  ?></td>
                  <td><?php echo $cliente->nombre; ?></td>
                  <td><?php echo $cita->fechapedida; ?></td>
                  <td><?php if($cita->estado==0){ echo "No confirmado";}else{echo "Confirmado";}; ?></td>
                  <div>
                  <td class="text-Center table-actions">
                     <div class="btn-group mg-t-5">  

                        <form action="index.php?view=Cita/EditCita" method="post">   
                           <input type="hidden" name="id" value=<?php echo $cliente->id;?>>
                           <input type="hidden" name="view" value=<?php echo $_GET["view"];?>>
                           <button class="btn btn-secondary" onclick="return pregunta()" ><a data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil"></i></a></button>
                        </form>

                        <form action="index.php?action=Cita/EliminarCita" method="post">   
                           <input type="hidden" name="id" value=<?php echo $cliente->id;?>>
                           <input type="hidden" name="view" value=<?php echo $_GET["view"];?>>
                           <button class="btn btn-secondary" onclick="return pregunta()" ><a data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fa fa-trash"></i></a></button>
                        </form>

                        <form action="index.php?action=Cita/AddConfirmarCita" method="post">   
                           <input type="hidden" name="id" value=<?php echo $cliente->id;?>>
                           <input type="hidden" name="view" value=<?php echo $_GET["view"];?>>
                           <button class="btn btn-secondary" onclick="return pregunta()" ><a data-toggle="tooltip" data-placement="top" title="Confirmar Lavado"><i class="fa fa-check"></i></a></button>
                        </form>
                        
                        <!--  <a class="table-action  mg-r-10" href="index.php?action=Cita/AddLavadoCita&id=<?php echo $cita->id?>" data-toggle="tooltip" data-placement="top" title="Agregar lavado Temprano" ><i class="fa fa-automobile"></i></a>-->
                        <form action="index.php?action=Cita/AddLavadoCita" method="post">
                           <input type="hidden" name="id" value=<?php echo $cita->id;?>>
                           <input type="hidden" name="view" value=<?php echo $_GET["view"];?>>
                           <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#m_modal_4"><i class="fa fa-automobile"></i></button>	
                           <!--   ---------------------------            MODAL             ----------------------     -->
                           <div class="modal" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel_4" aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel_4">Añadir Lavado</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                                       </button>
                                    </div>
                                 <div  class="modal-body">                                                         
                                    <?php $vehiculos=VehiculoData::getAll(); ?>
                                    <div  class="col-md-6 mb-3">
                                       <p>vehiculo</p>
                                       <select class="selectpicker form-control" data-hide-disabled="true" data-live-search="true" name="idvehiculo" id="idvehiculo" id="inputGroupSelect01" required>
                                          <option  ></option>
                                          <?php 
                                          foreach ($vehiculos as $vehiculo) { 
                                          $lavado=LavadoData::getByIdVehiculo($vehiculo->id);
                                          if($lavado->estado!=0 or $lavado->estado==NULL){
                                          ?>                
                                          <option   value="<?php echo $vehiculo->id;?>" ><?php echo $vehiculo->placa;?></option>
                                          <?php 
                                          } 
                                          }
                                          ?>
                                       </select> 
                                    </div>
                                 </div>
                              <div class="modal-footer">
                                 <button type="submit" class="btn btn-secondary" >Enviar</button>      
                              </div>
                           </div>      
                              <!--   ---------------------------          MODAL               ----------------------     -->
                        </form>  

                     </div>      
                  </td>
               </tr> 
               <?php 
               }
               endforeach;
               ?>
            </tbody>
               <tfoot>
                  <tr>
                     <th>ID</th>
                     <th>Nombre</th>
                     <th>Fecha solicitada</th>
                     <th>Estado</th>
                     <th> </th>
                  </tr>
               </tfoot>
         </table>
      </div>
   </div>
</div>