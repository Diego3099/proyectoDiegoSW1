<?php $__env->startSection('title','Actividades'); ?>
<?php $__env->startSection('content'); ?>
<h1>Actividades</h1>
<a href="actividades/create">Crear actividad</a>
<ul>
    <?php $__currentLoopData = $actividades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actividad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    
    <li>

    <a href="actividades/<?php echo e($actividad->id); ?>"><?php echo e($actividad->name); ?></a>

    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php echo e($actividades->links()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/diego/projects/proyectoDiegoSW1/resources/views/actividades/index.blade.php ENDPATH**/ ?>