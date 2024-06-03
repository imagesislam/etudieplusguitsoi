<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Ajoutez cette ligne

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = new Post($request->only(['title', 'content']));

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $post->image = $path;
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Publication ajoutée avec succès');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post->update($request->only(['title', 'content']));

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }

            $path = $request->file('image')->store('images', 'public');
            $post->image = $path;
        }

        return redirect()->route('posts.index')->with('success', 'Publication modifiée avec succès');
    }

    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Publication supprimée avec succès');
    }
}
