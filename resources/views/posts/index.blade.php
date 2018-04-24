@extends('layouts.app')

@section('content')
	<h1>Posts</h1>
	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div class="card">
				<div class="card-body">
					<h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
					<small>by {{$post->user['name']}}</small>
				</div>
			</div>
			<br>
		@endforeach

		{{-- pagination --}}
		<div class="d-flex justify-content-center">
			{{$posts->links()}}
		</div>
	@else
		<p>No posts found</p>
	@endif
@endsection