<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return response()->json(Blog::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'nullable|url',
        ]);

        $blog = Blog::create($request->all());

        return response()->json($blog, 201);
    }

    public function show(Blog $blog)
    {
        $blog->load('posts');

        return response()->json($blog, 200);
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'image_url' => 'nullable|url',
        ]);

        $blog->update($request->all());

        return response()->json($blog, 200);
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return response()->json(null, 204);
    }
}
