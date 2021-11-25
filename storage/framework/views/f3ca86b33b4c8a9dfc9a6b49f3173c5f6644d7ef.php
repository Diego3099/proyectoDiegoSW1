<?php $__env->startSection('title', 'Usuarios'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Usuarios registrados</h1>
    <a href="usuarios/create">Crear usuarios</a>
    <ul>
        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <li>

                <a href="usuarios/<?php echo e($usuario->id); ?>"><?php echo e($usuario->name); ?></a>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <?php echo e($usuarios->links()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/diego/projects/proyectoDiegoSW1/resources/views/usuarios/index.blade.php ENDPATH**/ ?>