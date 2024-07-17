<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($blog_id)
    {
        $posts = Post::where('blog_id', $blog_id)->get();
        return response()->json($posts, 200);
    }

    public function store(Request $request, $blog_id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image_url' => 'nullable|url',
        ]);

        $post = Post::create([
            'blog_id' => $blog_id,
            'title' => $request->title,
            'content' => $request->content,
            'image_url' => $request->image_url,
        ]);

        return response()->json($post, 201);
    }

    public function show($blog_id, Post $post)
    {
        if ($post->blog_id != $blog_id) {
            return response()->json(['error' => 'Post not found'], 404);
        }

        $post->load('likes', 'comments');

        return response()->json($post, 200);
    }

    public function update(Request $request, $blog_id, Post $post)
    {
        if ($post->blog_id != $blog_id) {
            return response()->json(['error' => 'Post not found'], 404);
        }

        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
            'image_url' => 'nullable|url',
        ]);

        $post->update($request->all());

        return response()->json($post, 200);
    }

    public function destroy($blog_id, Post $post)
    {
        if ($post->blog_id != $blog_id) {
            return response()->json(['error' => 'Post not found'], 404);
        }

        $post->delete();

        return response()->json(null, 204);
    }
}
