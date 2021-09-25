@extends('layout')

@section('title','Crear proyecto')

@section('content')
<div class="container">
    <div class="row">
        <div class="container col-12 col-sm-10 col-md-6 mx-auto">
            @include('partials.validation-errors')
    
            <form class="bg-white p-5 shadow-sm" action="{{ route('projects.update',$project) }}" method="POST">
                @method('PATCH')
                <h1 class="display-4">Editar proyecto</h1>
                @include('projects._form',['btnText' => 'Actualizar'])
            </form>
        </div>
    </div>
</div>
@endsection