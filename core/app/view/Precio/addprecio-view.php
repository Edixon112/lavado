
               <div class="card-body collapse show" id="collapse1">
                        <form action="index.php?action=addPrecio" method="post">
                              <div class="row">
                                 
                              <div class="col-md-4 mb-3">
               <p>tipo</p>

               <select class="selectpicker form-control" data-hide-disabled="true" data-live-search="true" name="tipo" id="tipo" id="inputGroupSelect01" required>
               <option > </option>
                                          
                     
                           
         <?php 
         

         $tipos=TipoData::getAll();

      
         foreach ($tipos as $tipo) { 
            $precio=PrecioData::getByIdTipo($tipo->id);
            
            if($precio==null){

            
            ?>

         

         <option   value="<?php echo $tipo->id;?>" ><?php echo $tipo->nombre;?></option>
         
         <?php }} ?>
                     
        </select>
   </div>
                                 <!-- col -->
                                 <div class="col-md-4 mb-3">
                                       <label for="validationCustom01">Precio</label>
                                       <input type="text" class="form-control" id="precio" placeholder="precio" name="precio" required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                 <!-- col --
                                 <div class="col-md-4 mb-3">
                                       <label for="validationCustom01">CC</label>
                                       <input type="text" class="form-control" id="cc" placeholder="cc" name="cc" required>
                                       <div class="valid-feedback">
                                          Looks good!
                                       </div>
                                    </div>
                                 -- col -->
                              </div>
                            

                               

                               <button type="submit" class="btn btn-success active btn-block mg-b-10">Enviar</button>


                        </form>
                </div>