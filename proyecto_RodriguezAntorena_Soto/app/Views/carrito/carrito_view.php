<?php if (! empty($validation)): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
        <?php foreach ($validation as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<?php if (session('mensajeAddCarrito')) {
    echo session('mensajeAddCarrito');
}?>

<?php $cart = \Config\Services::cart();?>

<div class=" mt-3 mb-3 mx-auto bs-dark-border-subtle Skorial_Abel"  style= "max-width: 50rem  ">

  <div class="p-3 bs-tertiary-bg-rgb ">
     <h4 class="h4-contacto">CARRITO DE COMPRAS.</h4><a href="lista_catalogo"
            class="btn btn-success" role="button">Continuar comprando</a>
    
     <?php if ($cart->contents() == NULL) {?>
         <h2 class="text-center alert alert-danger"> El carrito esta vacio.</h2><?php }?>
         <table id= "mytable" class= "table table-bordred table-striped">
            <?php if  ($cart1 = $cart-> contents()):?>

<?php echo form_open('guardar_venta') ?>

    <div class="mb-3 pb-3 pt-3">
    <h5>Para finalizar la compra, seleccione: </h5>
    <label for="forma_pago_venta" class="form-label">Forma de pago:</label>
    
    <?= form_dropdown(
        'forma_pago_venta',
        [
            '' => 'Seleccione una opción',
            '0' => 'Tarjetas',
            '1' => 'Mercado Pago'
        ],
        set_value('forma_pago_venta'),
        [ 'class' => 'form-select', 'id' => 'forma_pago_venta', 'required' => 'required']
    ) ?>
</div>

<div class="mb-3">
    <label for="envio_venta" class="form-label">Método de envío:</label>

    <?= form_dropdown(
        'envio_venta',
        [
            '' => 'Seleccione una opción',
            '0' => 'Sin envío (retiro)',
            '1' => 'A domicilio'
        ],
        set_value('envio_venta'),
        ['class' => 'form-select', 'id' => 'envio_venta', 'required' => 'required']
    ) ?>
</div>


      <h5 class="pt-5"> LISTA DE PRODUCTOS</h5>
                <thead>
                        <td>N° item </td>
                        <td>N° Nombre </td>
                        <td>N° Precio </td>
                        <td>N° Cantidad </td>
                        <td>N° Subtotal </td>
                        <td>N° Accion </td>
                
            </thead>

    <tbody>
    <?php   
            $total= 0;
            $i=1;
            foreach($cart1 as $item):?>
            <tr>
                <td> <?php echo $i++; ?></td>
                <td> <?php echo $item ['name'];?> </td>
                 <td>$<?php echo $item ['price'];?> </td>
                  <td> <?php echo $item ['qty'];?> </td>
                   <td> <?php echo $item ['subtotal']; $total =  $total + $item ['subtotal']?> </td>
                      <td> <?php echo anchor ('eliminar_item/'.$item['rowid'],'Eliminar');?> </td>
                 <tr>
                <?php endforeach;?>
                <tr>

<div>
                  <td class=" mb-3 mt-3 pt-2 pb-2">Total Compra:$  <?php echo $total;?></td>
                  <td><a href= "<?php echo base_url('vaciar_carrito/all');?>"class="btn btn-success"> Vaciar Carrito</a></td>
               <td>
                  <button type="submit" class="btn btn-success">Ordenar Compra</button>
               </td>
                  
            <tr>
      <?php endif;?>

</div>

            </tbody>
             </table>
<?php echo form_close();?>



