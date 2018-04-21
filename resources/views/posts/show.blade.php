@extends('layouts.app')

@section('content')
		<div class="card">
			<div class="card-body">
				<h4>{{$post->title}}</h4>
				<small>Written on {{$post->created_at}}</small>
				<p>{{$post->body}}</p>
				<br>
				<p class="d-flex">
					<a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>
					{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
						{{Form::hidden('_method', 'DELETE')}}
						{{Form::submit('Delete', ['class' => 'btn btn-outline-secondary'])}}
					{!!Form::close()!!}	
				</p>
				
			</div>
		</div>
@endsection