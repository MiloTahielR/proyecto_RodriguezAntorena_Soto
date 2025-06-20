  
  <h3 class=" text-uppercase Skorial_Abel w-20px text-center pt-5 pb-5">LISTA DE PRODUCTOS </h3>
<div class="container">
  <table id="mytable" class="table table-bordred table-striped table-hover">
    <thead>
      <th>Titulo</th>
      <th>Cantidad</th>
      <th>Precio</th>
      <th>Categoria</th>
      <th>Descripcion</th>
      <th>Imagen</th>

    </thead>
    <tbody>
      <?php foreach($producto as $row) { ?>
        <tr>
          <td><?php echo $row['nombre_producto']; ?></td>
          <td><?php echo $row['cantidad_producto']; ?></td>
          <td><?php echo $row['precio_producto']; ?></td>

          <td><?php echo $row['producto_categoria']; ?></td>
          <td><?php echo $row['descripcion']; ?></td>
          <td>
          
            <img src="<?php echo base_url('assets/upload/'.$row['imagen_producto']); ?>" alt="" height="100" width="100"/>
          </td>

        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

  