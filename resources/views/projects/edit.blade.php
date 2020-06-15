@extends('layout')
@section('content')
<h1>{{__('Edit') . ' ' . $project->title}}</h1>

<form class="form" action="{{ route('projects.update', $project) }}" method="POST">
  @method('PATCH')
  @include('projects._form', ['buttonText'=>'Update'])
  <div class="button">
    <a class="link" href="{{ route('projects.show', $project) }}">@lang('Back')</a>
  </div>
</form>
@endsection