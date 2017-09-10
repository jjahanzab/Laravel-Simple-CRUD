@extends('layout.app')

@section('content')
	<br>
	<a href="{{url('todo/create')}}" class="btn btn-info pull-right">Add New</a>
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<center><h1>Todo List</h1></center>
			<ul class="list-group">
			  @foreach($todos as $todo)
			  	<li class="list-group-item">
			    <span class="pull-right text-danger">{{$todo->created_at->diffForHumans()}}</span>
				  <p>{{$todo->body}}</p>
			    </li>
			  @endforeach
			</ul>
		</div>
	</div>
@endsection