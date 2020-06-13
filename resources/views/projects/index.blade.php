@extends('layout')
@section('content')
<h1>{{__('Portfolio')}}</h1>
<div class="button">
  <a class="link" href="{{ route('projects.create') }}">@lang('Create')</a>
</div>
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
</ul>
{{$projects->links()}}
@endsection