<?php if(session('status')): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo e(session('status')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\prograLaravel\cursoLaravel\resources\views/partials/session-status.blade.php ENDPATH**/ ?>