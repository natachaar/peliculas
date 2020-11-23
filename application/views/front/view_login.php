
<main role="main">
    <div class="container">

        <div class="row justify-content-center py-5">
            <div class="col-md-8">

                <div class="card shadow-sm p-5">

                    <form id="formadd" action="<?php echo base_url('login/iniciar-sesion'); ?>" method="POST" accept-charset="UTF-8">
                        <div class="form-group mb-5">
                            <h2 class="text-center">¡Bienvenido!</h2>
                            <p class="text-center"> Si ya tienes una cuenta introduce tu email y contraseña para identificarte.</p>
                        </div>
                        <div class="form-group row justify-content-center hidden">
                            <div class="alert alert-danger col-md-8" id="error"></div>
                        </div>
                        <div class="form-group row justify-content-center">    
                            <div class="col-md-8">
                                <label><i class="fas fa-envelope"></i> Correo Electrónico <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" required="">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">   
                            <div class="col-md-8">
                                <label><i class="fas fa-lock"></i> Contraseña <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required="">
                            </div>
                        </div>

                        <div class="form-group row justify-content-center mt-4">   
                            <div class="col-md-4">
                                <button type="button" class="btn btn-primary btn-block" onclick="login();">Iniciar Sesión <i class="fas fa-sign-in-alt"></i></button>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center mt-4"> 
                            <div class="col-md-10">
                                <hr>
                            </div>
                            <div class="col-md-4 text-center">
                                <a class="text-info" href="#">Recuperar Contraseña</a>
                            </div>
                            <div class="col-md-4 text-center">
                                <a class="text-info" href="<?php echo base_url('registro'); ?>">Registrase <i class="far fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </form>


                </div>

            </div>
        </div>


    </div>
</main>
