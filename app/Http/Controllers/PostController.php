<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private array $rules = ['title' => 'required|max:255', 'content' => 'required'];

    public function index() { return view('posts.index', ['posts' => Post::latest()->get()]); }
    public function create() { return view('posts.form'); }
    public function store(Request $request) {
        Post::create($request->validate($this->rules));
        return redirect()->route('posts.index')->with('success', 'Post created');
    }
    public function edit(Post $post) { return view('posts.form', compact('post')); }
    public function update(Request $request, Post $post) {
        $post->update($request->validate($this->rules));
        return redirect()->route('posts.index')->with('success', 'Post updated');
    }
    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted');
    }
}
