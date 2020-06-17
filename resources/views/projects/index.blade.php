@extends('layout')
@section('content')
<h1>{{__('Portfolio')}}</h1>
@auth
<div class="button">
  <a class="link" href="{{ route('projects.create') }}">@lang('Create')</a>
</div>
@endauth
<div class="projects__list">
  @forelse ($projects as $project)
  <div class="card2">
    <div class="card2__image">
      @if ($project->image)
      <img src="/storage/{{ $project->image }}" alt="{{ $project->title }}">
      @else
      <img src="/storage/images/juango.png" alt="{{ $project->title }}">
      @endif
    </div>
    <div class="card2__description">
      <div class="card2__description--container">
        <h3>{{ $project->title }}</h3>
        <p>{{$project->created_at->format('d/m/y')}}</p>
        <button class="btn"><a class="projects__item--link link"
            href="{{ route('projects.show', $project) }}">Ver</a></button>
      </div>
    </div>
  </div>
  @empty
  <p class="no-projects">@lang('No projects')</p>
  <p class="no-projects">@lang('No projects')</p>
  @endforelse
</div>
{{$projects->links()}}
@endsection