<?php $title = "Citas"; ?>
<?php ob_start(); ?>

<div class="card mt-3">
    <h5 class="card-header">Citas</h5>
    <div class="card-body">
        <a href="/clinica/cliente/cita/new" class="btn btn-success mb-3">
            <i class="fas fa-plus"></i>
            Crear cita
        </a>
        <div class="table-responsive" style="max-height: 400px;">
            <table id="miTabla" class="table text-nowrap mb-0 align-middle table-striped table-bordered">
                <thead class="text-dark fs-4 bg-white" style="position: sticky; top:0">
                    <tr>
                        <th class="border-bottom-0">
                            <b>Servicio</b>
                        </th>
                        <th class="border-bottom-0">
                            <b>Fecha y hora</b>
                        </th>
                        <th class="border-bottom-0">
                            <b>Estado</b>
                        </th>
                        <th>
                            <b>Acciones</b>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (sizeof($citas) <= 0) : ?>
                        <tr>
                            <td class="border-bottom-0 text-center" colspan="4">
                                No hay registros
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php foreach ($citas as $cita) : ?>
                        <tr>
                            <td class="border-bottom-0">
                                <?= $cita->servicio ?>
                            </td>
                            <td class="border-bottom-0">
                                <?= $cita->fecha_hora ?>
                            </td>
                            <td class="border-bottom-0">
                                <?= strtoupper($cita->estado) ?>
                            </td>
                            <th class="text-center">
                                <a href="/clinica/cliente/cita/edit?id=<?= $cita->cita_id ?>" class="btn btn-primary">Actualizar</a>
                                <button onclick="Delete(<?= $cita->cita_id ?>)" class="btn btn-danger">Eliminar</button>
                                <button type="button" onclick="loadResultados(<?= $cita->cita_id ?>)" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#resultadoModal">
                                    Resultados
                                </button>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- MODALS -->
<div class="modal fade" id="resultadoModal" tabindex="-1" aria-labelledby="resultadoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="resultadoModalLabel">Resultados</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>

                            <th>
                                <b>Archivo</b>
                            </th>
                            <th>
                                <b>Accion</b>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="resultadoBody">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
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
                window.location.href = "/clinica/cliente/cita/delete?id=" + id;
            }
        });
    }

    const loadResultados = async (id) => {

        const resultadoBody = document.getElementById("resultadoBody");

        resultadoBody.innerHTML = "";

        await fetch("/clinica/admin/resultados?id=" + id)
            .then(response => response.json())
            .then(resultados => {
                if (resultados.data.length == 0) {
                    resultadoBody.innerHTML = `<tr class="text-center">
                                            <td colspan="3">Sin resultados</td>
                                        </tr>`;
                    return null;
                } else {
                    resultados.data.forEach(resultado => {
                        resultadoBody.innerHTML += `<tr class="text-center">
                                             <td>
                                                ${resultado.nombreArchivo}
                                             </td>
                                             <td>
                                                <a href="<?= APP_NAME ?>${resultado.url}" class="btn btn-primary" target="_blank">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                             </td>
                                           </tr>`;
                    });
                }
            });
    }
</script>

<?php $content = ob_get_clean(); ?>
<?php require 'app/views/layouts/dashboardLayout.php'; ?>