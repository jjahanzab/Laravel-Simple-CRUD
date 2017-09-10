@extends('layout.app')

@section('content')
	<br>
	<a href="{{url('post/create')}}" class="btn btn-info pull-right">New Post</a>
	<center><h1>Post List</h1></center>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<table class="table table-hover table-bordered">
				<tr>
					<th>NO.</th>
					<th>POST</th>
					<th>TIME</th>
					<th>ACTION</th>
				</tr>
				<?php $i=1; ?>
				@foreach($posts as $post)
				<tr>
					<td>{{$i++}}</td>
					<td>
				  		<a href="{{url('post/'.$post->id)}}"><strong>{{$post->title}}</strong></a>
					</td>
					<td>
						{{$post->created_at->diffForHumans()}}
					</td>
					<td>
						<a href="{{url('post/'.$post->id.'/edit')}}" class="btn-sm btn-success pull-right">
							<span class="fa fa-edit"></span>
						</a>
						<form action="{{url('/post/'.$post->id)}}" method="POST" class="form pull-right">
							{{method_field('DELETE')}}
							{{csrf_field()}}
							<button type="submit"><span class="fa fa-trash"></span></button>
						</form>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>	
	
@endsection
