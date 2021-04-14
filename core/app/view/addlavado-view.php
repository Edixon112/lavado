
<div class="card-body collapse show" id="collapse1">
<form action="index.php?action=addlavado" method="post">
<div class="row">

<!----
<div class="col-md-4 mb-3">
      <label for="validationCustom01">idcliente</label>
      <input type="text" class="form-control" id="idcliente" placeholder="idcliente" name="idcliente" required>
      <div class="valid-feedback">
         Looks good!
      </div>
   </div>

   -->                               <!-- 
<div class="col-md-4 mb-3">
      <label for="validationCustom01">idvehiculo</label>
      <input type="text" class="form-control" id="idvehiculo" placeholder="idvehiculo" name="idvehiculo" required>
      <div class="valid-feedback">
         Looks good!
      </div>
   </div>
 col -->

<div class="col-md-6 mb-3">
               <p>vehiculo</p>

               <select class="selectpicker form-control" data-hide-disabled="true" data-live-search="true" name="idvehiculo" id="idveiculo" id="inputGroupSelect01" required>
               <option > </option>
                                          
                     
                           
         <?php 
         $vehiculos=VehiculoData::getAll();

         foreach ($vehiculos as $vehiculo) { 
            $lavado=LavadoData::getByIdVehiculo($vehiculo->id);
            

            

            
            if($lavado->estado==1){
            ?>                

         <option   value="<?php echo $vehiculo->id;?>" ><?php echo $vehiculo->placa;?></option>
         
         <?php } 
            
         
      }
         ?>
                     
            </select>
   </div>


<!--   ---------------------------                         ----------------------     -->  



<div class="col-md-6 mb-3">
               <p>cliente</p>

               <select class="selectpicker form-control" data-hide-disabled="true" data-live-search="true" name="idcliente" id="idcliente" id="inputGroupSelect01" required>
               <option > </option>
                                          
                     
                           
         <?php 
         $clientes=ClienteData::getAll();

         foreach ($clientes as $cliente) { ?>

         <option   value="<?php echo $cliente->id;?>" ><?php echo $cliente->nombre;?></option>
         
         <?php } ?>
                     
        </select>
   </div>


<!--   ---------------------------                         ----------------------     -->

</div>

<button type="submit" class="btn btn-success active btn-block mg-b-10">Enviar</button>

</form>
</div>