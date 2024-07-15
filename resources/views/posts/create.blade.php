@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Post</h2>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        </div>
        <div>
            <label for="body">Body</label>
            <textarea id="body" name="body" required>{{ old('body') }}</textarea>
        </div>
        <button type="submit">Create Post</button>
    </form>
</div>
@endsection