<?php    $clientes=ClienteData::GetAll();    ?>
<!-- Scrollable Table Start -->
<div class="col-md-12 col-lg-12">
   <div class="card mg-b-20">
      <div class="card-header">
         <h4 class="card-header-title">
          Tabla Cliente
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
                  <th>Apellido</th>
                  <th>Numero de Cedula</th>
                  <th>Numero de celular</th>
                  <th> </th>
               </tr>
            </thead>
            <tbody>
               <?php
                  foreach($clientes as $cliente):
               ?>
               <tr>
                  <td><?php echo $cliente->id;  ?></td>
                  <td><?php echo $cliente->nombre; ?></td>
                  <td><?php echo $cliente->apellido; ?></td>
                  <td><?php echo $cliente->cc; ?></td>
                  <td><?php echo $cliente->celular; ?></td>
                  <td class="text-right table-actions">
                     <a class="table-action  mg-r-10" href="index.php?view=Cliente/EditCliente&id=<?php echo $cliente->id?>"><i class="fa fa-pencil"></i></a>
                     <a class="table-action  mg-r-10" href="index.php?action=Cliente/EliminarCliente&id=<?php echo $cliente->id?>"><i class="fa fa-trash"></i></a>
                     <span class="dropdown-toggle " data-toggle="dropdown"></span>
                     <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="index.php?action=Salida_Vehiculo&id=<?php echo $lavado->id?>"><i class="fa fa-book"></i> Salida</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-link"></i> Add file</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-bar-chart"></i> Performance</a>
                     </div>
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
                     <th>Apellido</th>
                     <th>Numero de Cedula</th>
                     <th>Numero de celular</th>
                     <th> </th>
                  </tr>
               </tfoot>
         </table>
      </div>
   </div>
</div>
<!--/ Scrollable Table End -->	