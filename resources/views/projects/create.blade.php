@extends('layout')
@section('content')
<h1>{{__('Create a new project')}}</h1>

<form class="form" action="{{ route('projects.store') }}" method="POST">
  @include('projects._form', ['buttonText'=>'Save'])

</form>
@endsection