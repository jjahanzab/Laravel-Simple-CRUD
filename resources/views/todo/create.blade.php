@extends('layout.app')

@section('content')
	<br>
	<a href="{{url('todo')}}" class="btn btn-default pull-right">Back</a>
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<center><h1>Create New Item</h1></center>
			<form action="{{url('todo')}}" method="POST" class="form-horizontal">
				<fieldset>
					<div class="form-group">
						<textarea name="body" id="" cols="30" rows="10" class="form-control">
							
						</textarea>
					</div>
					{{csrf_field()}}
					<div class="form-group">
						<button type="submit" class="btn btn-success">Submit</button>
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
