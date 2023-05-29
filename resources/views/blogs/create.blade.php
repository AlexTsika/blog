<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">

    <div class="container-fluid">
        <h1 class="text-center mt-5 mb-5">Create New Post</h1>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <form method="POST" action="/blogs" class="needs-validation" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                        <div class="invalid-feedback">Please provide a title.</div>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" id="content" name="content" required></textarea>
                        <div class="invalid-feedback">Please provide some content.</div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </form>            
            </div>
        </div>
    </div>

</body>
</html>