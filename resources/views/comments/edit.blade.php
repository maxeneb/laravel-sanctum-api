@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Comment</h2>
    <form method="POST" action="{{ route('comments.update', $comment) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="body">Comment</label>
            <textarea id="body" name="body" required>{{ old('body', $comment->body) }}</textarea>
        </div>
        <button type="submit">Update Comment</button>
    </form>
</div>
@endsection