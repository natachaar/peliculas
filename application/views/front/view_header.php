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

        <title>Películas</title>
    </head>
    <body class="bg-light">
        <header>
            <!-- Fixed navbar -->
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="<?php echo base_url(); ?>" id="base-url">
                    <img src="<?php echo base_url('assets/img/logo-movie-white.png') ?>" class="img-fluid" width="50">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                <i class="fas fa-home"></i>  Inicio <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Películas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Novedades</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item mr-3">
                            <form class="form-inline mt-2 mt-md-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Buscar Película" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                            </form>
                        </li>
                        <li class="nav-item dropdown active">
                            <?php if (!$this->session->userdata('login')) { ?>
                                <a class="nav-link" href="<?php echo base_url('login'); ?>">
                                    Iniciar Sesión <i class="fas fa-sign-in-alt"></i>
                                </a>
                            <?php } else { ?>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?php echo base_url('assets/img/user.png'); ?>" class="img-fluid" width="25"> Hola, <?php echo $this->session->userdata('user_name'); ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 100%">
                                    <a class="dropdown-item" href="<?php echo base_url('mi-cuenta'); ?>"><i class="far fa-user-circle"></i> Mi Cuenta</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">
                                        <i class="fas fa-sign-out-alt text-danger"></i> Salir 
                                    </a>
                                </div>

                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>