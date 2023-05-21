<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        // Fetch all blog posts and pass them to a view
        $blogs = Blog::all();

        return view('blogs.index', ['blogs' => $blogs]);
    }

    public function create()
    {
        // Return a view that contains a form to create a new blog post
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        // Validate and save new blog post data from $request, then redirect
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();

        return redirect('/blogs');
    }

    public function show($id)
    {
        // Fetch a single blog post by $id and pass it to a view
        $blog = Blog::findOrFail($id);
    
        return view('blogs.show', ['blog' => $blog]);
    }

    public function edit($id)
    {
        // Fetch a single blog post by $id, pass it to a view with a form for editing
        $blog = Blog::findOrFail($id);

        return view('blogs.edit', ['blog' => $blog]);
    }

    public function update(Request $request, $id)
    {
        // Validate and update blog post data from $request for the post with $id, then redirect
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
    
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();
    
        // Flash a success message to the session
        $request->session()->flash('status', 'Blog post updated successfully!');
    
        return redirect('/blogs');
    }    

    public function destroy($id)
    {
        // TODO: Delete the blog post by $id, then redirect
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect('/blogs');
    }
}