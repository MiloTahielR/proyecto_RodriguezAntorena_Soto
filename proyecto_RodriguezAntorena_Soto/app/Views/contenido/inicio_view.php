<div class="mt-3"> <!-- Carrousel comienza -->

<div id="carouselExampleIndicators" class="carousel slide"  data-bs-ride="carousel" data-bs-interval="4000">
<div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="<?php echo base_url('assets/img/tallerSKRLBanner (3).png') ; ?>" class="d-block w-100 h-50" alt="...">
  </div>
  <div class="carousel-item">
    <img src="<?php echo base_url('assets/img/tallerSKRLBanner (2).png ') ; ?>" class="d-block w-100 h-50" alt="...">
  </div>
  <div class="carousel-item">
    <img src="<?php echo base_url('assets/img/tallerSKRLBanner (4).png') ; ?>" class="d-block w-100 h-50" alt="...">
  </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>

</div><!-- Carrousel finaliza -->
<div class="container py-5">

    <!-- SECCIÓN NUEVA COLECCIÓN -->
    <h3 class="text-center mb-4 Skorial_Abel">NUEVA COLECCIÓN 2025</h2>


<div class="row g-4">
  <?php foreach($producto as $row): ?>
    <div class="col-md-4">
      <div class="card h-100 border-0 rounded-0">
        <img src="<?= base_url('assets/upload/'.$row['imagen_producto']) ?>" class="card-img-top hover-zoom" alt="<?= esc($row['nombre_producto']) ?>">
        <div class="card-body p-0 text-center">
          <h5 class="card-title w-100 p-0"><?= esc($row['nombre_producto']) ?></h5>
          <a href="<?= base_url('lista_catalogo') ?>" class="btn btn-dark rounded-0 mt-2">Ver más</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>


    <!-- SECCIÓN NUESTROS PRODUCTOS -->
<h3 class="text-center my-5 Skorial_Abel">NUESTROS PRODUCTOS</h3>
<div class="row g-4">
  <!-- AROS -->
  <div class="col-md-4">
    <?php if (!empty($producto_aros)): ?>
      <div class="card h-100 border-0 rounded-0">
        <img src="<?= base_url('assets/upload/'.$producto_aros['imagen_producto']) ?>" class="card-img-top hover-zoom" alt="<?= esc($producto_aros['nombre_producto']) ?>">
        <div class="card-body text-center">
          <h5 class="card-title text-decoration-none">Aros</h5>
          <p class="parrafo-precios-card"><?= esc($producto_aros['nombre_producto']) ?></p>
          <a href="<?= base_url('lista_catalogo#aros') ?>" class="btn btn-dark rounded-0">Ver diseño</a>
        </div>
      </div>
    <?php endif; ?>
  </div>

  <!-- COLLARES -->
  <div class="col-md-4">
    <?php if (!empty($producto_collares)): ?>
      <div class="card h-100 border-0 rounded-0">
        <img src="<?= base_url('assets/upload/'.$producto_collares['imagen_producto']) ?>" class="card-img-top hover-zoom" alt="<?= esc($producto_collares['nombre_producto']) ?>">
        <div class="card-body text-center">
          <h5 class="card-title text-decoration-none">Collares</h5>
          <p class="parrafo-precios-card"><?= esc($producto_collares['nombre_producto']) ?></p>
          <a href="<?= base_url('lista_catalogo#collares') ?>" class="btn btn-dark rounded-0">Ver diseño</a>
        </div>
      </div>
    <?php endif; ?>
  </div>

  <!-- OTROS -->
  <div class="col-md-4">
    <?php if (!empty($producto_otros)): ?>
      <div class="card h-100 border-0 rounded-0">
        <img src="<?= base_url('assets/upload/'.$producto_otros['imagen_producto']) ?>" class="card-img-top hover-zoom" alt="<?= esc($producto_otros['nombre_producto']) ?>">
        <div class="card-body text-center">
          <h5 class="card-title text-decoration-none">Otros</h5>
          <p class="parrafo-precios-card"><?= esc($producto_otros['nombre_producto']) ?></p>
          <a href="<?= base_url('lista_catalogo#otros') ?>" class="btn btn-dark rounded-0">Ver diseño</a>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>


  </div>
  
</div>

</section>
