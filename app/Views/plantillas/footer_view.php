    <footer>
    <div class="container">
    <div class="row">
      <!-- Columna 1: Categorías -->
      <div class="col-md-6">
        <h6 class="text-uppercase mb-3">Categorías</h6>
        <ul class="list-unstyled">
          <li><a href="<?php echo base_url('');?>" class="text-dark text-decoration-none d-block mb-1">Inicio</a></li>
          <li><a href="<?php echo base_url('nosotros');?>" class="text-dark text-decoration-none d-block mb-1">Nosotros</a></li>
          <li><a href="<?php echo base_url('productos');?>" class="text-dark text-decoration-none d-block mb-1">Productos</a></li>
          <li><a href="<?php echo base_url('comercializacion');?>" class="text-dark text-decoration-none d-block mb-1">Comercialización</a></li>
          <li><a href="<?php echo base_url('contacto');?>" class="text-dark text-decoration-none d-block mb-1">Contacto</a></li>
          <li><a href="<?php echo base_url('consultas');?>" class="text-dark text-decoration-none d-block mb-1">Consultas</a></li>
        </ul>
      </div>

      <!-- Columna 2: Contactanos -->
      <div class="col-md-6">
        <h5 class="mb-3">Contactanos</h5>
        <ul class="list-unstyled">
          <li class="mb-2">
            <a href="https://wa.me/1234567890" class="text-dark text-decoration-none">
              <i class="fab fa-whatsapp me-2"></i>Whatsapp
            </a>
          </li>
          <li>
            <a href="https://instagram.com/sk0rial" class="text-dark text-decoration-none">
              <i class="fab fa-instagram me-2"></i>Instagram
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Texto inferior centrado -->
    <div class="text-center mt-4">
      <p class="small mb-0">
        © Skorial - 2025. Todos los derechos reservados. Defensa de las y los consumidores. 
        Para más información consultar en 
        <a href="<?php echo base_url('terminos');?>" class="text-dark text-decoration-underline">Términos y Uso</a>.
      </p>
    </div>
  </div>

    </footer>
   
    <script src=" <?php echo base_url('assets/js/bootstrap.bundle.js');?>" crossorigin="anonymous"></script>
  </body>
</html>