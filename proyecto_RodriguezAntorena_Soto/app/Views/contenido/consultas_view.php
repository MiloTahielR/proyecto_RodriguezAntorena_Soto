<div class=" mt-3 mb-3 mx-auto bs-dark-border-subtle Skorial_Abel"  style= "max-width: 50rem  ">
   
<?php if (! empty($validation)): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
        <?php foreach ($validation as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<?php if (session('texto_consultas')) {
    echo session('texto_consultas');
}?>

<?php echo form_open('consulta_mensaje'); ?>
  <div class="p-3 bs-tertiary-bg-rgb ">
     <h4 class="h4-contacto">Dejanos tu consulta y te respondemos.</h4>
 

  <div class="mt-3 mb-3">
    <label for="correo"  class="form-label">Direccion de Email</label>
    <!-- REEMPLAZAR el input con form correspondiente de FormHelper de CodeIgniter, si es de contraseña es form_password, form_textaerea etc..-->
    <?php echo form_input( ['name' => 'correo', 'id' => 'correo','type'=> 'text','class'=>'form-control', 'placeholder' => 'ejemplo@hotmail.com', 'value'=> set_value('correo')]);?>
  
  </div>

  <div class=" mb-3">
    <label for="nomyape" class="form-label">Nombre y apellido</label>
    <?php echo form_input( ['name' => 'nomyape', 'id' => 'nomyape','type'=> 'text','class'=>'form-control', 'placeholder' => 'Nombre y Apellido', 'value'=> set_value('nomyape')]);?>
    
  </div>
  <div class=" mb-3">
    <label for="motivo" class="form-label">Motivo de Consulta</label>
    <?php echo form_input( ['name' => 'motivo', 'id' => 'motivo','type'=> 'text','class'=>'form-control', 'placeholder' => 'Ingrese Motivo', 'value'=> set_value('motivo')]);?>
    
  </div>
  <div class="mb-3">
    <label for="consulta" class="form-label">Ingresa tu consulta aqui</label>
     <?php echo form_textarea( ['name' => 'consulta', 'id' => 'consulta','type'=> 'text', 'rows'=>'3','class'=>'form-control', 'placeholder' => 'Ingrese su Consulta', 'value'=> set_value('consulta')]);?>
    
  </div>
  
   <?php echo form_submit('Consultas', 'Enviar', "class='btn btn-success btn-dark rounded-0'");?>
  
</div>

<?php echo form_close();?>

 </div>




<!-- ACALA TARJETA CON LOS DATOS DEL NEGOCIO PARA CONTACTRALOS  -(el style pasar al css-->


<div class="container-fluid mt-3 mb-3 p-3 mi-panel Skorial_Abel" style="max-width: 52rem;">
  <div class="p-3 ">
    <h4 class="h4-contacto">Nuestras líneas de contacto.</h4>

    <div class="row">
      <!-- Columna izquierda -->
      <div class="col-md-6 d-flex flex-column justify-content-center div-contacto1">
        <ul class="list-group mb-2">

        <ul class="list-group">
      <li class="list-group-item disabled" aria-disabled="true">
        <i class="fas fa-user"></i> 
        Titular: Milo Rodriguez. Razon social: "Skorial Coop"
      </li>
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
