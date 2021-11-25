<?php $__env->startSection('title', 'Crear usuario'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Crear usuarios</h1>

    <form action="<?php echo e(route('usuarios.store')); ?>" method="POST">

        <?php echo csrf_field(); ?>
      
        <label>
            No.Identificacion:
            <input type="text" name="identificacion">
        </label>
        <br>
        <label>
            nombre:
            <input type="text" name="name">
        </label>
        <br>
        <label>
            apellido:
            <input type="text" name="last_name">
        </label>
        <br>
        <label>
            email:
            <input type="text" name="email">
        </label>
        <br>
        <label>
            Rol o cargo:
            <input type="text" name="rol">
        </label>
        <br>
        <label>
            contraseña:
            <input type="text" name="password">
        </label>
        <br>
        
        <button type="submit">enviar fromulario </button>
    </form>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/diego/projects/proyectoDiegoSW1/resources/views/usuarios/create.blade.php ENDPATH**/ ?>