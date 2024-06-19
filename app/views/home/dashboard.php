<?php $title = "Iniciar sesion"; ?>
<?php ob_start(); ?>

<h1>Home</h1>

<?php $content = ob_get_clean(); ?>
<?php require 'app/views/layouts/dashboardLayout.php'; ?>