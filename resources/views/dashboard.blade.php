@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Dashboard</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <a class="btn btn-outline-secondary" href="/posts/create">Create Post</a>
        <hr>
        <h3>Your Blog Posts</h3>
        @if(count($posts) > 0)
            <table class="table table-striped">
                @foreach($posts as $post)
                    <tr>
                        <th>{{$post->title}}</th>
                        <th><a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a></th>
                        <th></th>
                    </tr>  
                @endforeach  
            </table>
        @else
            <br>
            <p>You have no post yet</p>
        @endif
    </div>
</div>

@endsection
