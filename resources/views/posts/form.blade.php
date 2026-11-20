@extends('posts.layout')
@section('content')
<form method="POST" action="{{ isset($post) ? route('posts.update', $post) : route('posts.store') }}">
  @csrf
  @if(isset($post)) @method('PUT') @endif
  <div class="mb-3">
    <label>Title</label>
    <input name="title" class="form-control" value="{{ old('title', $post->title ?? '') }}">
    @error('title')<small class="text-danger">{{ $message }}</small>@enderror
  </div>
  <div class="mb-3">
    <label>Content</label>
    <textarea name="content" class="form-control" rows="4">{{ old('content', $post->content ?? '') }}</textarea>
    @error('content')<small class="text-danger">{{ $message }}</small>@enderror
  </div>
  <button class="btn btn-success">Save</button>
  <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
