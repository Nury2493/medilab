<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica | <?= $title ?></title>

    <link rel="stylesheet" href="<?= APP_NAME ?>/public/css/styles.min.css">
    <link rel="shortcut icon" href="<?= APP_NAME ?>/public/img/clinica.png" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
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
                </ul>
            </div>
        </div>
    </nav>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <?= $content ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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