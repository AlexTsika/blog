<h1>Edit blog post</h1>

<form method="POST" action="/blogs/{{ $blog->id }}">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ $blog->title }}" required>
    </div>
    <div>
        <label for="content">Content</label>
        <textarea id="content" name="content" required>{{ $blog->content }}</textarea>
    </div>
    <button type="submit">Update Post</button>
</form>