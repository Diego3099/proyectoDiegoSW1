<?php $__env->startSection('title','Cursos'); ?>
<?php $__env->startSection('content'); ?>


    <h1>Nombre del curso: <?php echo e($curso->name); ?></h1>
    <h1>Apellido del curso: <?php echo e($curso->last_description); ?></h1>
    <h1>Email curso: <?php echo e($curso->categoria); ?></h1>
    
   

    <a href="<?php echo e(route('cursos.index')); ?>">Ver cursos</a>
    <br>
    <a href="<?php echo e(route('cursos.edit', $curso)); ?>">Editar curso</a>
    <br>
    <form action="<?php echo e(route('cursos.destroy',$curso)); ?>" method="POST">
   <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button type="submit">Eliminar</button>
    </form>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/diego/projects/proyectoDiegoSW1/resources/views/cursos/show.blade.php ENDPATH**/ ?>