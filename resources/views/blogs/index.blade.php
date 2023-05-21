<a href="/blogs/create">Create a new post</a>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if($blogs->isEmpty())
    <p>No posts yet. <a href="/blogs/create">Create a new post</a></p>
@else
    @foreach ($blogs as $blog)
        <h2>{{ $blog->title }}</h2>
        <p>{{ $blog->content }}</p>
        
        <!-- Delete form -->
        <form method="POST" action="/blogs/{{ $blog->id }}" onsubmit="return confirm('Do you really want to delete this post?');">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        
    @endforeach
@endif