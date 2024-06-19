<?php $title = "Citas"; ?>
<?php ob_start(); ?>

<div class="card mt-3">
    <h5 class="card-header">Actualizar cita</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <form action="/clinica/admin/cita/update" method="post">



                    <!-- ID_CITA  -->
                    <input type="hidden" name="cita_id" value="<?= $cita->cita_id ?>">
                    <input type="hidden" name="cliente" value="<?= $cita->cliente_id ?>">


                    <!-- Servicio -->
                    <div class="form-control mb-2">
                        <label for="nombre">
                            <b>Servicio</b>
                        </label>
                        <?php foreach ($servicios as $servicio) : ?>
                            <?php if ($servicio->servicio_id == $cita->servicio_id) : ?>
                                <input type="hidden" name="servicio" value="<?= $servicio->servicio_id ?>">
                                <input type="text" class="form-control" readonly name="servicioNombre" value="<?= $servicio->nombre ?>">
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>

                    <!-- Fecha -->
                    <div class="form-control mb-2">
                        <label for="fechahora">
                            <b>Fecha y hora</b>
                        </label>
                        <input disbaled readonly type="datetime-local" value="<?= $cita->fecha_hora ?>" name="fechahora" id="fechahora" class="form-control">
                    </div>

                    <!-- Estado -->
                    <div class="form-control mb-2">
                        <label for="estado">
                            <b>Estado</b>
                        </label>
                        <select class="form-control" name="estado" id="estado">
                            <option value="">Seleccionar ...</option>
                            <?php foreach ($estados as $key => $value) : ?>
                                <?php if ($value == $cita->estado) : ?>
                                    <option selected value="<?= $key ?>"><?= $value ?></option>
                                <?php else : ?>
                                    <option value="<?= $key ?>"><?= $value ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Actualizar btn -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 d-flex" style="gap: 5px;">
                                    <input type="submit" value="Actualizar" class="btn btn-primary">
                                    <a href="/clinica/admin/citas" class="btn btn-secondary">Regresar</a>
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