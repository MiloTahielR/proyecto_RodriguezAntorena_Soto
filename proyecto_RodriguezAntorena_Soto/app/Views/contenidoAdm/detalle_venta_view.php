<h3 class="mb-3 text-uppercase Skorial_Abel w-20px text-center mt-3 pt-3">DETALLE DE VENTA</h3>
<div class="container">

    <div class="mb-4">
        <p><strong>Fecha de venta:</strong> <?= esc($venta['fecha_venta']) ?></p>
        <p><strong>Forma de pago:</strong>
            <?= $venta['forma_pago_venta'] == 1 ? 'Mercado Pago' : 'Tarjeta Débito/Crédito' ?>
        </p>
        <p><strong>Envío:</strong>
            <?= $venta['envio_venta'] == 1 ? 'Con envío' : 'Sin envío' ?>
        </p>
        <p><strong>Total:</strong> $<?= esc($venta['total_venta']) ?></p>
    </div>

    <h5>LISTA DE PRODUCTOS</h5>
    <table class="table table-bordred table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Precio Unitario</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                foreach ($detalles as $item): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= esc($item['nombre_producto']) ?></td>
                    <td>$<?= esc($item['precio_detalle']) ?></td>
                    <td><?= esc($item['cantidad_detalle']) ?></td>
                    <td>$<?= esc($item['precio_detalle'] * $item['cantidad_detalle']) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <a href="<?= base_url('lista_ventas') ?>" class="btn btn-dark mt-3">Volver</a>
</div>