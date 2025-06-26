<div class="container mt-4">
    <h2 class="mb-4">Mis datos personales</h2>

    <?php if (!empty($validation)): ?>
        <div class="alert alert-danger" role="alert">
            <ul>
            <?php foreach ($validation as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach ?>
            </ul>
        </div>
    <?php endif ?>

    <?php if (session('mensajeActualizac')): ?>
        <div class="alert alert-success">
            <?= session('mensajeActualizac') ?>
        </div>
    <?php endif; ?>

    <div class="mx-auto" style="max-width: 40rem;">
        <div class="p-4 border rounded shadow-sm">

         <?php echo form_open_multipart('actualizar_perfil');?>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <?= form_input([
                    'name' => 'nombre',
                    'id' => 'nombre',
                    'type' => 'text',
                    'class' => 'form-control',
                    'value' => set_value('nombre', $usuario['nombre_usuario'] ?? '')
                ]) ?>
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <?= form_input([
                    'name' => 'apellido',
                    'id' => 'apellido',
                    'type' => 'text',
                    'class' => 'form-control',
                    'value' => set_value('apellido', $usuario['apellido_usuario'] ?? '')
                ]) ?>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <?= form_input([
                    'name' => 'telefono',
                    'id' => 'telefono',
                    'type' => 'text',
                    'class' => 'form-control',
                    'value' => set_value('telefono', $usuario['telefono_usuario'] ?? '')
                ]) ?>
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo electrónico</label>
                <?= form_input([
                    'name' => 'correo',
                    'type' => 'email',
                    'class' => 'form-control',
                    'value' => $usuario['correo_usuario'] ?? '',
                    'readonly' => 'readonly'
                ]) ?>
            </div>

            <div class="mb-3">
                <?= form_submit('guardar', 'Guardar cambios', ['class' => 'btn btn-primary']) ?>
            </div>

           <?php echo form_close();?>
        </div>
    </div>
</div>