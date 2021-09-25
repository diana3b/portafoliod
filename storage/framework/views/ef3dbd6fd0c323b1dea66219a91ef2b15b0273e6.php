

<?php $__env->startSection('title','Crear proyecto'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="container col-12 col-sm-10 col-md-6 mx-auto">
            <?php echo $__env->make('partials.validation-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <form class="bg-white py-3 px-4 shadow-lg rounded" action="<?php echo e(route('projects.store')); ?>" method="POST">
                <h1>Crear nuevo proyecto</h1>
                <br>
                <?php echo $__env->make('projects._form',['btnText' => 'Guardar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prograLaravel\cursoLaravel\resources\views/projects/create.blade.php ENDPATH**/ ?>