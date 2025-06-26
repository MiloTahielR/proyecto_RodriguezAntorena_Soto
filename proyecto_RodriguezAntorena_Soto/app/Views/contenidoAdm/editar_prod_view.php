<?php if (! empty($validation)): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
        <?php foreach ($validation as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<?php if (session('mensajeActualizar')) {  
    echo session('mensajeActualizar'); // <!-- aca seria el sesion del adminittrador -->
}?>


 <div class=" mt-3 mb-3 mx-auto bs-dark-border-subtle Skorial_Abel"  style= "max-width: 50rem  ">
 
  <div class="p-3 bs-tertiary-bg-rgb ">
     <h4 class="h4-contacto">EDICION DE  PRODUCTOS.</h4>

<?php echo form_open_multipart('actualizar');?>

    <div class="mb-3">
      <label for="nombreProd" class="form-label"> Nombre del producto </label>
      <?php echo form_input(['name'=>'nombreProd','id'=>'nombreProd','type'=> 'text','class'=>'form-control','rows'=>'3','autofocus'=>'autofocus','value'=> $producto['nombre_producto']]);?>
    </div>

    <div class="mb-3">
      <label for="cantProd" class="form-label"> Cantidad del producto </label>
      <?php echo form_input(['name'=>'cantProd','id'=>'cantProd','type'=> 'text','class'=>'form-control','rows'=>'3','value'=>$producto['cantidad_producto']]);?>
    </div>

     <div class="mb-3">
      <label for="precioProd" class="form-label"> Precio del producto </label>
      <?php echo form_input(['name'=>'precioProd','id'=>'precioProd','type'=> 'text','class'=>'form-control','rows'=>'3','value' =>$producto['precio_producto']]);?>
    </div>

     <div class="form-group">
      <label for="dispProd">Disponibilidad</label>
      <?php
      $disponibilidad = [
        '' => 'Seleccione opción',
        'true' => 'Hay stock',
        'false' => 'Sin stock'
        ];
      echo form_dropdown('dispProd', $disponibilidad, set_value('dispProd', $producto['disponibilidad_producto']), ['class' => 'form-control']);
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
       echo form_dropdown('categProd', $categProd , set_value('categProd', $producto ['producto_categoria']), ['class' => 'form-control']);
    ?>
    </div>
      
    <div class="mb-3">
      <label for="descripcionProd" class="form-label"> Descripcion del producto </label>
      <?php echo form_input(['name'=>'descripcionProd','id'=>'descripcionProd','type'=> 'text','class'=>'form-control','rows'=>'3','value'=> $producto['descripcion']]);?>
    </div>
    
     <div class="mb-3">
     <label for="imgProd" class="form-label">Imagen del producto</label>
     <img src="<?php echo base_url('assets/upload/'.$producto['imagen_producto']);?>" class="card-img-top " alt="" height="600px" width="50px">     
     <?php echo form_input(['name'=>'imgProd','id'=>'imgProd','type'=> 'file', 'rows'=>'3']);?>
     </div>

     <?php echo form_hidden('id',$producto['id_producto']);?>

     <div class="mb-3">
     <?php echo form_submit('modificarProd','Modificar',"'class'='btn btn-success'");?>
    </div>


<?php echo form_close();?>

</html>

