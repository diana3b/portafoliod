

<?php $__env->startSection('title','contact'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container col-12 col-sm-10 col-md-6 mx-auto">
    
    <?php echo $__env->make('partials.session-status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <form class="bg-white shadow rounded py-3 px-3" method="POST" action="<?php echo e(route('messages.store')); ?>">
        <h1 class="display-4"><?php echo app('translator')->get('Contact'); ?></h1>
        <hr>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php else: ?> border-0 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="name" placeholder="Nombre..." value="<?php echo e(old('name')); ?>"><br>
            <?php echo $errors->first('name','<small>:message</small><br>'); ?>

        </div>
        

        <div class="form-group">
            <label for="">Email</label>
            <input class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php else: ?> border-0 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" name="email" placeholder="Email..." value="<?php echo e(old('email')); ?>"><br/>
        <?php echo $errors->first('email','<small>:message</small><br>'); ?>

        </div>

       <div class="form-group">
           <label for="">Asunto</label>
            <input class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php else: ?> border-0 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="subject" placeholder="Asunto..." value="<?php echo e(old('subject')); ?>"><br/>
        <?php echo $errors->first('subject','<small>:message</small><br>'); ?>

       </div>

        <div class="form-group">
            <label for="">Mensaje</label>
            <textarea class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php else: ?> border-0 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="content" ><?php echo e(old('content')); ?></textarea><br/>
        <?php echo $errors->first('content','<small>:message</small><br>'); ?>

        </div>

        <button class="btn btn-outline-success "><?php echo app('translator')->get('Send'); ?></button>
    </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prograLaravel\cursoLaravel\resources\views/contact.blade.php ENDPATH**/ ?>