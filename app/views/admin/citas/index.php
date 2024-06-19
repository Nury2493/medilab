<?php $title = "Citas"; ?>
<?php ob_start(); ?>

<div class="card mt-3">
    <h5 class="card-header">Citas</h5>
    <div class="card-body">
        <a href="/clinica/admin/cita/new" class="btn btn-success mb-3">
            <i class="fas fa-plus"></i>
            Crear cita
        </a>
        <a href="/clinica/admin/cita/export" target="_blank" class="btn btn-secondary mb-3">
            <i class="fas fa-file"></i>
            Exportar
        </a>
        <div class="table-responsive" style="max-height: 400px;">
            <table id="miTabla" class="table text-nowrap mb-0 align-middle table-striped table-bordered">
                <thead class="text-dark fs-4 bg-white" style="position: sticky; top:0">
                    <tr>
                        <th class="border-bottom-0">
                            <b>Cliente</b>
                        </th>
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
                            <td class="border-bottom-0 text-center" colspan="5">
                                No hay registros
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php foreach ($citas as $cita) : ?>
                        <tr>
                            <td class="border-bottom-0">
                                <?= $cita->cliente ?>
                            </td>
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
                                <a href="/clinica/admin/cita/edit?id=<?= $cita->cita_id ?>" class="btn btn-primary">Actualizar</a>
                                <button type="button" onclick="loadResultados(<?= $cita->cita_id ?>)" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#resultadoModal">
                                    Resultados
                                </button>
                                <button type="button" onclick="loadUserInfo(<?= $cita->cliente_id ?>)" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#usuarioInfoModal">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card mt-3">
    <h5 class="card-header">Analisís de citas</h5>
    <div class="card-body">
        <!-- Grafico -->
        <canvas id="myChart" width="300" height="50"></canvas>
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
                <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#agregarModal">
                    Agregar resultado
                </button>
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

<!-- MODALS -->
<div class="modal fade" id="usuarioInfoModal" tabindex="-1" aria-labelledby="resultadoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="usuarioInfoModalLabel">Información usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul id="user-info">

                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- ADD RESULT MODAL -->
<div class="modal fade" id="agregarModal" tabindex="-1" aria-labelledby="agregarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarModalLabel">Agregar resultado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/clinica/admin/resultados/uploadResultado" id="resultadosForm" method="post" enctype="multipart/form-data">
                    <input type="hidden" readonly class="form-control mb-2" id="citaId" name="citaId" required>
                    <div class="form-group mb-2">
                        <label for="nombre">Nombre: </label>
                        <input type="text" class="form-control mb-2" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="file">Archivo: </label>
                        <input type="file" class="form-control mb-2" id="file" name="file" accept=".pdf" required>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnAdd">Agregar</button>
                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    fetch('/clinica/admin/serviciosPorCitas')
        .then(response => response.json())
        .then(data => {
            // Obtener los datos de la respuesta
            const servicios = data.data.map(item => item.servicio);
            const cantidadCitas = data.data.map(item => parseInt(item.cantidadCitas));

            // Crear el contexto del gráfico
            const ctx = document.getElementById('myChart').getContext('2d');

            // Configurar el gráfico de barras
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: servicios,
                    datasets: [{
                        label: 'Cantidad de Citas',
                        data: cantidadCitas,
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        })
        .catch(error => {
            console.error('Error al obtener los datos:', error);
        });
</script>

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
                window.location.href = "/clinica/admin/resultados/eliminar?id=" + id;
            }
        });
    }

    const loadIdNewCita = (id) => {
        let inputCita = document.getElementById("citaId");
        inputCita.value = id;
    }

    const loadResultados = async (id) => {

        loadIdNewCita(id);

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
                                                         <button id="btnDelete${resultado.idResultado}" class="btn btn-danger">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                     </td>
                                                   </tr>`;

                        document.getElementById(`btnDelete${resultado.idResultado}`).addEventListener("click", () => {
                            Delete(resultado.idResultado);
                        });
                    });


                }
            });
    }

    const loadUserInfo = async (id) => {
        console.log(id);
        await fetch("/clinica/user?id=" + id)
            .then(response => response.json())
            .then(resultados => {
                console.log(resultados);

                // Obtener el elemento ul donde se mostrará la información del usuario
                const userInfoList = document.getElementById("user-info");

                userInfoList.innerHTML = "";

                const {
                    nombre,
                    email,
                    Direccion,
                    Telefono,
                    CondicionesMedicas
                } = resultados.data;

                const userData = [{
                        propiedad: "Nombre",
                        valor: nombre ?? "No propocionado"
                    },
                    {
                        propiedad: "Email",
                        valor: email ?? "No propocionado"
                    },
                    {
                        propiedad: "Dirección",
                        valor: Direccion ?? "No propocionado"
                    },
                    {
                        propiedad: "Teléfono",
                        valor: Telefono ?? "No propocionado"
                    },
                    {
                        propiedad: "Condiciones Médicas",
                        valor: CondicionesMedicas == 'N' ? "No" : "Si"
                    }
                ];

                userData.forEach(({
                    propiedad,
                    valor
                }) => {
                    // Crear elemento li
                    const listItem = document.createElement("li");


                    listItem.innerHTML = `<b>${propiedad}</b>: ${valor}`;

                    // Agregar el elemento li al ul
                    userInfoList.appendChild(listItem);
                });
            });
    }
</script>

<?php $content = ob_get_clean(); ?>
<?php require 'app/views/layouts/dashboardLayout.php'; ?>