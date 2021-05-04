<!DOCTYPE html>
<html lang="zxx">
   
	<div id="main-wrapper">
  
		<div class="col-md-12 col-lg-12">
			<div class="card mg-b-20">
				<div class="card-header">
					<h4 class="card-header-title"> Editar Tipo Vehiculo a Trabajar </h4>
					<div class="card-header-btn">
						<a href="#" data-toggle="collapse" class="btn card-collapse" data-target="#collapse4" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
						<a href="#" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
						<a href="#" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
						<a href="#" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
					</div>
	 			</div>
				<div class="card-body collapse show" id="collapse4">
				<?php 
				$tipos = TipoData::getById($_POST["id"]); 
				?>
					<form class="form-horizontal" method="post" id="addproduct" action="index.php?action=Tipo/EditTipo" role="form">
						<div class="row">
                        <!--info oculta-->
						<input type="text" style="display: none" name="id" id="id" value="<?php echo $tipos->id;?>" readonly="true"  required /> 

							<div class="col-md-6 mb-3">
								<p>Tipo de Vehiculo a Modificar</p>
								<div class="input-group mb-6">
										<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon3"><i class="fa fa-user"></i></span>
									</div>
									<input type="text" class="form-control" name="nombre"value="<?php echo $tipos->nombre; ?>" id="nombre" placeholder="Username" aria-label="Username" aria-describedby="basic-addon3">
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