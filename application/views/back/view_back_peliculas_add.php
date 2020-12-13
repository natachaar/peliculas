<div class="<?php echo ($this->agent->is_mobile()) ? 'col-md-12' : 'col-md-9'; ?> px-0 bg-white" id="content" style="min-height: 500px">

    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-ligh btn-sm" id="sidebarCollapse"><i class="fas fa-bars"></i></button>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0" style="background: none">
                <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Inicio</a></li>
                <li class="breadcrumb-item" aria-current="page">
                    <a href="<?php echo base_url('dashboard/peliculas'); ?>">Películas</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Nueva Película</li>
            </ol>
        </nav>
    </nav>

    <div class="container-fluid py-3 px-4">

        <h3 class="">
            Nueva Película
        </h3>

        <hr>
        <form id="formadd" action="<?php echo base_url('dashboard/peliculas/save'); ?>" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">

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
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título" required="">
                </div>
                <div class="col-md-6">
                    <label>Categoría <span class="text-danger">*</span></label>
                    <select class="form-control" name="categoria" id="categoria" required="">
                        <option value="">Seleccionar</option>
                        <?php
                        foreach ($categorias as $value) {
                            echo '<option value="' . $value->id_categoria . '">' . $value->categoria . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label>Fecha de Estreno <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" name="fecha" id="fecha" required="">
                </div>
                <div class="col-md-4">
                    <label>Duración <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="duracion" id="duracion" placeholder="Minutos" required="">
                </div>
                <div class="col-md-4">
                    <label>País <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="pais" id="pais" placeholder="País" required="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label>Protagonistas <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="protagonistas" id="protagonistas" placeholder="Protagonistas" required="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label>Resumen <span class="text-danger">*</span></label>
                    <textarea class="form-control" rows="3" name="resumen" id="resumen" placeholder="Resumen" required=""></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label> <i class="far fa-image fa-lg"></i> Foto</label>
                    <input type="file" name="foto" id="foto">
                </div>
            </div>


            <div class="form-group row justify-content-center py-3">
                <button type="button" class="btn btn-outline-danger mr-3" onclick="reset_form('formadd')">
                    <i class="fas fa-times"></i> Cancelar
                </button>
                <button type="button" class="btn btn-primary" onclick="add()">
                    <i class="far fa-save"></i> Guardar Película
                </button>
            </div>
        </form>



    </div>

</div>