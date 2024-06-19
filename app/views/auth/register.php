<?php $title = "Registrar"; ?>
<?php ob_start(); ?>

<h2 class="text-center">Registrarse</h2>
<form action="<?= APP_NAME ?>create" method="post">

    <div class="row">
        <div class="col-md-6">
            <!-- Nambe -->
            <div class="form-group mb-2">
                <label for="name">Nombre completo: </label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <!-- fecha de nacimiento -->
            <div class="form-group mb-2">
                <label for="fechaNacimiento">Fecha de nacimiento: </label>
                <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required>
            </div>

            <!-- dui -->
            <div class="form-group mb-2">
                <label for="dui">DUI:</label>
                <input type="text" name="dui" id="dui" class="form-control" required pattern="[0-9]{8}-[0-9]{1}">
                <small>Ejemplo: 12345678-9</small>
            </div>
        </div>
        <div class="col-md-6">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control" required pattern="[0-9]{4}-[0-9]{4}">
            <small>Ejemplo: 1234-5678</small>

            <!-- Direccion -->
            <div class="form-group mb-2">
                <label for="direccion">Direccion: </label>
                <input type="text" name="direccion" id="direccion" class="form-control" required>
            </div>

        </div>
        <div class="col-md-12">
            <div class="form-group mb-2">
                <label for="condicionesMedicas">¿Posee condiciones medicas? </label>
                <br>
                <label for="no">
                    <input type="radio" name="condicionesMedicas" id="no" value="S"> Si
                </label>
                <label for="si">
                    <input type="radio" name="condicionesMedicas" id="si" value="N"> No
                </label>
            </div>
            <hr>
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
        </div>
    </div>

    <!-- Button -->
    <div class="form-group mb-2">
        <input type="submit" name="btnLogin" id="btnLogin" class="btn btn-primary w-100" value="Registrarse">
    </div>

    <!-- Register -->
    <div class="mb-2">
        <p>
            Ya tienes una cuenta? <a href="<?= APP_NAME ?>" class="btn-link">Iniciar sesion</a>
        </p>
    </div>
</form>

<?php $content = ob_get_clean(); ?>
<?php require 'app/views/layouts/homeLayout.php'; ?>