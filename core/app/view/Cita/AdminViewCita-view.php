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

                  $cliente=ClienteData::getById($cita->idcliente);              
               ?>
               <tr>
                  <td><?php echo $cita->id;  ?></td>
                  <td><?php echo $cliente->nombre; ?></td>
                  <td><?php echo $cita->fechapedida; ?></td>
                  <td><?php if($cita->estado==0){ echo "No confirmado";}else{echo "Confirmado";}; ?></td>
                  <td class="text-right table-actions">
                     <a class="table-action  mg-r-10" href="index.php?view=Cita/EditCita&id=<?php echo $cita->id?>"><i class="fa fa-pencil"></i></a>
                     <a class="table-action  mg-r-10" href="index.php?action=Cita/EliminarCita&id=<?php echo $cita->id?>"><i class="fa fa-trash"></i></a>
                     <a class="table-action  mg-r-10" href="index.php?action=Cita/AddConfirmarCita&id=<?php echo $cita->id?>"><i class="fa fa-paper-plane-o"></i></a>
                     <!--span class="dropdown-toggle " data-toggle="dropdown"></span>
                     <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="index.php?action=Salida_Vehiculo&id="><i class="fa fa-book"></i> Salida</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-link"></i> Add file</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-bar-chart"></i> Performance</a>
                     </div-->
                  </td>
               </tr> 
               <?php 
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