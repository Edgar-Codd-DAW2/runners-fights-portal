@extends('layouts.default')
@section('content')

Get listst of Users: 
@foreach ($data as $user)
   <p>{{ $user->userId }}</p>
   <p>{{ $user->userName }}</p>
   <p>{{ $user->password }}</p>
   <p>{{ $user->money }}</p>
   <p>{{ $user->points }}</p>

   @endforeach


   in the homepage UwU
@stop