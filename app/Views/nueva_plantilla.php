<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--modifiqué href="assets/css/bootstrap.min.css" y agregué rel="stylesheet"-->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ; ?>">
  
  <!--crossorigin="anonymous"-->
    <title>Bootstrap TP 3</title>

  </head>
  
  <body >
    <section class= "container contenedorSection ">  
      <div class="text-center bs-dark-text-emphasis container-fluid"> 
        <h1>
         SKORIAL 
        </h1> 
        <h3> 
          Diseño de Autor 
        </h3>
      </div>
    <div class="container-fluid navBar d-flex w-100"> 

      <nav class="navbar bg-dark border-bottom border-body w-100" data-bs-theme="dark" > <!-- Navbar color negro empieza -->
      <nav class="navbar navbar-expand bg-body-tertiary">
     <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 inline-block">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
         </li>
          <li class="nav-item">
            <a class="nav-link" href="app/Views/contenido/nosotros_view.php">Nosotros</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
     </div>
     </div>

    </nav>
    </nav> <!-- Navbar color negro finaliza -->
    </div>
  <div class="mt-3"> <!-- Carrousel comienza -->

  <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/tallerSKRLBanner.png') ; ?>" class="d-block w-100 h-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/tallerSKRLBanner (1).png') ; ?>" class="d-block w-100 h-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/tallerSKRLBanner (3).png') ; ?>" class="d-block w-100 h-50" alt="...">
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

    <div> <!-- 4 parrafos comienza-->
        <p> 
        PARRAFO 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sint numquam earum cum tempora quam consectetur odit hic inventore rem placeat delectus, nulla libero recusandae, molestiae blanditiis ducimus illo! Debitis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam omnis aspernatur assumenda voluptates at a autem, possimus nulla tempore vero sint ratione quisquam consequatur laboriosam veniam distinctio? Modi, tenetur fugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, dolorem optio id facilis dolorum, commodi quam error tenetur similique nihil, sapiente dignissimos sequi veniam! Aut vel molestiae nihil. Impedit, fugiat.
        </p>
        <p> 
        PARRAFO 2 Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sint numquam earum cum tempora quam consectetur odit hic inventore rem placeat delectus, nulla libero recusandae, molestiae blanditiis ducimus illo! Debitis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam omnis aspernatur assumenda voluptates at a autem, possimus nulla tempore vero sint ratione quisquam consequatur laboriosam veniam distinctio? Modi, tenetur fugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, dolorem optio id facilis dolorum, commodi quam error tenetur similique nihil, sapiente dignissimos sequi veniam! Aut vel molestiae nihil. Impedit, fugiat.
        </p>
        <p> 
        PARRAFO 3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sint numquam earum cum tempora quam consectetur odit hic inventore rem placeat delectus, nulla libero recusandae, molestiae blanditiis ducimus illo! Debitis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam omnis aspernatur assumenda voluptates at a autem, possimus nulla tempore vero sint ratione quisquam consequatur laboriosam veniam distinctio? Modi, tenetur fugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, dolorem optio id facilis dolorum, commodi quam error tenetur similique nihil, sapiente dignissimos sequi veniam! Aut vel molestiae nihil. Impedit, fugiat.
        </p>
        <p> 
        PARRAFO 4 Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sint numquam earum cum tempora quam consectetur odit hic inventore rem placeat delectus, nulla libero recusandae, molestiae blanditiis ducimus illo! Debitis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam omnis aspernatur assumenda voluptates at a autem, possimus nulla tempore vero sint ratione quisquam consequatur laboriosam veniam distinctio? Modi, tenetur fugiat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, dolorem optio id facilis dolorum, commodi quam error tenetur similique nihil, sapiente dignissimos sequi veniam! Aut vel molestiae nihil. Impedit, fugiat.
        </p> <!-- 4 parrafos finaliza-->
    </div>
    </section>
   
    <footer>
      <p class = "text-primary-rgb">piesito d pag </p>
    </footer>
   
    <script src=" <?php echo base_url('assets/js/bootstrap.bundle.js');?>" crossorigin="anonymous"></script>
  </body>
</html>