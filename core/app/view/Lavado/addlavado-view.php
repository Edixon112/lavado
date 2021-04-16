
<div class="card-body collapse show" id="collapse1">
   <form action="index.php?action=Lavado/AddLavado" method="post">
      <div class="row">
         <div class="col-md-6 mb-3">
            <p>vehiculo</p>
            <select class="selectpicker form-control" data-hide-disabled="true" data-live-search="true" name="idvehiculo" id="idveiculo" id="inputGroupSelect01" required>
            <option > </option>
            <?php 
             $vehiculos=VehiculoData::getAll();

             foreach ($vehiculos as $vehiculo) { 
             $lavado=LavadoData::getByIdVehiculo($vehiculo->id);

             if($lavado->estado!=0 or $lavado->estado==NULL){
            ?>                
            <option   value="<?php echo $vehiculo->id;?>" ><?php echo $vehiculo->placa;?></option>
            <?php } 
                    }
            ?>
            </select>
         </div>
         <div class="col-md-6 mb-3">
		   	<p>Cliente</p>
		   	<div class="input-group mb-6">
               <select class="selectpicker form-control" data-hide-disabled="true" data-live-search="true" name="idcliente" id="idcliente" id="inputGroupSelect01" required>
                   <option > </option>
                   <?php 
                      $clientess=ClienteData::getAll();
                      foreach ($clientess as $cliente) {
                   ?>                
                   <option   value="<?php echo $cliente->id;?>" ><?php echo $cliente->nombre;?></option>
                   <?php } ?>               
               </select>
		   	</div>
		   </div>
      </div>
      <button type="submit" class="btn btn-success active btn-block mg-b-10">Enviar</button>
   </form>
</div>