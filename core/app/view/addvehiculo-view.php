                     <div class="card-body collapse show" id="collapse1">
                           <form action="index.php?action=addvehiculo" method="post">
                                 <div class="row">
                                    

                                    <div class="col-md-4 mb-3">
                                          <label for="validationCustom01">Placa</label>
                                          <input type="text" class="form-control" id="placa" placeholder="placa" name="placa" required>
                                          <div class="valid-feedback">
                                             Looks good!
                                          </div>
                                       </div>
                                       <div class="col-md-4 mb-3">
                                          <label for="validationCustom01">marca</label>
                                          <input type="text" class="form-control" id="marca" placeholder="marca" name="marca"  required>
                                          <div class="valid-feedback">
                                             Looks good!
                                          </div>
                                       </div>

                                       <div class="col-md-4 mb-3">
                                                <p>tipo</p>

                                                <select class="selectpicker form-control" data-hide-disabled="true" data-live-search="true" name="tipo" id="tipo" id="inputGroupSelect01" required>
                                                <option > </option>
                                                                     
                                                <?php 
                                                $tipos=TipoData::getAll();

                                                foreach ($tipos as $tipo) { ?>                

                                                <option   value="<?php echo $tipo->id;?>" ><?php echo $tipo->nombre;?></option>
                                                
                                                <?php } ?>
                                                            
                                                   </select>
                                       </div>
   <!--   ---------------------------                         ----------------------     -->  
                                 
                                 </div>
                        
                                 <button type="submit" class="btn btn-success active btn-block mg-b-10">Enviar</button>
                           </form>
                  </div>