<?php $__env->startSection('title', 'Editar actividad'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Editar</h1>

    <form action="<?php echo e(route('actividades.update', $actividad)); ?>" method="POST">

        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <label>
            nombre:
            <input type="text" name="name" value="<?php echo e($actividad->name); ?>">
        </label>
        <br>
        <label>
            descripcion
            <textarea name="description" rows="5"><?php echo e($actividad->description); ?></textarea>
        </label>
        <br>
        <button type="submit">Actualizar Registro </button>
    </form>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/diego/projects/proyectoDiegoSW1/resources/views/actividades/edit.blade.php ENDPATH**/ ?>