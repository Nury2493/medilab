<?php $title = "Servicios"; ?>
<?php ob_start(); ?>

<div class="card mt-3">
    <h5 class="card-header">Servicios</h5>
    <div class="card-body">
        <a href="/clinica/servicios/new" class="btn btn-success mb-3">
            <i class="fas fa-plus"></i>
            Agregar
        </a>
        <div class="table-responsive" style="max-height: 400px;">
            <table id="miTabla" class="table text-nowrap mb-0 align-middle table-striped table-bordered">
                <thead class="text-dark fs-4 bg-white" style="position: sticky; top:0">
                    <tr>
                        <th class="border-bottom-0">
                            <b>Nombre</b>
                        </th>
                        <th class="border-bottom-0">
                            <b>Descripción</b>
                        </th>
                        <th class="border-bottom-0">
                            <b>Precio</b>
                        </th>
                        <th>
                            <b>Acciones</b>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (sizeof($servicios) <= 0) : ?>
                        <tr>
                            <td class="border-bottom-0 text-center" colspan="4">
                                No hay registros
                            </td>
                        </tr>
                    <?php endif; ?>

                    <?php foreach ($servicios as $servicio) : ?>
                        <tr>
                            <td class="border-bottom-0">
                                <?= $servicio->nombre ?>
                            </td>
                            <td class="border-bottom-0">
                                <?= $servicio->descripcion ?>
                            </td>
                            <td class="border-bottom-0">
                                $ <?= $servicio->precio ?>
                            </td>
                            <th class="text-center">
                                <a href="/clinica/servicios/edit?id=<?= $servicio->servicio_id ?>" class="btn btn-primary">Actualizar</a>
                                <button onclick="Delete(<?= $servicio->servicio_id ?>)" class="btn btn-danger">Eliminar</button>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    const Delete = (id) => {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "/clinica/servicios/delete?id=" + id;
            }
        });
    }
</script>

<?php $content = ob_get_clean(); ?>
<?php require 'app/views/layouts/dashboardLayout.php'; ?>