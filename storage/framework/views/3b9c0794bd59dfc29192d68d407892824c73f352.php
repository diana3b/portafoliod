<?php echo csrf_field(); ?> 
<div class="form-group">
    <label for="">Titulo del proyecto
    </label>
    <input class="form-control" type="text" name="title" value="<?php echo e(old('title',$project->title)); ?>">
</div>
<div class="form-group">
    
<label for="">Url del proyecto
</label>
<input class="form-control" type="text" name="url" value="<?php echo e(old('url',$project->url)); ?>">
</div>

<div class="form-group">
    <label for="">Descripcion del proyecto</label>
    <textarea class="form-control" name="description"><?php echo e(old('description',$project->description)); ?></textarea>
</div>

<button class="btn btn-secondary"><?php echo e($btnText); ?></button>
<a class="btn btn-info btn-block" href="<?php echo e(route('projects.index')); ?>">Cancelar</a><?php /**PATH C:\xampp\htdocs\prograLaravel\cursoLaravel\resources\views/projects/_form.blade.php ENDPATH**/ ?>