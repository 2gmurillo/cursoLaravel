@extends('layout')
@section('content')
<h1>{{__('Create a new project')}}</h1>

<form class="form" action="{{ route('projects.store') }}" method="POST">
  @csrf
  <input class="input" type="text" name="title" placeholder="@lang('The project title')" value="{{old('title')}}">
  {!! $errors->first('title', '<p class="error-msg">:message</p>') !!}
  <input class="input" type="text" name="url" placeholder="@lang('The project url')" value="{{old('url')}}">
  {!! $errors->first('url', '<p class="error-msg">:message</p>') !!}
  <textarea class="textarea" name="description" placeholder="@lang('Description')...">{{old('description')}}</textarea>
  {!! $errors->first('description', '<p class="error-msg">:message</p>') !!}
  <button class="button" type="submit">@lang('Save')</button>
</form>
@endsection