<?php $__env->startSection('title', 'Editar usuario'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Editar</h1>

    <form action="<?php echo e(route('usuarios.update', $usuario)); ?>" method="POST">

        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <label>
            No.Identificacion:
            <input type="text" name="identificacion" value="<?php echo e($usuario->identificacion); ?>">
        </label>
        <br>
        <label>
            nombre:
            <input type="text" name="name" value="<?php echo e($usuario->name); ?>">
        </label>
        <br>
        <label>
            apellido:
            <input type="text" name="last_name" value="<?php echo e($usuario->last_name); ?>">
        </label>
        <br>
        <label>
            email:
            <input type="email" name="email" value="<?php echo e($usuario->email); ?>">
        </label>
        <br>
        <label>
            Rol o cargo:
            <input type="text" name="rol" value="<?php echo e($usuario->rol); ?>">
        </label>
        <br>
        <label>
            contraseña:
            <input type="password" name="password" value="<?php echo e($usuario->password); ?>">
        </label>
        <br>
        <br>
        <button type="submit">Actualizar Registro </button>
    </form>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/diego/projects/proyectoDiegoSW1/resources/views/usuarios/edit.blade.php ENDPATH**/ ?>