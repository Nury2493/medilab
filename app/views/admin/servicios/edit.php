<?php $title = "Editar servicio"; ?>
<?php ob_start(); ?>

<div class="card mt-3">
    <h5 class="card-header">Editar servicio</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <form action="/clinica/servicios/update" method="post">

                    <!-- ID -->
                    <input type="hidden" name="id" value="<?= $servicio->servicio_id ?>">

                    <!-- Nombre -->
                    <div class="form-control mb-2">
                        <label for="nombre">
                            <b>Nombre</b>
                        </label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $servicio->nombre ?>">
                    </div>

                    <!-- Descripcion -->
                    <div class="form-control mb-2">
                        <label for="descripcion">
                            <b>Descripción</b>
                        </label>
                        <textarea name="descripcion" id="descripcion" class="form-control"><?= $servicio->descripcion ?></textarea>
                    </div>

                    <!-- Precio -->
                    <div class="form-control mb-2">
                        <label for="precio">
                            <b>Precio</b>
                        </label>
                        <input type="number" class="form-control" id="precio" name="precio" value="<?= $servicio->precio ?>">
                    </div>

                    <!-- Actualizar btn -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 d-flex" style="gap: 5px;">
                                    <input type="submit" value="Actualizar" class="btn btn-primary">
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