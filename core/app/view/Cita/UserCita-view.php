<div class="col-md-12 col-lg-12">
     <div class="card mg-b-20">
         <div class="card-header">
             <h4 class="card-header-title">
             Ingrese sus datos para apartar lavado de su Vehiculo
             </h4>
             <div class="card-header-btn">
                 <a href="#" data-toggle="collapse" class="btn card-collapse" data-target="#collapse7" aria-expanded="true"><i class="ion-ios-arrow-down"></i></a>
                 <a href="#" data-toggle="refresh" class="btn card-refresh"><i class="ion-android-refresh"></i></a>
                 <a href="#" data-toggle="expand" class="btn card-expand"><i class="ion-android-expand"></i></a>
                 <a href="#" data-toggle="remove" class="btn card-remove"><i class="ion-android-close"></i></a>
             </div>
         </div>
         <div class="card-body collapse show" id="collapse7">
             <form class="needs-validation" action="index.php?action=Cita/AddCitaLavado" method="post" novalidate>
                 <div class="form-row"> 
                     <!--div class="col-md-4 mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" value="" required>
                        <div class="valid-feedback">
                           Nombre valido
                        </div>
                        <div class="invalid-feedback">
                           Por favor ingrese un nombre 
                        </div>
                     </div>
                     <div class="col-md-4 mb-3">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" placeholder="ingrese su apellido" value="" required>
                        <div class="valid-feedback">
                           Apellido valido
                        </div>
                        <div class="invalid-feedback">
                           Por favor ingrese un apellido 
                        </div>
                     </div-->
                     <!--div class="col-md-6 col-lg-6">
                          <div class="card mg-b-20">
                             <div class="card-header">
                                <h4 class="card-header-title">
                                   Single Date Picker
                                </h4>
                             </div>
                             <div class="card-body collapse show" id="collapse1">
                                <p>Datepicker will automatically initialize on elements with class <code>.datepicker-here</code>, options may be sent via data attributes.</p>
                                <div class="form-group">											
                                   <input type='text' id="fecha" name="fecha" class="form-control datepicker-here" placeholder="Select Date" />
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="col-md-6 col-lg-6">
                          <div class="card mg-b-20">
                             <div class="card-header">
                                <h4 class="card-header-title">
                                   Default Time Picker
                                </h4>
                             </div>
                             <div class="card-body collapse show" id="collapse1">
                                <p><code>data-provide="timepicker"</code> applies to <em>.form-control</em></p>
                                <input type="text" id="hora" name="hora" class="form-control" data-provide="timepicker">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                             </div>
                          </div>
                       </div-->
                     <!--div class="col-md-6 mb-3">
                        <label for="celular">Numero de telefono</label>
                        <input type="text" class="form-control" id="celular" placeholder="State" required>
                        <div class="invalid-feedback">
                           Por favor ingrese su numero de telefono.
                        </div>
                     </div-->
                     <div class="col-md-6 mb-3">
                         <label for="cc">Ingrese la Fecha Y Hora para lavar su vehiculo</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text">H</span>
                             </div>
                             <input autocomplete="off" type="text" id=hora name="hora" class="form-control datepicker-here"  placeholder="Ingrese fecha" data-timepicker="true" data-time-format="hh:ii ">
                             <div class="invalid-feedback">
                                 por favor ingrese una fecha.
                             </div>
                         </div>
                     </div>
 
                     <div class="col-md-6 mb-3">
                         <label for="cc">Documento de identidad</label>
                         <div class="input-group">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"id="cc">CC</span>
                             </div>
                             <input type="text" class="form-control" id="cc" name="cc" placeholder="Ingrese su CC" aria-describedby="inputGroupPrepend" required>
                             <div class="invalid-feedback">
                                 por favor ingrese documento de identidad.
                             </div>    
                         </div>
                     </div>
                     <button class="btn btn-custom-primary" type="submit">Enviar</button>    
                 </div>   
             </form>
         </div>
     </div>
 </div>
