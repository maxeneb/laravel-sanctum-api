@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Posts</h2>
    <a href="{{ route('posts.create') }}">Create New Post</a>
    @foreach ($posts as $post)
        <div>
            <h3><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h3>
            <p>By {{ $post->user->name }} on {{ $post->created_at->format('M d, Y') }}</p>
            <p>{{ Str::limit($post->body, 100) }}</p>
        </div>
    @endforeach
</div>
@endsection