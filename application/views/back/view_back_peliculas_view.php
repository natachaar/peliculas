<div class="<?php echo ($this->agent->is_mobile()) ? 'col-md-12' : 'col-md-9'; ?> px-0 bg-white" id="content" style="min-height: 500px">

    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-ligh btn-sm" id="sidebarCollapse"><i class="fas fa-bars"></i></button>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0" style="background: none">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Inicio</a></li>
                <li class="breadcrumb-item" aria-current="page">
                    <a href="<?php echo base_url('dashboard/peliculas'); ?>">Películas</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $pelicula[0]->titulo; ?></li>
            </ol>
        </nav>
    </nav>

    <div class="container-fluid py-3 px-4">

        <div class="row">
            <div class="col-md-3">
                <img class="img-fluid img-thumbnail" src="<?php echo base_url('upload/fotos_peliculas/' . $pelicula[0]->imagen) ?>">
            </div>
            <div class="col-md-9">
                <p><strong><i>Título:</i></strong> <?php echo $pelicula[0]->titulo; ?></p>
                <p><strong><i>Categoría:</i></strong> <?php echo $pelicula[0]->categoria; ?></p>
                <p><strong><i>Feche:</i></strong> <?php echo $pelicula[0]->titulo; ?></p>
                <p><strong><i>Año:</i></strong> <?php echo $pelicula[0]->year; ?></p>
                <p><strong><i>Duración:</i></strong> <?php echo $pelicula[0]->duracion . ' min'; ?></p>
                <p><strong><i>País:</i></strong> <?php echo $pelicula[0]->pais; ?></p>
                <p><strong><i>Protagonistas:</i></strong> <?php echo $pelicula[0]->protagonistas; ?></p>
                <p class="text-justify"><strong><i>Resumen:</i></strong> <?php echo $pelicula[0]->resumen; ?></p>

                <a href="<?php echo base_url('dashboard/peliculas/edit/' . $pelicula[0]->id_pelicula); ?>" class="btn btn-success btn-sm">
                    <i class="far fa-edit"></i> Editar
                </a>
                <a href="<?php echo base_url('dashboard/peliculas/delete/' . $pelicula[0]->id_pelicula); ?>" class="btn btn-danger btn-sm">
                    <i class="far fa-trash-alt"></i> Eliminar
                </a>
            </div>
        </div>


    </div>

</div>