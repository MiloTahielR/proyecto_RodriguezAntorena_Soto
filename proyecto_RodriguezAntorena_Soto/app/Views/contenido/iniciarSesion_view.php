<?php if (! empty($validation)): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
        <?php foreach ($validation as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<?php if (session('ingreso_mensaje')) {
    echo session('ingreso_mensaje');
}
?>

<?php echo form_open('verificar_usuario'); ?> 
  <div class="mb-3">
    <label for="correoUs" class="form-label">E-mail</label>
    <?php echo form_input( ['name' => 'correoUs', 'id' => 'correo','type'=> 'text','class'=>'form-control', 'placeholder' => 'ejemplo@hotmail.com', 'value'=> set_value('correoUs')]);?>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="contrasenia" class="form-label">Contraseña</label>
       <?php echo form_password( ['name' => 'contrasenia', 'id' => 'contrasenia','type'=> 'text','class'=>'form-control', 'rows'=>'3', 'placeholder' => 'Contraseña', 'value'=> set_value('contrasenia')]);?>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Recordarme</label>
  </div>

  <?php echo form_submit('Ingresar', 'Enviar', "class='btn btn-success btn-dark rounded-0'");?>
 <?php echo form_close();?>