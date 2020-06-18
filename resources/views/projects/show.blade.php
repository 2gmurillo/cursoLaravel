@extends('layout')
@section('content')
<div class="card">
  <h1 class="card__title">{{$project->title}}</h1>
  <img class="card__image" src="/storage/{{$project->image}}" alt="{{$project->title}}">
  <div class="card__description">
    <div class="card__description--container">
      <p>{{$project->description}}</p>
      <p>{{$project->created_at->diffForHumans()}}</p>
    </div>
  </div>
</div>
<div class="card__buttons">
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
</div>
@endsection