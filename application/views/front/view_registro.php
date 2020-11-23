
<main role="main">
    <div class="container">

        <div class="row justify-content-center py-5">
            <div class="col-md-8">

                <div class="card shadow-sm p-5">

                    <form id="formadd" action="<?php echo base_url('registro/add-usuario'); ?>" method="POST" accept-charset="UTF-8">
                        <div class="form-group mb-5">
                            <h2 class="text-center">¡Crear cuenta!</h2>
                            <p class="text-center"> Introduzca los datos para crear una nueva cuenta de usuario.</p>
                        </div>
                        <div class="form-group row justify-content-center hidden">
                            <div class="alert alert-danger col-md-8" id="error"></div>
                        </div>
                        <div class="form-group row justify-content-center">    
                            <div class="col-md-6">
                                <label> Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required="">
                            </div>
                             <div class="col-md-6">
                                <label> Apellidos <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" required="">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">   
                            <div class="col-md-6">
                                <label> Correo Electrónico <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" required="">
                            </div>
                            <div class="col-md-6">
                                <label> Contraseña <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required="">
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">    
                            <div class="col-md-6">
                                <label> Sexo </label>
                                <select class="form-control" name="sexo">
                                    <option value="">Seleccionar</option>
                                    <option value="M">Mujer</option>
                                    <option value="H">Hombre</option>
                                </select>
                            </div>
                             <div class="col-md-6">
                                 <label> Teléfono <small>(10 dígitos)</small></label>
                                <input type="text" class="form-control" name="telefono" placeholder="Teléfono">
                            </div>
                        </div>
                        
                        <div class="form-group row justify-content-center mt-4">   
                            <div class="col-md-4">
                                <button type="button" class="btn btn-primary btn-block" onclick="registro();">Registrarse <i class="fas fa-sign-in-alt"></i></button>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center mt-4"> 
                            <div class="col-md-10">
                                <hr>
                            </div>
                            <div class="col-md-4 text-center">
                                Si ya tienes una cuenta 
                                <a class="text-info" href="<?php echo base_url('login'); ?>">Inicia Sesión <i class="far fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </form>


                </div>

            </div>
        </div>


    </div>
</main>
