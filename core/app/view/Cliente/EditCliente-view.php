<!DOCTYPE html>
<html lang="zxx">
   
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
				$clientes = ClienteData::getById($_GET["id"]); 
				?>
					<form class="form-horizontal" method="post" id="addproduct" action="index.php?action=Cliente/EditCliente" role="form">
						<div class="row">
						<!--info oculta-->
						<input type="text" style="display: none" name="id" id="id" value="<?php echo $clientes->id;?>" readonly="true"  required />

							<div class="col-md-6 mb-3">
								<p>Nombre</p>
								<div class="input-group mb-6">
										<!-- <div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon3"><i class="fa fa-user"></i></span>
									</div> -->
									<input type="text" class="form-control" name="nombre"value="<?php echo $clientes->nombre; ?>" id="nombre" placeholder="Username" aria-label="Username" aria-describedby="basic-addon3">
		             			</div>	
							</div>
							<div class="col-md-6 mb-3">
								<p>apellido</p>
								<div class="input-group mb-6">
										<!-- <div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon3"><i class="fa fa-user"></i></span>
									</div> -->
									<input type="text" class="form-control" name="apellido"value="<?php echo $clientes->apellido; ?>" id="apellido" placeholder="Apellido" aria-label="Apellido" aria-describedby="basic-addon3">
		             			</div>	
							</div>
	 						<div class="col-md-6 mb-3">
								<p>Numero de Cedula</p>
								<div class="input-group mb-6">
									<input type="text" class="form-control" name="cc"value="<?php echo $clientes->cc; ?>" id="cc" aria-label="Amount (to the nearest dollar)">
										 <!-- <div class="input-group-append">
										<span class="input-group-text">#</span>
									</div> -->
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<p>Numero de Celular</p>
								<div class="input-group mb-6">
									<input type="text" class="form-control" name="celular" value="<?php echo $clientes->celular; ?>"id="celular" aria-label="Amount (to the nearest dollar)">
										<!-- <div class="input-group-append">
										<span class="input-group-text">#</span>
									</div> -->
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
</html>