<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">

    <div class="container-fluid">
        <h1 class="text-center mt-5 mb-5">Edit Post</h1>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <form method="POST" action="/blogs/{{ $blog->id }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" id="content" name="content" required>{{ $blog->content }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>