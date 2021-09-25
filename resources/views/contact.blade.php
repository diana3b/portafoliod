@extends('layout')

@section('title','contact')

@section('content')
    <div class="container col-12 col-sm-10 col-md-6 mx-auto">
    
    @include('partials.session-status')
    <form class="bg-white shadow rounded py-3 px-3" method="POST" action="{{ route('messages.store') }}">
        <h1 class="display-4">@lang('Contact')</h1>
        <hr>
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control @error('name') is-invalid  @else border-0 @enderror" type="text" name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
            {!! $errors->first('name','<small>:message</small><br>') !!}
        </div>
        

        <div class="form-group">
            <label for="">Email</label>
            <input class="form-control @error('name') is-invalid  @else border-0 @enderror" type="email" name="email" placeholder="Email..." value="{{ old('email') }}"><br/>
        {!! $errors->first('email','<small>:message</small><br>') !!}
        </div>

       <div class="form-group">
           <label for="">Asunto</label>
            <input class="form-control @error('name') is-invalid  @else border-0 @enderror" type="text" name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br/>
        {!! $errors->first('subject','<small>:message</small><br>') !!}
       </div>

        <div class="form-group">
            <label for="">Mensaje</label>
            <textarea class="form-control @error('name') is-invalid  @else border-0 @enderror" name="content" >{{ old('content') }}</textarea><br/>
        {!! $errors->first('content','<small>:message</small><br>') !!}
        </div>

        <button class="btn btn-outline-success ">@lang('Send')</button>
    </form>
    </div>
@endsection