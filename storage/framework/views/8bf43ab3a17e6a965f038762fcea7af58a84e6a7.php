<?php $__env->startSection('title','Actividad'); ?>
<?php $__env->startSection('content'); ?>


    <h1>Nombre del curso: <?php echo e($actividad->name); ?></h1>
    <h1>Descripcion: <?php echo e($actividad->description); ?></h1>

    <a href="<?php echo e(route('actividades.index')); ?>">Ver actividades</a>
    <br>
    <a href="<?php echo e(route('actividades.edit', $actividad)); ?>">Editar Curso</a>
    <br>
    <form action="<?php echo e(route('actividades.destroy',$actividad)); ?>" method="POST">
   <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button type="submit">Eliminar</button>
    </form>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/diego/projects/proyectoDiegoSW1/resources/views/actividades/show.blade.php ENDPATH**/ ?>