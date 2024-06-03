<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home'); // Rediriger vers la page d'accueil
});
Route::get('/publications', [HomeController::class, 'publications'])->name('publications');
Route::get('/service1bureau1', [HomeController::class, 'service1bureau1'])->name('service1bureau1');
Route::get('/service1bureau2', [HomeController::class, 'service1bureau2'])->name('service1bureau2');
Route::get('/service1bureau3', [HomeController::class, 'service1bureau3'])->name('service1bureau3');
Route::get('/service1bureau4', [HomeController::class, 'service1bureau4'])->name('service1bureau4');
Route::get('/service1bureau5', [HomeController::class, 'service1bureau5'])->name('service1bureau5');
Route::get('/service1bureau6', [HomeController::class, 'service1bureau6'])->name('service1bureau6');
Route::get('/service1bureau7', [HomeController::class, 'service1bureau7'])->name('service1bureau7');
Route::get('/service1bureau8', [HomeController::class, 'service1bureau8'])->name('service1bureau8');
Route::get('/service1bureau9', [HomeController::class, 'service1bureau9'])->name('service1bureau9');
Route::get('/service1bureau10', [HomeController::class, 'service1bureau10'])->name('service1bureau10');
Route::get('/service1bureau11', [HomeController::class, 'service1bureau11'])->name('service1bureau11');
Route::get('/service1bureau12', [HomeController::class, 'service1bureau12'])->name('service1bureau12');
Route::get('/service1bureau13', [HomeController::class, 'service1bureau13'])->name('service1bureau13');


Route::get('/ecoleacademieregionale', [HomeController::class, 'ecoleacademieregionale'])->name('ecoleacademieregionale');
Route::get('/ecolecentreregional', [HomeController::class, 'ecolecentreregional'])->name('ecolecentreregional');
Route::get('/ecoledélégationprovincial', [HomeController::class, 'ecoledélégationprovincial'])->name('ecoledélégationprovincial');
Route::get('/ecolelyceecollegial', [HomeController::class, 'ecolelyceecollegial'])->name('ecolelyceecollegial');
Route::get('/ecolelyceequalifiantdereferencee', [HomeController::class, 'ecolelyceequalifiantdereference'])->name('ecolelyceequalifiantdereference');
Route::get('/ecolelyceequalifiantenseignement', [HomeController::class, 'ecolelyceequalifiantenseignement'])->name('ecolelyceequalifiantenseignement');
Route::get('/ecoleprimaire', [HomeController::class, 'ecoleprimaire'])->name('ecoleprimaire');
Route::get('/academies', [HomeController::class, 'academies'])->name('academies');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts', PostController::class)->middleware('auth');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.post'); // Ajouter la route post pour login
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.post');
