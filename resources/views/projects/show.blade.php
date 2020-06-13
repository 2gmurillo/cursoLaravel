@extends('layout')
@section('content')
<h1>{{$project->title}}</h1>
<p>{{$project->description}}</p>
<p>{{$project->created_at->diffForHumans()}}</p>
<div class="button">
  <a class="link" href="{{ route('projects.edit', $project) }}">@lang('Edit')</a>
</div>
@endsection