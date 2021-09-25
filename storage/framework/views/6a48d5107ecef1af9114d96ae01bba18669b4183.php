

<?php $__env->startSection('title','portafolio'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Portafolio</h1>

    <ul>

        <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portafolioItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li><a href="<?php echo e(route('portafolio.show',$portafolioItem)); ?>"><?php echo e($portafolioItem->title); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li>No hay proyectos</li>
        
        <?php endif; ?>
        <?php echo e($projects->links()); ?>

    </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prograLaravel\cursoLaravel\resources\views/portafolio.blade.php ENDPATH**/ ?>