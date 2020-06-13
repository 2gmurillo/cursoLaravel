@extends('layout')
@section('content')
<h1>{{__('Portfolio')}}</h1>
<ul>
  @forelse ($projects as $project)
  <li>
    <a href="{{ route('projects.show', $project) }}">
      {{ $project->title }}
    </a>
  </li>
  @empty
  <p>@lang('No projects')</p>
  @endforelse
  {{$projects->links()}}
</ul>
@endsection