<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clinica | <?= $title ?></title>

    <link rel="stylesheet" href="/public/css/wa.css">
    <link rel="stylesheet" href="<?= APP_NAME ?>/public/css/styles.min.css" />
    <link rel="shortcut icon" href="<?= APP_NAME ?>/public/img/clinica.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .section {
            height: 100%;
            min-height: 100vh;
            padding-top: 70px;
        }

        .home-section {
            width: 100%;
            height: 100vh;
            background: url("http://localhost/clinica/public/img/fondo.jpg") no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 3rem;
            position: relative;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark" style="position: sticky; top: 0; z-index: 10">
        <div class="container">
            <a class="navbar-brand" href="/clinica/">Analysis</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/clinica/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/clinica/#servicio">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/clinica/#nosotros">Nosotros</a>
                    </li>
                    <a class="nav-link position-relative" aria-current="page" href="/clinica/carrito">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge badge-pill bg-danger badge-danger rounded-pill position-absolute top-3 start-100 translate-middle fs-1">
                            <?= (isset($_SESSION["carrito"])) ? sizeof($_SESSION["carrito"]) : 0 ?>
                        </span>
                    </a>
                </ul>
                <div class="menu">
                    <?php if (isset($_SESSION['user'])) : ?>
                        <a href="/clinica/dashboard" class="text-white fw-bold">
                            <?= $_SESSION['user']["nombre"] ?>
                        </a>
                    <?php else : ?>
                        <a href="/clinica/auth/login" class="btn btn-primary">Iniciar sesión</a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </nav>

    <div class="home-section" id="inicio">
        <div class="container text-center">
            <span class="text-primary">Analysis Lab Medic</span>, donde encuentras los resultados en los que puedes
            confiar
        </div>
    </div>

    

    <!--  Body Wrapper -->
    <div class="container">
        <?= $content ?>
    </div>

    <footer class="bg-dark text-white p-3" style="position: sticky; bottom: 0; z-index: 10">
        <div class="container">
            <div class="text-center">Analysis Lab Medic - 2024</div>
        </div>
    </footer>

    <!-- JS BOOTSTRAP 5.3 -->
    <script src="<?= APP_NAME ?>/public/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= APP_NAME ?>/public/js/helpers.js"></script>
    <script src="<?= APP_NAME ?>/public/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Incluye SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        <?php
        $toastType = $_GET['toastType'] ?? $toastType;
        $toastMessage = $_GET['toastMessage'] ?? $toastMessage;
        if (isset($toastType)) :
        ?>
            showToast("<?php echo $toastType; ?>", "<?php echo $toastMessage; ?>");

            history.replaceState({}, document.title, window.location.pathname);
        <?php
        endif;
        ?>
    </script>
</body>

</html>