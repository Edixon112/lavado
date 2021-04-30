<div id="main-wrapper">

	<div class="col-md-12 col-lg-12">
		<div class="card mg-b-20">
			<div class="card-header">
				<h4 class="card-header-title"> Editar Cliente </h4>
				<div class="card-header-btn">
					<a href="#" data-toggle="collapse" class="btn card-collapse" data-target="#collapse4" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
					<a href="#" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
					<a href="#" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
					<a href="#" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
				</div>
 			</div>
			<div class="card-body collapse show" id="collapse4">
			<?php 
			$clientes = LavadoData::getById($_GET["id"]); 
			?>
				<form class="form-horizontal" method="post" id="addproduct" action="index.php?action=Lavado/EditLavado" role="form">
					<div class="row">
					<!--info oculta-->
					<input type="text" style="display: none" name="id" id="id" value="<?php echo $clientes->id;?>" readonly="true"  required />
						<div class="col-md-6 mb-3">
							<p>Modificar Fecha De Entrada / aun no disponible</p>
							<div class="input-group mb-6">
									<!-- <div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon3"><i class="fa fa-user"></i></span>
								</div> 
								<input type="text" class="form-control" name="nombre"value="<?php //echo $clientes->nombre; ?>" id="nombre" placeholder="Username" aria-label="Username" aria-describedby="basic-addon3">-->
	             			</div>	
						</div>
						<div class="col-md-6 mb-3">
							<p>Modificar Fecha De Salida / aun no disponible</p>
							<div class="input-group mb-6">
									<!-- <div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon3"><i class="fa fa-user"></i></span>
								</div> 
								<input type="text" class="form-control" name="apellido"value="<?php //echo $clientes->apellido; ?>" id="apellido" placeholder="Apellido" aria-label="Apellido" aria-describedby="basic-addon3">-->
	             			</div>	
						</div>
                        <div class="col-md-6 mb-3">
							<p>Modificar Cliente</p>
							<div class="input-group mb-6">
                                <select class="selectpicker form-control" data-hide-disabled="true" data-live-search="true" name="cliente" id="cliente" id="inputGroupSelect01" required>
                                    <option > </option>
                                    <?php 
                                       $clientes=ClienteData::getAll();
                                       foreach ($clientes as $cliente) {
                                    ?>                
                                    <option   value="<?php echo $cliente->id;?>" ><?php echo $cliente->nombre;?></option>
                                    <?php } ?>               
                                </select>
							</div>
						</div>
                        <div class="col-md-6 mb-3">
							<p>Modificar Vehiculo</p>
							<div class="input-group mb-6">
                                <select class="selectpicker form-control" data-hide-disabled="true" data-live-search="true" name="vehiculo" id="vehiculo" id="inputGroupSelect01" required>
                                    <option > </option>
                                    <?php 
                                       $vehiculos=VehiculoData::getAll();
                                       foreach ($vehiculos as $vehiculo) {
                                    ?>                
                                    <option   value="<?php echo $vehiculo->id;?>" ><?php echo $vehiculo->placa;?></option>
                                    <?php } ?>               
                                </select>
							</div>
						</div>
						<div class="col-md-6 mb-3">
  							<button class="btn btn-custom-primary" onclick="return pregunta()"  type="submit">Confirmar</button>
						</div>
	 				</div>
				</form> 
			</div>
		</div>
    </div>
</div>