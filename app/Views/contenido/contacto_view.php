<!-- ACA EL FORMULARIO PARA CONSULTAS
  el formi¿ulario debe estar dentro de form con todas las funciones para guardar 
  la informacion del usuario, un ejemplo esta en boostrap form overview 
  debe tener boton submit / el el for y name cambiar el nombre "mas simpre" para 
  luego capturar el dato -->
  <form class= "container-fuid">
 <div class=" mt-3 mb-3 mx-auto bs-dark-border-subtle Skorial_Abel"  style= "max-width: 50rem  ">

  <div class="p-3 bs-tertiary-bg-rgb ">
     <h4 class="h4-contacto">Dejanos tu consulta y te respondemos.</h4>
 

  <div class="mt-3 mb-3">
    <label for="correo" class="form-label">Direccion de Email</label>
    <input type="email" class="form-control" id="correo" placeholder="name@example.com">
  </div>

  <div class=" mb-3">
    <label for="nomyape" class="form-label">Nombre y apellido</label>
    <input type="nombre" class="form-control" id="nomyape" rows="3"></textarea>
  </div>
  
  <div class="mb-3">
    <label for="consulta" class="form-label">Ingresa tu consulta aqui</label>
    <textarea class="form-control" id="consulta" placeholder="Consulta" rows="3"></textarea>
  </div>
  
  <button type="submit" class="btn btn-dark rounded-0">Enviar</button>
  </div>
 </div>
</form>



<!-- ACALA TARJETA CON LOS DATOS DEL NEGOCIO PARA CONTACTRALOS  -(el style pasar al css-->


<div class="container-fluid mt-3 mb-3 p-3 mi-panel Skorial_Abel" style="max-width: 52rem;">
  <div class="p-3 ">
    <h4 class="h4-contacto">Nuestras líneas de contacto.</h4>

    <div class="row">
      <!-- Columna izquierda -->
      <div class="col-md-6 d-flex flex-column justify-content-center div-contacto1">
        <ul class="list-group mb-2">
          
          <li class="list-group-item disabled" aria-disabled="true">
            <i class="fas fa-map-marker-alt"></i> 
            Dirección: Av. Juan Torres de Vera y Aragon 1597, W3400BJE Corrientes
          </li>
          <li class="list-group-item">
            <i class="fas fa-phone-alt"></i> 
            <a href="tel:+3794916511" class="text-decoration-none text-dark">+3794916511| Lu a Vi 9 a 20 | Sa 9 a 17</a>
          </li>
          <li class="list-group-item">
            <i class="fab fa-whatsapp text-success"></i> 
            <a href="https://wa.me/3794916511" class="text-decoration-none text-dark">WhatsApp | Lu a Vi 9 a 20 | Sa 9 a 17</a>
          </li>
          <li class="list-group-item">
            <i class="fab fa-instagram"></i> 
            <a href="https://instagram.com/sk0rial" target="_blank" class="text-decoration-none text-dark ">sk0rial</a>
          </li>
        </ul>
      </div>

      <!-- Columna derecha: Mapa -->
      <div class="col-md-6">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14160.981283495494!2d-58.84689049482529!3d-27.46162097118527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456b5801de160f%3A0xb03d9f52c91f0fdc!2sMitre%20Park!5e0!3m2!1spt-BR!2sar!4v1744727187287!5m2!1spt-BR!2sar" 
          width="100%" 
          height="95%" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>
</div>


</body>
