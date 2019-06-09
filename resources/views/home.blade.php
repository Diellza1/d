@extends('layout')

@section('content')
<h1>Home</h1>
<h3> Postimet </h3>

<ul>
	@foreach($posts as $post)
		<li>{{$post}}</li>
	@endforeach
</ul>



@endsection