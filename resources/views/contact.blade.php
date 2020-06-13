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

<form class="form" action="{{ route('messages.store') }}" method="POST">
  @csrf
  <input class="input" type="text" name="name" placeholder="@lang('Your name')" value="{{old('name')}}">
  {!! $errors->first('name', '<p class="error-msg">:message</p>') !!}

  <input class="input" type="email" name="email" placeholder="@lang('Your email')" value="{{ old('email') }}">
  {!! $errors->first('email', '<p class="error-msg">:message</p>') !!}

  <input class="input" type="text" name="subject" placeholder="@lang('Subject')..." value="{{ old('subject') }}">
  {!! $errors->first('subject', '<p class="error-msg">:message</p>') !!}

  <textarea class="textarea" name="content" placeholder="@lang('Content')...">{{old('content')}}</textarea>
  {!! $errors->first('content', '<p class="error-msg">:message</p>') !!}
  <button class="button" type="submit">@lang('Send')</button>
</form>
@endsection