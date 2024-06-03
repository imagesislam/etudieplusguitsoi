<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une publication</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .card {
            margin-top: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #4d6886;
            color: #fff;
        }
        .btn-primary {
            background-color: #f46e27;
            border-color: #f46e27;
        }
        .btn-primary:hover {
            background-color: #e65a20;
            border-color: #e65a20;
        }
        /* Custom styles for form elements */
        .form-group {
            margin-bottom: 20px;
        }
        .form-label {
            margin-bottom: 5px;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">Modifier une publication</div>
                <div class="card-body">
                    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title" class="form-label">Titre</label>
                            <input type="text" id="title" name="title" class="form-control" value="{{ $post->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="content" class="form-label">Contenu</label>
                            <textarea id="content" name="content" class="form-control" rows="5" required>{{ $post->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" id="image" name="image" class="form-control">
                            @if($post->image)
                                <img src="{{ asset('storage/'.$post->image) }}" alt="Image de la publication" class="img-fluid mt-3">
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
