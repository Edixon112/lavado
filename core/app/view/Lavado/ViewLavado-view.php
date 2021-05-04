<!-- Scrollable Table Start -->
<div class="col-md-12 col-lg-12">
   <div class="card mg-b-20">
      <div class="card-header">
         <h4 class="card-header-title">
          Tabla Lavado
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
                  <th>Fecha de entrada</th>
                  <th>Fecha de salida</th>
                  <th>ID cliente</th>
                  <th>ID vehiculo</th>
                  <th>Estado del Lavado</th>
                  <th> </th>
               </tr>
            </thead>
            <tbody>
               <?php

                  $lavados=LavadoData::getAll(); 

                  foreach($lavados as $lavado):

                  $fechatemp = new DateTime('0000-00-00 00:00:00');
                  $tiempo=$fechatemp->format('Y-m-d H:i:s');
                  $salida= new DateTime($lavado->fechadesalida);
                  $tiempo2=$salida->format('Y-m-d H:i:s');
 
                  $cliente=ClienteData::getById($lavado->idcliente);
                  $vehiculo=VehiculoData::getById($lavado->idvehiculo);
               ?>
               <tr>
                  <td><?php echo $lavado->id;  ?></td>
                  <td><?php echo $lavado->fechadeentrada; ?></td>
                  <td><?php if($tiempo2==$tiempo){ echo "Aun no ha salido";}else{ echo $lavado->fechadesalida;} ?></td>
                  <td><?php echo $cliente->nombre; ?></td>
                  <td><?php echo $vehiculo->placa; ?></td>
                  <td><?php if($lavado->estado==0){ echo "en proceso de lavado";}else{echo "Vehiculo lavado";} ?> </td>
                  <td class="text-right table-actions">
                     <a class="table-action  mg-r-10" href="index.php?view=Lavado/EditLavado&id=<?php echo $lavado->id?>" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil"></i></a>
                     <a class="table-action  mg-r-10" href="index.php?action=Lavado/EliminarLavado&id=<?php echo $lavado->id?>" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fa fa-trash"></i></a>
                     <span class="dropdown-toggle " data-toggle="dropdown"></span>
                     <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="index.php?action=Lavado/SalidaVehiculo&id=<?php echo $lavado->id?>"><i class="fa fa-book"></i> Salida de Lavado</a>
                        <!--a class="dropdown-item" href="index.php?action=ApiMensaje&id=<?php echo $lavado->id?>"><i class="fa fa-link"></i> Mensaje</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-bar-chart"></i> Performance</a-->
                     </div>
                  </td>
               </tr>
               <?php endforeach?>
            </tbody>
               <tfoot>
                  <tr>
                     <th>ID</th>
                     <th>fecha de entrada </th>
                     <th>Fecha de salida</th>
                     <th>ID Cliente</th>
                     <th>ID Vehiculo</th>
                     <th>Estado del Lavado</th>
                     <th> </th>
                  </tr>
               </tfoot>
         </table>
      </div>
   </div>
</div>
<!--/ Scrollable Table End -->	