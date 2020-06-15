@extends('layout')
@section('content')
<h1>{{__('Portfolio')}}</h1>
@auth
<div class="button">
  <a class="link" href="{{ route('projects.create') }}">@lang('Create')</a>
</div>
@endauth
<ul class="projects__list">
  @forelse ($projects as $project)
  <li class="projects__item">
    <a class="projects__item--link" href="{{ route('projects.show', $project) }}">
      <span class="projects__item--title">{{ $project->title }}</span><span class="projects__item--date">{{$project->created_at->format('d/m/y')}}</span>
    </a>
  </li>
  @empty
  <p>@lang('No projects')</p>
  @endforelse
</ul>
{{$projects->links()}}
@endsection