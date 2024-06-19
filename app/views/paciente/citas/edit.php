<?php $title = "Citas"; ?>
<?php ob_start(); ?>

<div class="card mt-3">
    <h5 class="card-header">Actualizar cita</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <form action="/clinica/cliente/cita/update" method="post">

                    <!-- ID_CITA  -->
                    <input type="hidden" name="cita_id" value="<?= $cita->cita_id ?>">
                    <input type="hidden" name="estado" value="<?= $cita->estado ?>">

                    <!-- Servicio -->
                    <div class="form-control mb-2">
                        <label for="nombre">
                            <b>Servicio</b>
                        </label>
                        <select class="form-control" name="servicio" id="servicio">
                            <option value="">Seleccionar ...</option>
                            <?php foreach ($servicios as $servicio) : ?>
                                <?php if ($servicio->servicio_id == $cita->servicio_id) : ?>
                                    <option selected value="<?= $servicio->servicio_id ?>"><?= $servicio->nombre ?> - $ <?= $servicio->precio ?></option>
                                <?php else : ?>
                                    <option value="<?= $servicio->servicio_id ?>"><?= $servicio->nombre ?> - $ <?= $servicio->precio ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Descripcion -->
                    <div class="form-control mb-2">
                        <label for="fechahora">
                            <b>Fecha y hora</b>
                        </label>
                        <input type="datetime-local" value="<?= $cita->fecha_hora ?>" name="fechahora" id="fechahora" class="form-control">
                    </div>

                    <!-- Actualizar btn -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 d-flex" style="gap: 5px;">
                                    <input type="submit" value="Actualizar" class="btn btn-primary">
                                    <a href="/clinica/cliente/citas" class="btn btn-secondary">Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>
<?php require 'app/views/layouts/dashboardLayout.php'; ?>