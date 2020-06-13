@extends('layout')
@section('content')
<h1>@lang('Are you sure you want to delete this proyect')? - {{$project->title}}</h1>
<form class="form" action="{{ route('projects.destroy', $project) }}" method="POST">
  @method('DELETE')
  @csrf
  <button class="button" type="submit">@lang('Yes')</button>
  <div class="button">
    <a class="link" href="{{ route('projects.show', $project) }}">@lang('No')</a>
  </div>
</form>
@endsection