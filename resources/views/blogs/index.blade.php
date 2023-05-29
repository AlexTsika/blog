<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">

    <div class="container-fluid">
        <h1 class="text-center mt-5 mb-5">Blog</h1>

        <div class="d-flex justify-content-center mb-5">
            <button type="button" class="btn btn-outline-primary" onclick="window.location.href='/blogs/create'">Create new post</button>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    
        @if($blogs->isEmpty())
            <p class="text-center">No posts yet.</p>
        @else
        <div class="row">
            
        </div>
            @foreach ($blogs->reverse() as $blog)
                <div class="row justify-content-center mb-5">
                    <div class="col-md-4">
                        <h5>{{ $blog->title }}</h5>
                        <p>{{ $blog->content }}</p>
                        <form action="{{ route('blogs.edit', $blog->id) }}" method="GET" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-outline-success mb-1">Edit</button>
                        </form>                        
                        <form method="POST" action="/blogs/{{ $blog->id }}" onsubmit="return confirm('Do you really want to delete this post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </div>
                
            @endforeach
        @endif    
    </div>

</body>
</html>