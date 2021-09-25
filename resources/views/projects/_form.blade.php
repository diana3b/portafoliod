@csrf 
<div class="form-group">
    <label for="">Titulo del proyecto
    </label>
    <input class="form-control" type="text" name="title" value="{{ old('title',$project->title) }}">
</div>
<div class="form-group">
    
<label for="">Url del proyecto
</label>
<input class="form-control" type="text" name="url" value="{{ old('url',$project->url) }}">
</div>

<div class="form-group">
    <label for="">Descripcion del proyecto</label>
    <textarea class="form-control" name="description">{{ old('description',$project->description) }}</textarea>
</div>

<button class="btn btn-secondary">{{ $btnText }}</button>
<a class="btn btn-info btn-block" href="{{ route('projects.index') }}">Cancelar</a>