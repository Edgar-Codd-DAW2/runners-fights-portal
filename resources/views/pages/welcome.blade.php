@extends('layouts.default')
@section('content')

<table class="table table-responsive-xl table-hover mt-1">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Money</th>
      <th scope="col">Points</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($data as $user)
  <tr>
     <th scope="row">{{$loop->index}}</th>
     <th>{{ $user->name }}</th>
     <th>{{ $user->email }}</th>
     <th>{{ $user->points }}</th>
     <th>{{ $user->points }}</th>
  </tr>
   @endforeach
    
  </tbody>
</table>


@stop