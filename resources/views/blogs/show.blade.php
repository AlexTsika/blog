<h1>{{ $blog->title }}</h1>
<p>{{ $blog->content }}</p>

<a href="/blogs/{{ $blog->id }}/edit">Edit</a>

<form method="POST" action="/blogs/{{ $blog->id }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>