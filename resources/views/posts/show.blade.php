@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $post->title }}</h2>
    <p>By {{ $post->user->name }} on {{ $post->created_at->format('M d, Y') }}</p>
    <div>
        {{ $post->body }}
    </div>
    
    @can('update', $post)
        <a href="{{ route('posts.edit', $post) }}">Edit</a>
    @endcan
    
    @can('delete', $post)
        <form method="POST" action="{{ route('posts.destroy', $post) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endcan
    
    <h3>Comments</h3>
    @foreach ($post->comments as $comment)
        <div>
            <p>{{ $comment->body }}</p>
            <p>By {{ $comment->user->name }} on {{ $comment->created_at->format('M d, Y') }}</p>
            @can('update', $comment)
                <a href="{{ route('comments.edit', $comment) }}">Edit</a>
            @endcan
            @can('delete', $comment)
                <form method="POST" action="{{ route('comments.destroy', $comment) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            @endcan
        </div>
    @endforeach
    
    <h4>Add a comment</h4>
    <form method="POST" action="{{ route('comments.store', $post) }}">
        @csrf
        <textarea name="body" required></textarea>
        <button type="submit">Add Comment</button>
    </form>
</div>
@endsection