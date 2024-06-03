@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une nouvelle publication</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
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
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajouter une nouvelle publication</div>
                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" id="image" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Titre</label>
                            <input type="text" id="title" name="title" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Contenu</label>
                            <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
