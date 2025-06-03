
 <nav class="navbar navbar-expand-lg navbar-light px-3 bg-dark Skorial_Abel text-white">
  <!-- Marca o logo -->
  <a class="navbar-brand navbar-paginas text-light" href="<?php echo base_url('');?>">Inicio</a>

  <!-- Botón hamburguesa -->
  <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Contenido del navbar -->
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <div class="d-flex flex-column flex-md-row w-100 justify-content-between">
      <!-- Menú izquierdo -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active navbar-paginas text-light" href="<?php echo base_url('nosotros');?>">Nosotros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle navbar-paginas text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('productos');?>">Ver todos</a></li>
            <li><a class="dropdown-item" href="#">Collares</a></li>
            <li><a class="dropdown-item" href="#">Aros</a></li>
            <li><a class="dropdown-item" href="#">Otros</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-paginas text-light" href="<?php echo base_url('comercializacion');?>">Comercialización</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-paginas text-light" href="<?php echo base_url('terminos');?>">Términos y Usos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-paginas text-light" href="<?php echo base_url('consultas');?>">Consultas</a>
        </li>
      </ul>

      <!-- Menú derecho -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php if (session('login_session')): ?>
          <li class="nav-item">
            <a class="nav-link navbar-paginas text-light" href="<?php echo base_url('ver_carrito'); ?>">
              <i class="fas fa-shopping-cart"></i> Carrito
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-paginas text-light" href="#">
              <?php echo session('apellido'); ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-paginas text-light" href="<?php echo base_url('logout'); ?>">Salir</a>
          </li>
        <?php else: ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle navbar-paginas text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mi cuenta
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo base_url('registro_usuario');?>">Registrarse</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url('login_cliente');?>">Ingresar</a></li>
            </ul>
          </li>
        <?php endif; 
        ?>
      </ul>
    </div>
  </div>
  </div>
</nav>
