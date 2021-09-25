

<?php $__env->startSection('title','portafolio'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="display-4">Portafolio</h1>
            <p class="lead">Proyectos realizados</p>
            <?php if(auth()->guard()->check()): ?>
                <a class="btn btn-primary" href="<?php echo e(route('projects.create')); ?>">Crear proyecto</a>    
            <?php endif; ?>
        </div>
        
        <ul class="list-group">

            <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portafolioItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="list-group-item border-0 shadow-sm mb-3"><a class="d-flex justify-content-between align-items-center" href="<?php echo e(route('projects.show',$portafolioItem)); ?>"> <span><?php echo e($portafolioItem->title); ?></span> <span><?php echo e($portafolioItem->created_at->format('d/m/Y')); ?></span> </a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <li>No hay proyectos</li>
            
            <?php endif; ?>
            <?php echo e($projects->links()); ?>

        </ul>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prograLaravel\cursoLaravel\resources\views/projects/index.blade.php ENDPATH**/ ?>