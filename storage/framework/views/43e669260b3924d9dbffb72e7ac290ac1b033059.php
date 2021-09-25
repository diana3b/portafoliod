<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title','CodigoNativo'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</head>
<body>
    <div id="app" class="d-flex flex-column" style="height: 100vh">
        <header>
            <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.session-status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>
        <main class="py-4 h-screen">
            <?php echo $__env->yieldContent('content'); ?>    
        </main>
        <footer class="bg-white text-black-50 py-3">
            <p class="text-center"><?php echo e(config('app.name')); ?> | Copyrigth @ <?php echo e(date('Y')); ?></p>  
        </footer>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\prograLaravel\cursoLaravel\resources\views/layout.blade.php ENDPATH**/ ?>