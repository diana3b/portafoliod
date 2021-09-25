@extends('layout')

@section('title','Home')

@section('content')
    <div class="container">
        <div class="row">
            
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">Desarrollo web</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum libero, ex distinctio temporibus, quae sequi quod officia eligendi sit voluptatem mollitia quos, excepturi ipsum reiciendis qui quo. Beatae, debitis atque?.</p>
                <a class="btn btn-lg btn-block btn-success" href="{{ route('contact') }}">Contáctame</a>
                <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid" src="./img/home.svg" alt="">
            </div>
        </div>
    </div>
@endsection