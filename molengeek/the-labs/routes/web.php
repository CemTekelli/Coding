<?php

use App\Article;
use App\Testimonial;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

    // La partie ALL
    Route::get('/', 'AllController@home');
    Route::get('/service', 'AllController@service');
    Route::get('/bloog', 'AllController@blog');
    Route::get('/search', 'AllController@search');
    route::get('/blog/{id}', 'AllController@post');
    Route::post('/blog/{id}', 'ArticleController@comment');
    Route::get('/contact', 'AllController@contact');
    
    // Route::get('/valide', function(){
        //     $articles = Article::all();
        //     return view('back_office.valide', compact('articles'));
        // });
        
        
        
// AUTH 
Auth::routes();

Route::get('/home', function() {
    return view('back_office.profil');
})->name('home')->middleware('auth');

Route::resource('/profil', 'ProfilController')->middleware('auth');
Route::post('/profil/{id}/img', 'ProfilController@img')->middleware('auth');;
Route::get('/password', 'ProfilController@password')->middleware('auth');;
Route::get('/password/{id}/reset', 'ProfilController@change')->middleware('auth');;
Route::resource('/nav', 'NavController')->middleware(['auth', 'isAdminMaster']);
Route::resource('/titre','TitleController')->middleware(['auth', 'isAdminMaster']);
// Logo et Slogan Dans banner
Route::resource('/banner', 'BannerController')->middleware(['auth', 'isAdminMaster']);
Route::post('/logo/{id}/', 'BannerController@logo')->middleware(['auth', 'isAdminMaster']);
Route::post('/slogan/{id}/', 'BannerController@slogan')->middleware(['auth', 'isAdminMaster']);
Route::resource('/about', 'PresentationController')->middleware(['auth', 'isAdminMaster']);
Route::resource('/testimonial', 'TestimonialController')->middleware(['auth', 'isAdminMaster']);
Route::resource('/seervice', 'ServiceController')->middleware(['auth', 'isAdminMaster']);
Route::resource('/ready', 'ReadyController')->middleware(['auth', 'isAdminMaster']);
Route::resource('/contaact', 'ContactController')->middleware(['auth', 'isAdminMaster']);
Route::resource('/team', 'TeamController')->middleware(['auth', 'isWebmaser']);
Route::resource('/newsletter', 'NewsletterController');
Route::resource('/article', 'ArticleController')->middleware(['auth', 'isRedacteur']);
    // Test newsletter EVENT et LINSTEREN
Route::resource('/newsletter', 'NewsletterController');
Route::resource('/mailbox', 'MailController');
Route::resource('/google', 'GoogleController')->middleware(['auth', 'isAdminMaster']);
Route::resource('/footer', 'FooterController')->middleware(['auth', 'isAdminMaster']);

// Route::resource('/blog', 'BlogController');


