<?php $__env->startSection('title', 'Crear curso'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Login</h1>


    <form action="login" method="POST">
       <?php echo csrf_field(); ?>
        <label></label>
        <input type="email" placeholder="Email">
        </label>
        <br>
        <label>
            <input type="password" placeholder="Contraseña">
        </label>
        <button type="submit">Login</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/diego/projects/proyectoDiegoSW1/resources/views/login.blade.php ENDPATH**/ ?>