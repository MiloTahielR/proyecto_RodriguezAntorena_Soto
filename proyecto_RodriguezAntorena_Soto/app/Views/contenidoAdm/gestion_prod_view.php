<?php if (session('mensajeActualizar')) {  
    echo session('mensajeActualizar'); 
} ?>

<h3 class="mb-3 text-uppercase Skorial_Abel w-20px text-center pt-5 pb-5">GESTION DE PRODUCTOS </h3>
<div class="container">

<form method="get" action="<?= base_url('gestionar') ?>" class="row mb-4">
  <div class="col-auto">
    <label for="nombreProd" class="col-form-label">Buscar por Nombre/Categoría:</label>
  </div>
  <div class="col-auto">
    <input type="text" id="nombreProd" name="nombreProd" class="form-control" value="<?= esc($nombreProd) ?>">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-success">Buscar</button>
  </div>
  <div class="col-auto">
    <a href="<?= base_url('gestionar') ?>" class="btn btn-secondary">Ver todas</a>
  </div>
</form>

  <table id="mytable" class="table table-bordred table-striped table-hover">
    <thead>
      <th>Titulo</th>
      <th>Cantidad</th>
      <th>Precio</th>
      <th>Disponibilidad</th>
      <th>Categoria</th>
      <th>Descripcion</th>
      <th>Imagen</th>
      <th>Editar</th>
      <th>Activar/Eliminar</th>
    </thead>
    <tbody>
      <?php foreach($producto as $row) { ?>
        <tr>
          <td><?php echo $row['nombre_producto']; ?></td>
          <td><?php echo $row['cantidad_producto']; ?></td>
          <td><?php echo $row['precio_producto']; ?></td>
          <td>
            <?= ($row['disponibilidad_producto'] == 'true') ? 'Disponible' : 'No disponible'; ?>
          </td>
          <td><?php
              switch ($row['producto_categoria']) {
              case 1: echo 'Aros'; break;
               case 2: echo 'Collares'; break;
              case 3: echo 'Otros'; break;
             }?>
          </td>
          <td><?php echo $row['descripcion']; ?></td>
          <td>
          
            <img src="<?php echo base_url('assets/upload/'.$row['imagen_producto']); ?>" alt="" height="100" width="100"/>
          </td>
          <td>
            <a class="btn btn-success" href="<?php echo base_url('editar/'.$row['id_producto']); ?>">Editar</a>
          </td>
          <?php if($row['disponibilidad_producto'] == 'true') { ?>
            <td>
              <a class="btn btn-danger" href="<?php echo base_url('eliminar/'.$row['id_producto']); ?>">Eliminar</a>
            </td>
          <?php } else { ?>
            <td>
              <a class="btn btn-danger" href="<?php echo base_url('activar/'.$row['id_producto']); ?>">Activar</a>
            </td>
          <?php } ?>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>