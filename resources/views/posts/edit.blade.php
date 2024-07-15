@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Post</h2>
    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required>
        </div>
        <div>
            <label for="body">Body</label>
            <textarea id="body" name="body" required>{{ old('body', $post->body) }}</textarea>
        </div>
        <button type="submit">Update Post</button>
    </form>
</div>
@endsection