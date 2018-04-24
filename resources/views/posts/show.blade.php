@extends('layouts.app')

@section('content')
		<div class="card">
			<div class="card-body">
				<h4>{{$post->title}}</h4>
				<br>
				<p>{{$post->body}}</p>
				<hr>
				<small>Written on {{$post->created_at}}</small>
				<br>
				<small>by {{$post->user['name']}}</small>
				<br>
				<br>
				<div class="d-block">
					@if(!Auth::guest())
						@if(Auth::user()->id == $post->user_id)	
							<a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>
							<br>
							<br>
							{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
								{{Form::hidden('_method', 'DELETE')}}
								{{Form::submit('Delete', ['class' => 'btn btn-outline-secondary'])}}
							{!!Form::close()!!}
						@endif
					@endif	
				</div>
				
			</div>
		</div>
@endsection