<h3 class="mb-3 text-uppercase Skorial_Abel w-20px  pt-3 pb-3 text-center">LISTA DE VENTAS </h3>
<div class="container">
  <table id="mytable" class="table table-bordred table-striped table-hover">
    <thead>
      <th>Fecha</th>
      <th>Forma de Pago</th>
      <th>Envio</th>
      <th>Total</th>
      <th>Accion</th>
    </thead>
    <tbody>
      <?php foreach($venta as $row) { ?>
        <tr>
          <td><?php echo $row['fecha_venta']; ?></td>
           <td>
            <?php
              if ($row['forma_pago_venta'] == 1) {
                echo "Mercado Pago";
              } else {
                echo "Tarjeta Débito/Crédito";
              }
            ?>
          </td>
           <td>
            <?php
              if ($row['envio_venta'] == 1) {
                echo "Con envío";
              } else {
                echo "Sin envío";
              }
            ?>
          </td>
         
          <td><?php echo $row['total_venta']; ?></td>
          <td>
          <td>
              <a class="btn btn-dark" href="<?= base_url('detalle_venta/' . $row['id_venta']); ?>">Ver Detalle</a>
            </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>