<nav class="navbar navbar-expand-lg navbar-light px-3 bg-dark Skorial_Abel text-white">
  <!-- Marca o logo -->
  <a class="navbar-brand navbar-paginas text-light" href="<?php echo base_url('');?>">Administrador</a>

  <!-- Botón hamburguesa -->
  <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Contenido del navbar -->
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <div class="d-flex flex-column flex-md-row w-100 justify-content-between">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
            <a class="nav-link active navbar-paginas text-light" aria-current="page" href= "<?php echo base_url('Productos');?>">Consultas</a>
         </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle navbar-paginas text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Productos
            </a>
          </li>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item " href="#">Ver todos</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url('agregar');?>">Lista Productos </a></li>
              <li><a class="dropdown-item" href="<?php echo base_url('productos');?>">Carga Productos</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url('productos');?>">Gestion Productos</a></li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-paginas text-light" href="<?php echo base_url('comercializacion');?>">Lista Ventas</a>
          </li>
      
      </ul>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
       <li class="nav-item">
            <a class="nav-link navbar-paginas text-light" href="#">
              <?php echo session('apellido'); ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-paginas text-light" href="<?php echo base_url('logout'); ?>">Salir</a>
          </li>
            </ul>