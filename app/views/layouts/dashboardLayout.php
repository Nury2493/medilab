<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica | <?= $title ?></title>

    <link rel="stylesheet" href="<?= APP_NAME ?>/public/css/styles.min.css">
    <link rel="stylesheet" href="<?= APP_NAME ?>/public/css/dashboard.css">
    <link rel="shortcut icon" href="<?= APP_NAME ?>/public/img/clinica.png" type="image/x-icon">

    <!-- CDN DEPENDENCIES -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="#" class="text-nowrap">
                        <img src="<?= APP_NAME ?>/public/img/clinica.png" alt="" class="img-fluid" style="max-width: 20px;">
                        Laboratorio
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="" id="boundary-element">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= APP_NAME ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Menu</span>
                        </li>

                        <!-- Menu -->
                        <?php if ($_SESSION['rol']->nombre == "Administrador") : ?>

                            <!-- Citas -->
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="/clinica/admin/citas">
                                    <span>
                                        <i class="ti ti-folder"></i>
                                    </span>
                                    <span class="hide-menu">Citas</span>
                                </a>
                            </li>

                            <!-- Servicios -->
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="/clinica/servicios">
                                    <span>
                                        <i class="ti ti-folder"></i>
                                    </span>
                                    <span class="hide-menu">Servicios</span>
                                </a>
                            </li>

                        <?php endif; ?>

                        <?php if ($_SESSION['rol']->nombre == "Cliente") : ?>

                            <!-- Citas -->
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="/clinica/cliente/citas">
                                    <span>
                                        <i class="ti ti-folder"></i>
                                    </span>
                                    <span class="hide-menu">Citas</span>
                                </a>
                            </li>

                        <?php endif; ?>
                        <!-- Fin menu -->

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item d-none d-xl-block">
                            <h3>Clinica</h3>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item">
                                <?= $_SESSION['user']["nombre"] ?>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= APP_NAME ?>/public/img/clinica.png" alt="" width="35" height="35" class="rounded-circle">
                                </a>

                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="message-body" style="position: relative">
                                        <form action="<?= APP_NAME ?>logout" method="POST">
                                            <input type="submit" value="Cerrar session" class="btn btn-outline-primary mx-3 mt-2 d-block">
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div style="padding:20px;padding-top: 80px;">
                <?= $content ?>
            </div>
        </div>
    </div>



    <!-- JS BOOTSTRAP 5.3 -->
    <script src="<?= APP_NAME ?>/public/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= APP_NAME ?>/public/js/helpers.js"></script>
    <script src="<?= APP_NAME ?>/public/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= APP_NAME ?>/public/js/sidebarmenu.js"></script>
    <script src="<?= APP_NAME ?>/public/js/app.min.js"></script>
    <script src="<?= APP_NAME ?>/public/libs/simplebar/dist/simplebar.js"></script>

    <!-- Incluye SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.select').select2();
        });

        <?php

        $toastType = $_GET['toastType'] ?? "";
        $toastMessage = $_GET['toastMessage'] ?? "";

        if (isset($toastType) &&  $toastType != "") :

        ?>

            showToast("<?php echo $toastType; ?>", "<?php echo $toastMessage; ?>");

            history.replaceState({}, document.title, window.location.pathname);
        <?php
        endif;
        ?>
    </script>

</body>

</html>