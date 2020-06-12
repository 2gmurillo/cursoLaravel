@extends('layout')
@section('content')
<h1>{{__('Portfolio')}}</h1>
@forelse ($portfolio as $proyect)
<ul>
  <li>{{ $proyect['title'] }}</li>
</ul>
@empty
<p>No users</p>
@endforelse
@endsection