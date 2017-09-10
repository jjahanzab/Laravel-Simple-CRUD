@extends('layout.app')

@section('content')
	<br>
	<a href="{{url('post')}}" class="btn btn-default pull-right">Back</a>
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<center><h1>{{substr(Route::currentRouteName(),5)}} Post</h1></center>
			<form action="{{url('post/'.$post->id)}}" method="POST" class="form-horizontal">
			{{method_field('PUT')}}
				<fieldset>
					<div class="form-group">
						<input type="text" name="title" class="form-control" placeholder="title" value="{{$post->title}}">
					</div>
					<div class="form-group">
						<textarea placeholder="Body" name="body" id="" cols="30" rows="10" class="form-control">{{$post->body}}</textarea>
					</div>
					{{csrf_field()}}
					<div class="form-group">
						<button type="submit" class="btn btn-success">Update</button>
					</div>
				</fieldset>
			</form>
			@if(count($errors) > 0)
			@foreach($errors->all() as $error)
				<p class="alert alert-danger">{{$error}}</p>
			@endforeach
		@endif
		</div>
	</div>
	

@endsection
