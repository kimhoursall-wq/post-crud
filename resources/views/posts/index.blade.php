@extends('posts.layout')
@section('content')
<a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">New Post</a>
<table class="table table-bordered">
  <tr><th>#</th><th>Title</th><th>Content</th><th width="200">Action</th></tr>
  @foreach($posts as $post)
  <tr>
    <td>{{ $post->id }}</td>
    <td>{{ $post->title }}</td>
    <td>{{ $post->content }}</td>
    <td>
      <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning">Edit</a>
      <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete?')">
        @csrf @method('DELETE')
        <button class="btn btn-sm btn-danger">Delete</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>
@endsection
