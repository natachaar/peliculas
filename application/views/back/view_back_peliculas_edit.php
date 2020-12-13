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

        <h3 class="">
            Editar Película
        </h3>

        <hr>
        <form id="formadd" action="<?php echo base_url('dashboard/peliculas/update'); ?>" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">

            <?php if ($this->session->flashdata('error')) { ?>
                <div class="form-group">
                    <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                </div>
            <?php } ?>

            <div class="form-group row">
                <div class="col-md-6">
                    <label>Título de Película <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="<?php echo $pelicula[0]->titulo; ?>" name="titulo" id="titulo" placeholder="Título" required="">
                    <input type="hidden" value="<?php echo $pelicula[0]->id_pelicula; ?>" name="id_pelicula">
                </div>
                <div class="col-md-6">
                    <label>Categoría <span class="text-danger">*</span></label>
                    <select class="form-control" name="categoria" id="categoria" required="">
                        <option value="">Seleccionar</option>
                        <?php
                        foreach ($categorias as $value) {
                            if($pelicula[0]->id_categoria == $value->id_categoria){
                                echo '<option value="' . $value->id_categoria . '" selected>' . $value->categoria . '</option>';
                            }else{
                                echo '<option value="' . $value->id_categoria . '">' . $value->categoria . '</option>';
                            }
                            
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label>Fecha de Estreno <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" name="fecha" id="fecha" required="" value="<?php echo $pelicula[0]->year; ?>">
                </div>
                <div class="col-md-4">
                    <label>Duración <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="duracion" id="duracion" placeholder="Minutos" required="" value="<?php echo $pelicula[0]->duracion; ?>">
                </div>
                <div class="col-md-4">
                    <label>País <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="pais" id="pais" placeholder="País" required="" value="<?php echo $pelicula[0]->pais; ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label>Protagonistas <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="protagonistas" id="protagonistas" placeholder="Protagonistas" required="" value="<?php echo $pelicula[0]->protagonistas; ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label>Resumen <span class="text-danger">*</span></label>
                    <textarea class="form-control" rows="3" name="resumen" id="resumen" placeholder="Resumen" required=""><?php echo $pelicula[0]->resumen; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2 mb-2">
                    
                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('upload/fotos_peliculas/' . $pelicula[0]->imagen) ?>">
                </div>
                <div class="col-md-10">   
                    <label> <i class="far fa-image fa-lg"></i> Foto</label>
                    <input type="file" name="foto" id="foto">
                </div>
            </div>


            <div class="form-group row justify-content-center py-3">
                <a href="<?php echo base_url('dashboard/peliculas/view/'.$pelicula[0]->id_pelicula); ?>" class="btn btn-outline-primary mr-3">
                    <i class="fas fa-undo-alt"></i> Regresar
                </a>
                <button type="button" class="btn btn-primary" onclick="add()">
                    <i class="far fa-save"></i> Actualizar Película
                </button>
            </div>
        </form>



    </div>

</div>
