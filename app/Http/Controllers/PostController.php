<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'published_at' => 'nullable|date',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->storeAs('public/images', $imageName);
        $validated['image_url'] = asset('storage/images/'.$imageName);
    }

    Post::create($validated);

    return redirect()->route('allposts')->with('success', 'Post created successfully.');
}


    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'published_at' => 'nullable|date',
            'image_url' => 'nullable|url',
        ]);

        $post->update($validated);

        return redirect()->route('showpost', $post->id)->with('success', 'Post updated successfully.');
    }
}
