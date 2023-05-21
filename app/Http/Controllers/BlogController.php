<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Fetch all blog posts and pass them to a view
        $posts = Blog::all();

        return view('blog.index', ['posts' => $posts]);        
    }

    public function create()
    {
        // TODO: Return a view that contains a form to create a new blog post
    }

    public function store(Request $request)
    {
        // TODO: Validate and save new blog post data from $request, then redirect
    }

    public function show($id)
    {
        // TODO: Fetch a single blog post by $id and pass it to a view
    }

    public function edit($id)
    {
        // TODO: Fetch a single blog post by $id, pass it to a view with a form for editing
    }

    public function update(Request $request, $id)
    {
        // TODO: Validate and update blog post data from $request for the post with $id, then redirect
    }

    public function destroy($id)
    {
        // TODO: Delete the blog post by $id, then redirect
    }
}