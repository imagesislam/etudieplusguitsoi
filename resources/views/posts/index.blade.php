<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Publications</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img-top {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        .card {
            height: 350px;
        }
        .card-body {
            overflow-y: auto;
            height: 150px;
        }
        .card-title {
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
        }
        .card-text {
            font-size: 1rem;
        }
        .card-footer {
            background-color: #fff;
            border-top: none;
        }
        .btn {
            font-size: 0.875rem;
            padding: 0.375rem 0.75rem;
        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="mb-4">Liste des publications</h1>
        </div>
        <div class="col-md-4 text-right">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Ajouter une publication</a>
        </div>
    </div>
    
    <div class="row mt-4">
        @foreach($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                @if($post->image)
                <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" alt="Image de la publication">
                @endif
                <div class="card-body" style="text-align:right; direction:rtl;">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-primary btn-sm">Modifier</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
