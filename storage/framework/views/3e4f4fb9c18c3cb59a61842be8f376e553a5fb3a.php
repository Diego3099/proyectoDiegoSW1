<?php $__env->startSection('title', 'cursos'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Usuarios</h1>
    <a href="cursos/create">Crear cursos</a>
    <ul>
        <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <li>

                <a href="cursos/<?php echo e($curso->id); ?>"><?php echo e($curso->name); ?></a>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <?php echo e($cursos->links()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/diego/projects/proyectoDiegoSW1/resources/views/cursos/index.blade.php ENDPATH**/ ?>