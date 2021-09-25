@extends('layout')

@section('title','portafolio')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="display-4">Portafolio</h1>
            <p class="lead">Proyectos realizados</p>
            @auth
                <a class="btn btn-primary" href="{{ route('projects.create') }}">Crear proyecto</a>    
            @endauth
        </div>
        
        <ul class="list-group">

            @forelse ($projects as $portafolioItem)
                <li class="list-group-item border-0 shadow-sm mb-3"><a class="d-flex justify-content-between align-items-center" href="{{ route('projects.show',$portafolioItem) }}"> <span>{{ $portafolioItem->title }}</span> <span>{{ $portafolioItem->created_at->format('d/m/Y') }}</span> </a></li>
            @empty
                <li>No hay proyectos</li>
            
            @endforelse
            {{ $projects->links() }}
        </ul>
    </div>
@endsection