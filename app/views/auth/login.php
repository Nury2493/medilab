<?php $title = "Iniciar sesion"; ?>
<?php ob_start(); ?>

<h2 class="text-center">Iniciar sesion</h2>
<form action="<?= APP_NAME ?>login" method="post">

    <!-- Email -->
    <div class="form-group mb-2">
        <label for="email">Correo: </label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>

    <!-- Password -->
    <div class="form-group mb-2">
        <label for="password">Contraseña: </label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>

    <!-- Button -->
    <div class="form-group mb-2">
        <input type="submit" name="btnLogin" id="btnLogin" class="btn btn-primary w-100" value="Iniciar sesion">
    </div>

    <!-- Register -->
    <div class="mb-2">
        <p>
            No tienes una cuenta? <a href="<?= APP_NAME ?>register" class="btn-link">Registrarse</a>
        </p>
    </div>
</form>

<?php $content = ob_get_clean(); ?>
<?php require 'app/views/layouts/homeLayout.php'; ?>