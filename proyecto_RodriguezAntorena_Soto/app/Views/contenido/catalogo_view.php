<?php if (session('mensajeCompra')) {  
    echo session('mensajeCompra'); 
} ?>
<section class="container-fluid my-5">
  <div class="row">
    <!-- BARRA DE NAVEGACIÓN -->
    <div class="col-md-3">
      <h6 class="mb-3 text-uppercase">CATEGORÍAS</h6>
      <div class="list-group categorias">
        <a href="#collares" class="list-group-item categoria">Collares</a>
        <a href="#aros" class="list-group-item categoria">Aros</a>
        <a href="#otros" class="list-group-item categoria">Otros</a>
      </div>
    </div>

    <!-- CONTENIDO DEL CATÁLOGO -->
    <div class="col-md-9">
      <!-- CATEGORÍA COLLARES -->
      <div id="collares" class="categoria-grid mb-5">
        <h4 class="mb-4 Skorial_Abel">COLLARES</h4>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <?php foreach($producto as $row): ?>
            <?php if($row['producto_categoria'] == '2'): ?>
              <div class="col">
                <div class="card h-100 border-0 rounded-0 hover-zoom">
                  <img src="<?= base_url('assets/upload/'.$row['imagen_producto']); ?>" class="card-img-top" alt="<?= $row['nombre_producto']; ?>">
                  <div class="card-body text-center">
                    <h5 class="card-title"><?= $row['nombre_producto']; ?></h5>
                    <p class="parrafo-precios-card"><?= $row['descripcion']; ?></p>
                    <p class="parrafo-precios-card">$<?= $row['precio_producto']; ?></p>
                    <?php
                      $stock = $row['cantidad_producto'];
                      if ($stock == 0) {
                        echo "<p class='parrafo-precios-card text-danger fw-bold'>Sin stock</p>";
                        } elseif ($stock <= 2) {
                           echo "<p class='parrafo-precios-card text-warning fw-bold'>¡Últimos $stock en stock!</p>";
                          } else {
                            echo "<p class='parrafo-precios-card text-success fw-bold'>Disponible</p>";
                               }
                    ?>

                    <?php if (session('login_session')): ?>
                      <?= form_open('add_carrito'); ?>
                        <?= form_hidden('idProd', $row['id_producto']); ?>
                        <?= form_hidden('nombreProd', $row['nombre_producto']); ?>
                        <?= form_hidden('precioProd', $row['precio_producto']); ?>
                        <?= form_submit('comprar', 'Agregar al carrito', "class='btn btn-dark'"); ?>
                      <?= form_close(); ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- CATEGORÍA AROS -->
      <div id="aros" class="categoria-grid mb-5">
        <h4 class="mb-4 Skorial_Abel">AROS</h4>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <?php foreach($producto as $row): ?>
            <?php if($row['producto_categoria'] == '1'): ?>
              <div class="col">
                <div class="card h-100 border-0 rounded-0 hover-zoom">
                  <img src="<?= base_url('assets/upload/'.$row['imagen_producto']); ?>" class="card-img-top" alt="<?= $row['nombre_producto']; ?>">
                  <div class="card-body text-center">
                    <h5 class="card-title"><?= $row['nombre_producto']; ?></h5>
                    <p class="parrafo-precios-card"><?= $row['descripcion']; ?></p>
                    <p class="parrafo-precios-card">$<?= $row['precio_producto']; ?></p>
                    <?php
                      $stock = $row['cantidad_producto'];
                      if ($stock == 0) {
                        echo "<p class='parrafo-precios-card text-danger fw-bold'>Sin stock</p>";
                        } elseif ($stock <= 2) {
                           echo "<p class='parrafo-precios-card text-warning fw-bold'>¡Últimos $stock en stock!</p>";
                          } else {
                            echo "<p class='parrafo-precios-card text-success fw-bold'>Disponible</p>";
                               }
                    ?>

                    <?php if (session('login_session')): ?>
                      <?= form_open('add_carrito'); ?>
                        <?= form_hidden('idProd', $row['id_producto']); ?>
                        <?= form_hidden('nombreProd', $row['nombre_producto']); ?>
                        <?= form_hidden('precioProd', $row['precio_producto']); ?>
                        <?= form_submit('comprar', 'Agregar al carrito', "class='btn btn-dark'"); ?>
                      <?= form_close(); ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- CATEGORÍA OTROS -->
      <div id="otros" class="categoria-grid mb-5">
        <h4 class="mb-4 Skorial_Abel">OTROS</h4>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <?php foreach($producto as $row): ?>
            <?php if($row['producto_categoria'] == '3'): ?>
              <div class="col">
                <div class="card h-100 border-0 rounded-0 hover-zoom">
                  <img src="<?= base_url('assets/upload/'.$row['imagen_producto']); ?>" class="card-img-top" alt="<?= $row['nombre_producto']; ?>">
                  <div class="card-body text-center">
                    <h5 class="card-title"><?= $row['nombre_producto']; ?></h5>
                    <p class="parrafo-precios-card"><?= $row['descripcion']; ?></p>
                    <p class="parrafo-precios-card">$<?= $row['precio_producto']; ?></p>
                    <?php
                      $stock = $row['cantidad_producto'];
                      if ($stock == 0) {
                        echo "<p class='parrafo-precios-card text-danger fw-bold'>Sin stock</p>";
                        } elseif ($stock <= 2) {
                           echo "<p class='parrafo-precios-card text-warning fw-bold'>¡Últimos $stock en stock!</p>";
                          } else {
                            echo "<p class='parrafo-precios-card text-success fw-bold'>Disponible</p>";
                               }
                    ?>

                    <?php if (session('login_session')): ?>
                      <?= form_open('add_carrito'); ?>
                        <?= form_hidden('idProd', $row['id_producto']); ?>
                        <?= form_hidden('nombreProd', $row['nombre_producto']); ?>
                        <?= form_hidden('precioProd', $row['precio_producto']); ?>
                        <?= form_submit('comprar', 'Agregar al carrito', "class='btn btn-dark'"); ?>
                      <?= form_close(); ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div> <!-- Fin col-md-9 -->
  </div> <!-- Fin row -->
</section>



 
       