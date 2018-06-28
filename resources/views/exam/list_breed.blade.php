@extends('layouts.master')
@section('header')
	<h1>List Breed  </h1>
@stop
@section('content')
	<table class="table">
		<tr>
			<th>STT</th>
			<th>Name</th>
		</tr>
		@foreach($breeds as $breed)
		<tr>
			<td>{{$breed->id}}</td>
			<td>{{$breed->name}}</td>
		</tr>
		@endforeach


	</table>
@stop