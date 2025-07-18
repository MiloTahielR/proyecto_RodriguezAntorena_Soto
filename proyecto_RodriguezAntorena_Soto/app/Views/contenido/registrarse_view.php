<?php if (! empty($validation)): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
        <?php foreach ($validation as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<?php if (session('registro_mensaje')) {
    echo session('registro_mensaje');
}?>

<?php echo form_open('registrar_usuario'); ?> 
 <div class=" mt-3 mb-3 mx-auto bs-dark-border-subtle Skorial_Abel"  style= "max-width: 50rem  ">

  <div class="p-3 bs-tertiary-bg-rgb ">
     <h4 class="h4-contacto">NUEVO USUARIO- REGISTRARSE.</h4>

  <div class=" mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <?php echo form_input( ['name' => 'nombre', 'id' => 'nombre','type'=> 'text','class'=>'form-control', 'rows'=>'3', 'placeholder' => 'Nombre', 'value'=> set_value('nombre')]);?>
  </div>

  <div class=" mb-3">
    <label for="apellido" class="form-label">Apellido</label>
    <?php echo form_input( ['name' => 'apellido', 'id' => 'apellido','type'=> 'text','class'=>'form-control', 'rows'=>'3', 'placeholder' => 'Apellido', 'value'=> set_value('apellido')]);?>
  </div>

  <div class=" mb-3">
    <label for="dni" class="form-label">Dni</label>
    <?php echo form_input( ['name' => 'dni', 'id' => 'dni','type'=> 'text','class'=>'form-control', 'rows'=>'3', 'placeholder' => 'Ingrese DNI', 'value'=> set_value('dni')]);?>
  </div>

  <div class=" mb-3">
    <label for="telefono" class="form-label">Telefono</label>
    <?php echo form_input( ['name' => 'telefono', 'id' => 'telefono','type'=> 'text','class'=>'form-control', 'rows'=>'3', 'placeholder' => 'Ingrese su número de teléfono', 'value'=> set_value('telefono')]);?>
  </div>

  <div class="mt-3 mb-3">
    <label for="correo" class="form-label">Direccion de Email</label>
     <?php echo form_input( ['name' => 'correoUs', 'id' => 'correoUs','type'=> 'email','class'=>'form-control', 'rows'=>'3', 'placeholder' => 'Ingrese su dirección de email', 'value'=> set_value('correoUs')]);?>
  </div>

  <div class=" mb-3">
    <label for="contrasenia" class="form-label">Contraseña</label>
     <?php echo form_password( ['name' => 'contrasenia', 'id' => 'contrasenia','type'=> 'text','class'=>'form-control', 'rows'=>'3', 'placeholder' => 'Contraseña', 'value'=> set_value('contrasenia')]);?>
  
  </div>
  
  <div class="mb-3">
    <label for="validar_contrasenia" class="form-label">Ingrese nuevamente la contraseña </label>
    <?php echo form_password( ['name' => 'validar_contrasenia', 'id' => 'validar_contrasenia','type'=> 'text','class'=>'form-control', 'rows'=>'3', 'placeholder' => 'Ingrese nuevamente la contraseña', 'value'=> set_value('validar_contrasenia')]);?>
  </div>
  
  <?php echo form_submit('Registrarse', 'Enviar', "class='btn btn-success btn-dark rounded-0'");?>
  </div>

  <?php echo form_close();?>

 </div>
