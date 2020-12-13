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
        <link rel="stylesheet" href="<?php echo base_url('assets/css/datatable/datatables.min.css'); ?>" type="text/css">
        <title>Películas</title>
    </head>
    <body class="bg-light">
        <header>
            <!-- Fixed navbar -->
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="<?php echo base_url(); ?>" id="base-url">
                    <img src="<?php echo base_url('assets/img/logo-movie-white.png') ?>" class="img-fluid" width="50"> Dashboard Películas
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <ul class="navbar-nav">                        
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo base_url('assets/img/user.png'); ?>" class="img-fluid" width="25"> Hola, <?php echo $this->session->userdata('sys_nombre'); ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 100%">
                                <a class="dropdown-item" href="<?php echo base_url('dashboard/mi-cuenta'); ?>"><i class="far fa-user-circle"></i> Mi Cuenta</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('dashboard/logout'); ?>">
                                    <i class="fas fa-sign-out-alt text-danger"></i> Salir 
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>

            <div class="container-fluid">

                <div class="row">

                    <!-- Sidebar/Menu -->
                    <div class="px-0 border-right <?php echo ($this->agent->is_mobile()) ? 'col-md-12 hidden' : 'col-md-3'; ?>" id="sidebar">
                        <div class="bg-light ">
                            <div class="list-group list-group-flush">
                                <a href="<?php echo base_url('dashboard/peliculas');?>" class="list-group-item list-group-item-action bg-light">
                                    <i class="fas fa-film"></i> Películas
                                </a>
                                <a href="#" class="list-group-item list-group-item-action bg-light">
                                    <i class="fas fa-film"></i> Series
                                </a>
                                <a href="#" class="list-group-item list-group-item-action bg-light">
                                    <i class="fas fa-users"></i> Usuarios
                                </a>
                                <a href="#" class="list-group-item list-group-item-action bg-light">
                                    <i class="far fa-chart-bar"></i> Reportes
                                </a>

                            </div>
                        </div>
                    </div>

                    
