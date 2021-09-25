

<?php $__env->startSection('title','Crear proyecto'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="container col-12 col-sm-10 col-md-6 mx-auto">
            <?php echo $__env->make('partials.validation-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
            <form class="bg-white p-5 shadow-sm" action="<?php echo e(route('projects.update',$project)); ?>" method="POST">
                <?php echo method_field('PATCH'); ?>
                <h1 class="display-4">Editar proyecto</h1>
                <?php echo $__env->make('projects._form',['btnText' => 'Actualizar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prograLaravel\cursoLaravel\resources\views/projects/edit.blade.php ENDPATH**/ ?>