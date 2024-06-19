<?php $title = "Crear servicio"; ?>
<?php ob_start(); ?>

<div class="card mt-3">
    <h5 class="card-header">Crear servicio</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <form action="/clinica/servicios/create" method="post">

                    <!-- Nombre -->
                    <div class="form-control mb-2">
                        <label for="nombre">
                            <b>Nombre</b>
                        </label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>

                    <!-- Descripcion -->
                    <div class="form-control mb-2">
                        <label for="descripcion">
                            <b>Descripción</b>
                        </label>
                        <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                    </div>

                    <!-- Precio -->
                    <div class="form-control mb-2">
                        <label for="precio">
                            <b>Precio</b>
                        </label>
                        <input type="number" class="form-control" id="precio" name="precio">
                    </div>

                    <!-- Actualizar btn -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 d-flex" style="gap: 5px;">
                                    <input type="submit" value="Agregar servicio" class="btn btn-primary">
                                    <a href="/clinica/servicios" class="btn btn-secondary">Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script>

</script>

<?php $content = ob_get_clean(); ?>
<?php require 'app/views/layouts/dashboardLayout.php'; ?>