@extends('layout.app')

@section('content')
	<br>
	<a href="{{url('post')}}" class="btn btn-default pull-right">Back</a>
	<center><h1>Post Detail</h1></center>
	<div class="row">
		<div class="col-lg-2">
			<br>
			{{$post->created_at->diffForHumans()}}
		</div>
		<div class="col-lg-10">
		  	<u><h2>{{$post->title}}</h2></u>
		  	<p>{{$post->body}}</p>
		</div>
	</div>	
@endsection	