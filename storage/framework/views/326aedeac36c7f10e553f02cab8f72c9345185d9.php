<?php $__env->startSection('title', 'Create'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Create</h1>

    <form action="<?php echo e(route('actividades.store')); ?>" method="POST">

        <?php echo csrf_field(); ?>


        <label>
            nombre:
            <input type="text" name="name">
        </label>
        <br>
        <label>
            descripcion
            <textarea name="description" rows="5"></textarea>
        </label>
        <br>
        <button type="submit">enviar fromulario </button>
    </form>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/diego/projects/proyectoDiegoSW1/resources/views/actividades/create.blade.php ENDPATH**/ ?>