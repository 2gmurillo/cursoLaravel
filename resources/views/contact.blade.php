@extends('layout')
@section('content')
<h1>{{__('Contact')}}</h1>

<!-- @if($errors->any())
<div class="error">
  @foreach($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
  <a class="link button" href="/contact">Volver</a>
</div>
@endif -->

<form class="form" action="{{ route('contact') }}" method="POST">
  @csrf
  <input class="input" type="text" name="name" placeholder="Tu Nombre" value="{{old('name')}}">
  {!! $errors->first('name', '<p class="error-msg">:message</p>') !!}

  <input class="input" type="email" name="email" placeholder="Tu Correo" value="{{ old('email') }}">
  {!! $errors->first('email', '<p class="error-msg">:message</p>') !!}

  <input class="input" type="text" name="subject" placeholder="Asunto..." value="{{ old('subject') }}">
  {!! $errors->first('subject', '<p class="error-msg">:message</p>') !!}

  <textarea class="textarea" name="content" placeholder="Mensaje...">{{old('content')}}</textarea>
  {!! $errors->first('content', '<p class="error-msg">:message</p>') !!}
  <button class="button" type="submit">@lang('Send')</button>
</form>
@endsection