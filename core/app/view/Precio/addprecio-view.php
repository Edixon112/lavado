<!DOCTYPE html>
<html lang="zxx">
   
	<div id="main-wrapper">
  
		<div class="col-md-12 col-lg-12">
			<div class="card mg-b-20">
				<div class="card-header">
					<h4 class="card-header-title"> Editar Precio </h4>
					<div class="card-header-btn">
						<a href="#" data-toggle="collapse" class="btn card-collapse" data-target="#collapse4" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
						<a href="#" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
						<a href="#" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
						<a href="#" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
					</div>
	 			</div>
				<div class="card-body collapse show" id="collapse4">
               <div class="card-body collapse show" id="collapse1">
                  <form action="index.php?action=Precio/AddPrecio" method="post">
                     <div class="row">
                        <div class="col-md-4 mb-3">
                           <label for="validationCustom01">Precio del tipo de Vehiculo</label>
                           <input type="text" class="form-control" id="precio" placeholder="precio" name="precio" required>
                           <div class="valid-feedback">
                              aqui
                           </div>
                           <div class="input-group mb-6">
                              <select class="selectpicker form-control" data-hide-disabled="true" data-live-search="true" name="tipo" id="tipo" id="inputGroupSelect01" required>
                                 <option > </option>
                                 <?php 
                                 $tipos=TipoData::getAll();
                                 foreach ($tipos as $tipo) {
                                 ?>                
                                 <option   value="<?php echo $tipo->id;?>" ><?php echo $tipo->nombre;?></option>
                                 <?php } ?>               
                              </select>               
	                        </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-success active btn-block mg-b-10">Enviar</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</html>      