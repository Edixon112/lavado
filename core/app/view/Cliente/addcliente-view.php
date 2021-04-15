<div class="card-body collapse show" id="collapse1">
   <form action="index.php?action=Cliente/AddCliente" method="post">
      <div class="row">
         <div class="col-md-4 mb-3">
            <label for="validationCustom01">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre" required>
            <div class="valid-feedback">
               aqui
            </div>
         </div>
         <!-- col -->
         <div class="col-md-4 mb-3">
            <label for="validationCustom01">Apellido</label>
            <input type="text" class="form-control" id="apellido" placeholder="apellido" name="apellido" required>
            <div class="valid-feedback">
               aqui
            </div>
         </div>
         <!-- col -->
         <div class="col-md-4 mb-3">
            <label for="validationCustom01">Numero de Cedula</label>
            <input type="text" class="form-control" id="cc" placeholder="cc" name="cc" required>
            <div class="valid-feedback">
               aqui
            </div>
         </div>
         <!-- col -->
         <div class="col-md-4 mb-3">
            <label for="validationCustom01">Numero de Celular</label>
            <input type="text" class="form-control" id="celular" placeholder="celular" name="celular" required>
            <div class="valid-feedback">
               aqui
            </div>
         </div>
         <!-- col -->
      </div>
      <button type="submit" class="btn btn-success active btn-block mg-b-10">Enviar</button>
   </form>
</div>