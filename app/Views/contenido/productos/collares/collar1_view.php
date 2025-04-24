

<nav class="navbar nav-principal navbar-expand-lg bg-dark border-bottom border-body Skorial_Abel container-fluid" width=100%; data-bs-theme="dark" > <!-- Navbar color negro empieza -->
      <nav class="navbar navbar-expand bg-body-tertiary container-fluid">
     <div class="container-fluid">
      <a class="navbar-brand navbar-paginas" href="<?php echo base_url('');?>">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse container-fluid" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 inline-block">
          <li class="nav-item">
            <a class="nav-link active navbar-paginas" aria-current="page" href= "<?php echo base_url('nosotros');?>">Nosotros</a>
         </li>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle navbar-paginas" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Productos
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item " href="<?php echo base_url('productos');?>">Ver todos</a></li>
              <li><a class="dropdown-item" href="#">Collares </a></li>
              <li><a class="dropdown-item" href="#">Aros</a></li>
              <li><a class="dropdown-item" href="#">Otros</a></li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-paginas" href="<?php echo base_url('comercializacion');?>">Comercialización</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-paginas" href="<?php echo base_url('contacto');?>"> Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-paginas" href="<?php echo base_url('terminos');?>">Términos y Usos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-paginas" href="<?php echo base_url('consultas');?>">Consultas</a>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder=" " aria-label="Search">
         <button class="btn btn-light" type="submit">Buscar</button>
        </form>
     </div>
     </div>

    </nav>
    </nav> <!-- Navbar color negro finaliza -->
    </div>