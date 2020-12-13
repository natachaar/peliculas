<div class="<?php echo ($this->agent->is_mobile()) ? 'col-md-12' : 'col-md-9'; ?> px-0 bg-white" id="content" style="min-height: 500px">

    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-ligh btn-sm" id="sidebarCollapse"><i class="fas fa-bars"></i></button>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0" style="background: none">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Películas</li>
            </ol>
        </nav>
    </nav>

    <div class="container-fluid py-3 px-4">

        <div class="row">
            <div class="col-md-10">
                <h3 class="mb-0">
                    Listado de Películas 
                </h3>
            </div>
            <div class="col-md-2">
                <a href="<?php echo base_url('dashboard/peliculas/add');?>" class="btn btn-primary btn-sm btn-block">
                    <i class="fas fa-plus"></i> Nueva Película
                </a>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
        </div>


        <table id="table" class="table table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Categoría</th>
                    <th>Duración</th>
                    <th>Año</th>
                    <th>País</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($peliculas as $value) { ?>

                    <tr>
                        <td><?php echo $value->titulo; ?></td>
                        <td><?php echo $value->categoria; ?></td>
                        <td><?php echo $value->duracion; ?></td>
                        <td><?php echo $value->year; ?></td>
                        <td><?php echo $value->pais; ?></td>
                        <td>
                            <a href="<?php echo base_url('dashboard/peliculas/view/'.$value->id_pelicula);?>" class="btn btn-primary btn-sm">
                                <i class="far fa-folder-open"></i> Ver
                            </a>
                            <a href="<?php echo base_url('dashboard/peliculas/edit/'.$value->id_pelicula);?>" class="btn btn-success btn-sm">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="<?php echo base_url('dashboard/peliculas/delete/'.$value->id_pelicula);?>" class="btn btn-danger btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>

    </div>

</div>