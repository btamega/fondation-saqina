<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentairesController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\InvocationsController;
use App\Http\Controllers\VolumeController;
use App\Http\Controllers\PersonnalitesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrieresController;
use App\Http\Controllers\SanteController;
use App\Http\Controllers\NawawiController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/invocation_evocation/{category}/invocation_list", [InvocationsController::class, 'index']);
Route::get("/salat/{category}", [PrieresController::class, 'index']);


Route::get('/invocation_evocation', [VolumeController::class, 'index']);

Route::get('/', [ArticlesController::class, 'index']);

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/fatwas/preambule', function () {
    return view('preambule');
});
Route::get('/salats/La-prière', function () {
    return view('salat/priere');
});
Route::get('/salats/Horaires', function () {
    return view('salat/horaire');
});
Route::get('/salats/Adhan', function () {
    return view('salat/adhan');
});
Route::get('/salats/vendredi', function () {
    return view('salat/vendredi');
});
Route::get('/salats/reparation', function () {
    return view('salat/reparation');
});
Route::get('/fatwas/sahih-bukhari', function () {
    return view('fatwas/hadith');
});
Route::get('/contact', [CommentairesController::class, 'index']);

Route::get('/coran_hadith', function () {
    return view('coran_hadith');
});
Route::get('/fatwas', function () {
    return view('fatwas');
});
Route::get('/fatwas-apropos', function () {
    return view('fatwas/about');
});
Route::get('/fatwas/personnalites', [PersonnalitesController::class, 'index']);
Route::get('/fatwas/40-hadiths-nawawi', [NawawiController::class, 'index']);
Route::get('/fatwas/hadj-omra', function(){
    return view('hadj');
});

Route::get('/articles/{id}', [HomeController::class, 'index']);
Route::get('/pass_sante', [SanteController::class, 'index']);
Route::get('/salat', function () {
    return view('salat');
});
Route::get('/chahada', function () {
    return view('chahada');
});
Route::get('/showAllMessages', function () {
    return view('admin/showAll');
});
Route::post('/sentComment', [CommentairesController::class, 'sendEmail'])->name('contact.send');
Route::get('/fondation', [ImagesController::class, 'index']);
Route::get('/login', [UserController::class, 'index']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/connection', [UserController::class, 'authenticate']);
Route::post('/inscrire', [UserController::class, 'inscrire']);
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/logout', [AdminController::class, 'logout']);
Route::get('/news', [AdminController::class, 'articles']);
Route::post('/addArticle', [AdminController::class, 'store']);
Route::get('/delete/{id}', [AdminController::class, 'delete']);
Route::post('/update/{id}', [AdminController::class, 'update']);
Route::get('/edit/{id}', [AdminController::class, 'edit']);
Route::get('/archives/delete/{id}', [AdminController::class, 'deleteArchive']);
Route::post('/archives/update/{id}', [AdminController::class, 'updateArchive']);
Route::get('/archives/edit/{id}', [AdminController::class, 'editArchive']);
Route::get('/archives', [AdminController::class, 'archive']);
Route::post('/addPhoto', [AdminController::class, 'storePhoto']);
Route::get('/notification/{id}', [AdminController::class, 'notification']);

