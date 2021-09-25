@extends('layout')

@section('title','Crear proyecto')

@section('content')
    <div class="container">
        <div class="container col-12 col-sm-10 col-md-6 mx-auto">
            @include('partials.validation-errors')

            <form class="bg-white py-3 px-4 shadow-lg rounded" action="{{ route('projects.store') }}" method="POST">
                <h1>Crear nuevo proyecto</h1>
                <br>
                @include('projects._form',['btnText' => 'Guardar'])
            </form>
        </div>
    </div>
@endsection