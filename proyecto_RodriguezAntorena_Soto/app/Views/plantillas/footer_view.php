    <footer>
    <div class="container bg-dark text-white">
    <div class="row">
      <!-- Columna 1: Categorías -->
      <div class="col-md-6">
        <h6 class="text-uppercase mb-3">Categorías</h6>
        <ul class="list-unstyled">
          <li><a href="<?php echo base_url('');?>" class="text-white text-decoration-none d-block mb-1">Inicio</a></li>
          <li><a href="<?php echo base_url('nosotros');?>" class="text-white text-decoration-none d-block mb-1">Nosotros</a></li>
          <li><a href="<?php echo base_url('productos');?>" class="text-white text-decoration-none d-block mb-1">Productos</a></li>
          <li><a href="<?php echo base_url('comercializacion');?>" class="text-white text-decoration-none d-block mb-1">Comercialización</a></li>
          <li><a href="<?php echo base_url('contacto');?>" class="text-white text-decoration-none d-block mb-1">Contacto</a></li>
          <li><a href="<?php echo base_url('consultas');?>" class="text-white text-decoration-none d-block mb-1">Consultas</a></li>
        </ul>
      </div>

      <!-- Columna 2: Contactanos -->
      <div class="col-md-6">
        <h6 class="mb-3 text-uppercase ">Contactanos!</h6>
        <ul class="list-unstyled">
          <li class="mb-2">
            <a href="https://wa.me/1234567890" class="text-white text-decoration-none">
              <i class="fab fa-whatsapp me-2"></i>Whatsapp
            </a>
          </li>

          <h6 class="mb-3 text-uppercase  ">Seguinos en nuestras redes:</h6>
          <li>
            <a href="https://instagram.com/sk0rial" class="text-white text-decoration-none">
              <i class="fab fa-instagram me-2"></i>Instagram
            </a>
          </li>

          <h6 class="mb-3 mt-3 text-uppercase">Medios de pago:</h6>
          <li>
            <a href="#" class="text-white text-decoration-none">
                <i class="fas fa-wallet"></i> Mercado Pago
                  <i class="fab fa-cc-visa"></i> Visa
            </a>
          </li>

        </ul>
      </div>
    </div>

    <!-- Texto inferior centrado -->
    <div class="text-center text-white mt-4">
      <p class="medium pb-3 mb-0">
        © Skorial - 2025. Todos los derechos reservados. Defensa de las y los consumidores. 
        Para más información consultar en 
        <a href="<?php echo base_url('terminos');?>" class="text-white text-decoration-underline">Términos y Uso</a>.
      </p>
    </div>
  </div>

    </footer>
   
    <script src=" <?php echo base_url('assets/js/bootstrap.bundle.js');?>" crossorigin="anonymous"></script>
  </body>
</html>