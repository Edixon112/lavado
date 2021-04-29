
<div id="main-wrapper">

	<div class="col-md-12 col-lg-12">
		<div class="card mg-b-20">
			<div class="card-header">
				<h4 class="card-header-title"> Detalle Cliente </h4>
				<div class="card-header-btn">
					<a href="#" data-toggle="collapse" class="btn card-collapse" data-target="#collapse4" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
					<a href="#" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
					<a href="#" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
					<a href="#" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
				</div>
 			</div>
			<div class="card-body collapse show" id="collapse4">
			<?php 
			$cita=CitaData::getById($_GET["id"]); 
			?>
				<form class="form-horizontal" method="post" id="addproduct" action="index.php?action=Lavado/EditLavado" role="form">
					<div class="row">
                    
					<!--info oculta-->
					<input type="text" style="display: none" name="id" id="id" value="<?php echo $Lavado->id;?>" readonly="true"  required />
                        <!-- col -->
                        <div class="col-md-4 mb-3">
                            <?php $cliente=ClienteData::getById($cita->idcliente);
                            $dato=$cliente->nombre;
                            ?>
                            <label for="validationCustom01">CLIENTE</label>
                            <input disabled="" type="text" class="form-control" id="cc" value="<?php echo $dato;?>" name="cc" required>
                            <div class="valid-feedback">
                            aqui
                            </div>
                        </div>
                        <!-- col -->
                        <!-- col -->
                        <div class="col-md-4 mb-3">
                            <?php 
                            $fechapedida=$cita->fechapedida;
                            ?>
                            <label for="validationCustom01">FECHA SOLICITADA</label>
                            <input disabled="" type="text" class="form-control" id="fechadeentrada" value="<?php echo $fechapedida;?>" name="fechadeentrada" required>
                            <div class="valid-feedback">
                            aqui
                            </div>
                        </div>
                        <!-- col -->
	 				</div>
				</form> 
			</div>
		</div>
    </div>
</div>