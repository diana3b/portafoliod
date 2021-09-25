

<?php $__env->startSection('title',$project->title); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="bg-white p-5 shadow rounded">
        <h1><?php echo e($project->title); ?></h1>
        <p class="text-secondary"><?php echo e($project->description); ?></p>
        <p class="text-black-50"><?php echo e($project->created_at->diffForHumans()); ?></p>
        <div class="d-flex justify-content-between align-content-center">
            <a href="<?php echo e(route('projects.index')); ?>">Regresar</a>
            <?php if(auth()->guard()->check()): ?>
                <div class="btn-group-sm">
                    <a class="btn btn-info" href="<?php echo e(route('projects.edit',$project)); ?>">Editar</a>
                    <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">Eliminar</a>
                </div>
                
                <form id="delete-project" class="d-none" action="<?php echo e(route('projects.destroy',$project)); ?>" method="POST">
                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                </form>    
            <?php endif; ?>
        </div>
    </div>    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prograLaravel\cursoLaravel\resources\views/projects/show.blade.php ENDPATH**/ ?>