@extends('layout')
@section('content')
<div class="card">
  <div class="card__title">
    <h1>{{$project->title}}</h1>
  </div>
  <div class="card__description">
    <div class="card__description--container">
      <p>{{$project->description}}</p>
      <p>{{$project->created_at->diffForHumans()}}</p>
    </div>
  </div>
</div>
@auth
<div class="button">
  <a class="link" href="{{ route('projects.edit', $project) }}">@lang('Edit')</a>
</div>
<div class="button">
  <a class="link" href="{{ route('projects.delete', $project) }}">@lang('Delete')</a>
</div>
@endauth
<div class="button">
  <a class="link" href="{{ route('projects.index') }}">@lang('Back')</a>
</div>
@endsection