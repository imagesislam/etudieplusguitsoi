<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue home.blade.php dans resources/views
        return view('home', compact('posts'));
    }
    

    public function publications()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('publications', compact('posts'));
    }
















    
    public function service1bureau1()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('services/service1/service1bureau1', compact('posts'));
    }
    public function service1bureau2()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('services/service1/service1bureau2', compact('posts'));
    }
    public function service1bureau3()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('services/service1/service1bureau3', compact('posts'));
    }
    public function service1bureau4()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('services/service1/service1bureau4', compact('posts'));
    }
    public function service1bureau5()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('services/service1/service1bureau5', compact('posts'));
    }
    public function service1bureau6()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('services/service1/service1bureau6', compact('posts'));
    }
    public function service1bureau7()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('services/service1/service1bureau7', compact('posts'));
    }
    public function service1bureau8()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('services/service1/service1bureau8', compact('posts'));
    }
    public function service1bureau9()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('services/service1/service1bureau9', compact('posts'));
    }
    public function service1bureau10()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('services/service1/service1bureau10', compact('posts'));
    }
    public function service1bureau11()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('services/service1/service1bureau11', compact('posts'));
    }
    public function service1bureau12()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('services/service1/service1bureau12', compact('posts'));
    }
    public function service1bureau13()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('services/service1/service1bureau13', compact('posts'));
    }
















    public function academies()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('academies', compact('posts'));
    }
    public function ecoleacademieregionale()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('ecoleacademieregionale', compact('posts'));
    }
    public function ecolecentreregional()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('ecolecentreregional', compact('posts'));
    }
    public function ecoledélégationprovincial()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('ecoledélégationprovincial', compact('posts'));
    }
    public function ecolelyceecollegial()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('ecolelyceecollegial', compact('posts'));
    }
    public function ecolelyceequalifiantdereferencee()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('ecolelyceequalifiantdereferencee', compact('posts'));
    }
    public function ecolelyceequalifiantenseignement()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('ecolelyceequalifiantenseignement', compact('posts'));
    }
    public function ecoleprimaire()
    {
        // Récupère toutes les publications
        $posts = Post::all();

        // Passe les publications à la vue publications.blade.php dans resources/views
        return view('ecoleprimaire', compact('posts'));
    }
}
