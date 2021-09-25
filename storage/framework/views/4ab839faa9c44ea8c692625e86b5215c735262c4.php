<form action="<?php echo e(route('store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <input name="upload" type="file">
    <button>Send</button>
    <br>
    <br>
    <img class="img-fluid" height="200px" src="<?php echo e(asset('storage').'/Nr3ytUu6BuVZeK3w2T06mQ6K0ylgZfYnvOkW3ljV.jpg'); ?>"
    " alt="Hola">
</form><?php /**PATH C:\xampp\htdocs\prograLaravel\cursoLaravel\resources\views/upload.blade.php ENDPATH**/ ?>