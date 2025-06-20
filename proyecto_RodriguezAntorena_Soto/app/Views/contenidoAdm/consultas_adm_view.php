<h3 class="mb-3 text-uppercase Skorial_Abel w-20px text-center mt-3 pt-3">LISTA DE CONSULTAS </h3>
<div class="container">
  <form method="get" action="<?= base_url('lista_consultas') ?>" class="row mb-4">
  <div class="col-auto">
    <label for="fecha" class="col-form-label">Buscar por fecha:</label>
  </div>
  <div class="col-auto">
    <input type="date" id="fecha" name="fecha" class="form-control" value="<?= esc($fecha) ?>">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-success">Buscar</button>
  </div>
  <div class="col-auto">
    <a href="<?= base_url('lista_consultas') ?>" class="btn btn-secondary">Ver todas</a>
  </div>
</form>
  <table id="mytable" class="table table-bordred table-striped table-hover">
    <thead>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Motivo</th>
      <th>Consulta</th>
      <th>Fecha</th> 
    </thead>
    <tbody>
      <?php foreach($consulta as $row) { ?>
        <tr>
          <td><?php echo $row['nombre_consultas']; ?></td>
          <td><?php echo $row['correo_consultas']; ?></td>
          <td><?php echo $row['motivo_consultas']; ?></td>
          <td><?php echo $row['texto_consultas']; ?></td>
           <td><?php echo $row['fecha_consultas']; ?></td> 
          <td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>