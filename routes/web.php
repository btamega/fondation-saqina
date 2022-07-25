<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentairesController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategorieFatwasController;
use App\Http\Controllers\CategoryPrieresController;
use App\Http\Controllers\ChahadaController;
use App\Http\Controllers\FatwasController;
use App\Http\Controllers\HadithController;
use App\Http\Controllers\InvocationsController;
use App\Http\Controllers\VolumeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrieresController;
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
Route::get('/contact', [CommentairesController::class, 'index']);
Route::get('/fatwas', [FatwasController::class, 'index']);
Route::get('/fatwas-apropos', function () {
    return view('fatwas/about');
});
Route::get('/fatwas/{titre}', [FatwasController::class, 'show']);
Route::get('/articles/{id}', [HomeController::class, 'index']);
Route::get('/salat', [CategoryPrieresController::class, 'show']);
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
Route::post('/addInvocation', [AdminController::class, 'addInvocation']);
Route::get('/delete/{id}', [AdminController::class, 'delete']);
Route::post('/update/{id}', [AdminController::class, 'update']);
Route::get('/edit/{id}', [AdminController::class, 'edit']);
Route::get('/archives/delete/{id}', [AdminController::class, 'deleteArchive']);
Route::get('/categorie/delete/{id}', [CategoryPrieresController::class, 'destroy']);
Route::post('/archives/update/{id}', [AdminController::class, 'updateArchive']);
Route::get('/user/{id}', [AdminController::class, 'updateUser']);
Route::get('/admin/delete/{id}', [AdminController::class, 'deleteAdmin']);
Route::get('/archives/edit/{id}', [AdminController::class, 'editArchive']);
Route::get('/archives', [AdminController::class, 'archive']);
Route::post('/addPhoto', [AdminController::class, 'storePhoto']);
Route::get('/notification/{id}', [AdminController::class, 'notification']);
Route::get('/admin/hadith', [AdminController::class, 'hadith']);
Route::get('/admin/chahada', [AdminController::class, 'chahada']);
Route::get('/admin/invocations', [AdminController::class, 'invocation']);
Route::get('/admin/salat', [AdminController::class, 'salat']);
Route::get('/admin/fatwas', [AdminController::class, 'fatwas']);
Route::get('/admin/sante', [AdminController::class, 'sante']);
Route::post('/search', [UserController::class, 'search']);
Route::post('/volume', [AdminController::class, 'addVolume']);
Route::post('/addCategorie', [CategoryPrieresController::class, 'store']);
Route::post('/addCategorieFatwas', [CategorieFatwasController::class, 'store']);
Route::post('/addNewInvocation', [AdminController::class, 'addCategorie']);
Route::post('/addHadith', [HadithController::class, 'store']);
Route::get('/coran_hadith', [HadithController::class, 'show']);
Route::get('/chahada', [ChahadaController::class, 'show']);
Route::post('/addChahada', [ChahadaController::class, 'store']);
Route::post('/addPriere', [PrieresController::class, 'store']);
Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/delete/message/{id}', [CommentairesController::class, 'destroy']);
Route::get('/deleteAllMessages', [CommentairesController::class, 'deleteAll']);
Route::post('/addAdmin', [AdminController::class, 'addAdmin']);
Route::get('/fatwas/delete/{id}', [CategorieFatwasController::class, 'destroy']);
Route::post('/addFatwas', [FatwasController::class, 'store']);
Route::get('/error', function(){
    return view('error');
});

