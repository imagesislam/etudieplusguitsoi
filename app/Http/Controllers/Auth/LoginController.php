<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Valider les données du formulaire
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // L'utilisateur est authentifié, redirige-le vers la page des publications
            return redirect()->intended('/posts');
        }

        // Échec de l'authentification, rediriger vers la page de connexion avec un message d'erreur
        return redirect()->back()->withInput($request->only('email'))->withErrors(['email' => 'Email ou mot de passe incorrect']);
    }

    public function logout(Request $request)
    {
        auth()->logout();

        // Redirige l'utilisateur vers la page d'accueil après la déconnexion
        return redirect('/');
    }
}
