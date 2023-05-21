<h1>Create a new blog post</h1>

<form method="POST" action="/blogs">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" required>
    </div>
    <div>
        <label for="content">Content</label>
        <textarea id="content" name="content" required></textarea>
    </div>
    <button type="submit">Create Post</button>
</form>