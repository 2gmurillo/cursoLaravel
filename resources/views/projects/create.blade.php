@extends('layout')
@section('content')
<h1>{{__('Create a new project')}}</h1>

<form class="form" action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
  @include('projects._form', ['buttonText'=>'Save'])
  <div class="button">
    <a class="link" href="{{ route('projects.index') }}">@lang('Back')</a>
  </div>
</form>
@endsection