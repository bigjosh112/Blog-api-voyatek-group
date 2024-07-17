<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InteractionController extends Controller
{
    public function likePost($blog_id, $post_id, Request $request)
    {
        $post = Post::where('blog_id', $blog_id)->where('id', $post_id)->firstOrFail();

        $like = new Like();
        $like->user_id = Auth::id();
        $like->post_id = $post->id;
        $like->save();

        return response()->json(['message' => 'Post liked successfully'], 201);
    }
    public function commentPost(Request $request, $blog_id, Post $post)
    {
        if ($post->blog_id != $blog_id) {
            return response()->json(['error' => 'Post not found'], 404);
        }

        $request->validate([
            'comment' => 'required|string',
        ]);

        $comment = Comment::create([
            'post_id' => $post->id,
            'user_id' => Auth::id(),
            'comment' => $request->comment,
        ]);

        return response()->json($comment, 201);
    }
}
