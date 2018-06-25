@extends('layouts.master')
@section('header')
	<h1>List Breed </h1>
@stop
@section('content')
	<table class="table">
		<tr>
			<th>STT</th>
			<th>Name</th>	
			<th>Breed</th>
			<th>Price</th>
		</tr>
		@foreach($dogs as $dog)
		<tr>
			<td>{{$dog->id}}</td>
			<td>{{$dog->name}}</td>
			<td>{{$dog->breed->name}}</td>
			<td>{{$dog->price}}</td>
		</tr>
		@endforeach

	</table>
@stop