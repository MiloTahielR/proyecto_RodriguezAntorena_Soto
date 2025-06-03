<?php if (! empty($validation)): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
        <?php foreach ($validation as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<?php if (session('mensajeAddProducto')) {  
    echo session('mensajeAddProducto'); // <!-- aca seria el sesion del adminittrador -->
}?>

<?php echo form_open('insertar_prod'); ?> <!-- como esta en el nav de la tabla ? -->

 <div class=" mt-3 mb-3 mx-auto bs-dark-border-subtle Skorial_Abel"  style= "max-width: 50rem  ">

 <form>
  <div class="p-3 bs-tertiary-bg-rgb ">
     <h4 class="h4-contacto">CARGAR PRODUCTOS.</h4>

    <div class="mb-3">
      <label for="nombreProd" class="form-label"> Nombre del producto </label>
      <?php echo form_input(['name'=>'nombreProd','id'=>'nombreProd','type'=> 'text','class'=>'form-control','rows'=>'3','placeholder'=> 'Ingrese el titulo del producto','value'=> set_value('nombreProd')]);?>
    </div>

    <div class="mb-3">
      <label for="cantProd" class="form-label"> Cantidad del producto </label>
      <?php echo form_input(['name'=>'cantProd','id'=>'cantProd','type'=> 'text','class'=>'form-control','rows'=>'3','placeholder'=> 'Ingrese la cantidad de unidades del producto','value'=> set_value('cantProd')]);?>
    </div>

     <div class="mb-3">
      <label for="precioProd" class="form-label"> Precio del producto </label>
      <?php echo form_input(['name'=>'precioProd','id'=>'precioProd','type'=> 'text','class'=>'form-control','rows'=>'3','placeholder'=> 'Ingrese el precio del producto','value'=> set_value('precioProd')]);?>
    </div>

     <div class="form-group">
      <label for="dispProd">Disponibilidad</label>
      <?php
      $disponibilidad = [
        '' => 'Seleccione opción',
        'true' => 'Hay stock',
        'false' => 'Sin stock'
        ];
      echo form_dropdown('dispProd', $disponibilidad, set_value('dispProd'), ['class' => 'form-control']);
      ?>
      </div>
  

      <div class="mb-3 form-group">
      <label for="categProd" class="form-label">Categoria del producto</label>
      <?php 
            $categProd  = [ 
            '' => 'Seleccione opción', 
            '1'=> 'Aros',
            '2'=> 'Collares',
            '3'=> 'Otros',
            ];
       echo form_dropdown('categProd', $categProd , set_value('categProd'), ['class' => 'form-control']);
    ?>
    </div>
      
    <div class="mb-3">
      <label for="descripcionProd" class="form-label"> Descripcion del producto </label>
      <?php echo form_input(['name'=>'descripcionProd','id'=>'descripcionProd','type'=> 'text','class'=>'form-control','rows'=>'3','placeholder'=> 'Ingrese una descripcion del producto','value'=> set_value('descripcionProd')]);?>
    </div>
    
     <div class="mb-3">
     <label for="imgProd" class="form-label">Imagen del producto</label>
     <?php echo form_input(['name'=>'imgProd','id'=>'imgProd','type'=> 'file', 'class'=>'form-control','rows'=>'3','placeholder'=> 'Ingrese imagen del producto','value'=> set_value('imgProd')]);?>
     </div>

     <div class="mb-3">
     <?php echo form_submit('agregarProd','Cargar producto','class'='btn btn-success');?>
    </div>
</form> 

<?php echo form_close();?>
</html>
