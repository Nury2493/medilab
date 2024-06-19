<?php $title = "Iniciar sesión"; ?>
<?php ob_start(); ?>

<div class="section mb-4" id="servicio">
    <div class="container">
        <div class="row">

            <!-- Servicios -->
            <div class="col-md-12 bg-dark text-white p-5">
                <h3 class="text-white text-center mb-4">SERVICIOS Y COMBOS</h3>
                <div class="table-responsive" style="max-height: 600px;">
                    <div class="row justify-content-center">
                        <?php foreach ($servicios as $servicio) : ?>
                            <div class="col-md-3 mb-4">
                                <div class="card h-100 align-items-stretch">
                                    <div class="card-body">
                                        <h5 class="card-title text-center text-black"><?= $servicio->nombre ?></h5>
                                        <p class="card-text text-justify text-black"><?= $servicio->descripcion ?></p>
                                        <p class="card-text text-justify text-black">Precio: $<?= $servicio->precio ?></p>
                                    </div>
                                    <div class="card-footer d-flex justify-content-center">
                                        <form method="post" action="<?= APP_NAME ?>carrito/add">
                                            <input type="hidden" name="servicio_id" value="<?= $servicio->servicio_id ?>">
                                            <input type="hidden" name="cantidad" value="1">
                                            <input type="submit" class="btn btn-sm btn-primary" value="Agregar al carrito">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <?php if ($currentPage > 1) : ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= APP_NAME ?>?page=<?= $currentPage - 1 ?>">Anterior</a>
                                </li>
                            <?php endif; ?>
                            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                                <li class="page-item <?= $i == $currentPage ? 'active' : '' ?>">
                                    <a class="page-link" href="<?= APP_NAME ?>?page=<?= $i ?>"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>
                            <?php if ($currentPage < $totalPages) : ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= APP_NAME ?>?page=<?= $currentPage + 1 ?>">Siguiente</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="section mb-4" id="nosotros">
    <div class="container">
        <div class="row">
            <div class="col-md-6 bg-dark text-white p-5">
                <h3 class="text-white">Misión</h3>
                <hr>
                <p class="lead">Proporcionar servicios de diagnóstico de alta calidad y precisión, contribuyendo a la mejora de la salud y el bienestar de nuestros pacientes.</p>
                <p class="lead">Nos comprometemos a utilizar tecnología de vanguardia, mantener altos estándares éticos y ofrecer un servicio centrado en el paciente.</p>
            </div>
            <div class="col-md-6 bg-dark text-white p-5">
                <h3 class="text-white">Visión</h3>
                <hr>
                <p class="lead">Ser reconocidos como líderes en el campo de la medicina diagnóstica, distinguiéndonos por nuestra precisión, confiabilidad y compromiso con la innovación.</p>
                <p class="lead">Aspiramos a ser un laboratorio que contribuya de manera significativa a la mejora de los resultados clínicos y la calidad de vida de los pacientes.</p>
            </div>

            <!-- Horarios -->
            <div class="col-md-12 mb-2 mt-4">
                <h3 class="mb-3">Nuestros horarios</h3>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold fs-5">Lunes a Viernes</div>
                        </div>
                        <span class="badge bg-primary rounded-pill fs-5">06:00 AM - 01:00 PM</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold fs-5">Sábado</div>
                        </div>
                        <span class="badge bg-primary rounded-pill fs-5">06:00 AM - 03:00 PM</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold fs-5">Domingo</div>
                        </div>
                        <span class="badge bg-primary rounded-pill fs-5">06:00 AM - 12:00 PM</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="whatsapp-container">
    <a href="https://api.whatsapp.com/send?phone=50360768886" target="_blank" class="btn btn-success btn-lg rounded-circle whatsapp-button">
        <i class="fa fa-whatsapp"></i>
    </a>
</div>

<style>
    .whatsapp-container {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 75px;
        height: 75px;
    }

    .whatsapp-button {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #25D366;
        color: white;
        border-radius: 50%;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    }

    .whatsapp-button:hover {
        background-color: #128C7E;
        text-decoration: none;
        color: white;
    }

    .whatsapp-button i {
        font-size: 2.5rem;
    }

    .lead {
        font-size: 1.2rem;
    }

    .fs-5 {
        font-size: 1.1rem;
    }

    .card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        color: white;
        /* Color del texto dentro de las tarjetas */
    }

    .card-body {
        flex-grow: 1;
        /* Para que el cuerpo de la tarjeta ocupe todo el espacio disponible */

    }
</style>

<?php $content = ob_get_clean(); ?>
<?php require 'app/views/layouts/baseLayout.php'; ?>