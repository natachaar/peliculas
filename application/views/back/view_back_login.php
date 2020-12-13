<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS y Fontawesome Icons -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/fontawesome.min.css'); ?>" type="text/css">
        <!-- Otros CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.loadingModal.css'); ?>" type="text/css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/custom-style.css?v=1.0'); ?>" type="text/css">

        <title>Dasboard Películas</title>
    </head>
    <body class="bg-dark">
        <main role="main">
            <div class="container">

                <div class="row justify-content-center py-5">
                    <div class="col-md-6">

                        <div class="card shadow-sm p-3">

                            <form id="formadd" action="<?php echo base_url('dashboard/login-access'); ?>" method="POST" accept-charset="UTF-8">
                                <div class="form-group mb-5">
                                    <h2 class="text-center">
                                        <a href="<?php echo base_url(); ?>" id="base-url">
                                            <img src="<?php echo base_url('assets/img/logo-movie.png') ?>" class="img-fluid" width="50"> 
                                        </a>
                                        Películas
                                    </h2>
                                    <p class="text-center"> Panel de Control | Iniciar Sesión</p>
                                </div>
                                <div class="form-group row justify-content-center hidden">
                                    <div class="alert alert-danger col-md-8" id="error"></div>
                                </div>
                                <div class="form-group row justify-content-center">    
                                    <div class="col-md-8">
                                        <label><i class="fas fa-user"></i> Usuario <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="user" id="user" placeholder="Usuario" required="">
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
                                        <button type="button" class="btn btn-primary btn-block" onclick="dashboard_login();">Iniciar Sesión <i class="fas fa-sign-in-alt"></i></button>
                                    </div>
                                </div>


                            </form>


                        </div>

                    </div>
                </div>


            </div>
        </main>

        <!-- General JS jQuery, Popper y Bootstrap -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

        <!-- Otros JS -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.loadingModal.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.min.js?v=1'); ?>"></script>
        <!-- Custom JS -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-custom.js?v=1.0'); ?>"></script>
    </body>
</html>