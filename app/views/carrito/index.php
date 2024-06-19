<?php $title = "Iniciar sesion"; ?>
<?php ob_start(); ?>

<div class="container mt-5">
    <h1>Carrito de Compras</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Servicio</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (sizeof($carrito) <= 0) : ?>
                <tr>
                    <td class="border-bottom-0 text-center" colspan="5">
                        No hay servicios agregados
                    </td>
                </tr>
            <?php endif; ?>
            <?php foreach ($carrito as $item) : ?>
                <tr>
                    <td><?= $item['servicio']->nombre; ?></td>
                    <td><?= $item['cantidad']; ?></td>
                    <td>$ <?= $item['servicio']->precio; ?></td>
                    <td>$ <?= $item['servicio']->precio * $item['cantidad']; ?></td>
                    <td>
                        <a href="/clinica/carrito/remove?servicio_id=<?= $item['servicio']->servicio_id; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php if (isset($_SESSION['user'])) : ?>
        <a href="/clinica/dashboard" class="text-white fw-bold">
            <a href="/clinica/carrito/checkout" class="btn btn-primary">Proceder las citas</a>
        </a>
    <?php else : ?>
        <a href="/clinica/auth/login" class="btn btn-warning">Debe iniciar sesión</a>
    <?php endif; ?>

</div>

<?php $content = ob_get_clean(); ?>
<?php require 'app/views/layouts/carritoLayout.php'; ?>