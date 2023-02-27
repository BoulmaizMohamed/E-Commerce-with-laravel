<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommercerController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/reg', function () {
    return view('auth/register');
});


Route::get('/build', function () {
    return view('build');
});


Route::get('/CONTACT', function () {
    return view('sendemail');
});

Route::get('/login', function () {
    return view('login2');
});


Route::get('/login2', function () {
    return view('login2')->name('login2');
});




Route::post('/login/custom1', [

    'uses'=>'LoginController@login',
    'as'=>'login.custom'
]);

Route::post('/sendemail',[App\Http\Controllers\HomeController::class,'sendemail']);

Route::post('/login/custom', [App\Http\Controllers\LoginController::class, 'login'])->name('login.custom');

Route::get('/laptops', [App\Http\Controllers\HomeController::class, 'LAPTOPS']);

Route::get('/Accesorys', [App\Http\Controllers\HomeController::class, 'Accesorys']);
 

Route::get('/produit',[CommercerController::class, 'produit'])->middleware('auth');

Route::get('/admin/accesorys',[CommercerController::class, 'accesorys'])->middleware('auth');

Route::get('/admin/build',[CommercerController::class, 'adminbuild'])->middleware('auth');

Route::get('/admin/email',[CommercerController::class, 'email'])->middleware('auth');

Route::post('/produit/Delete',[CommercerController::class, 'Delete_produit'])->middleware('auth');

Route::post('/produit/accesorys',[CommercerController::class, 'Delete_acc'])->middleware('auth');

Route::post('/produit/update',[CommercerController::class, 'Update_produit'])->middleware('auth');

Route::post('/produit/accesorys',[CommercerController::class, 'Update_acc'])->middleware('auth');


Route::post('/add_produit',[CommercerController::class, 'add_produit'] )->middleware('auth');

Route::post('/add_accesory',[CommercerController::class, 'add_accesory'] )->middleware('auth');

Route::post('/add_chip',[CommercerController::class, 'add_chip'] )->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin_index');


//client

Route::get('/client', [App\Http\Controllers\clientController::class, 'index'])->middleware('auth');

Route::get('/client/contact', [App\Http\Controllers\clientController::class, 'contact'])->middleware('auth');

Route::get('/client/laptops', [App\Http\Controllers\clientController::class, 'produit'])->middleware('auth');

Route::get('/client/accesorys', [App\Http\Controllers\clientController::class, 'accesorys'])->middleware('auth');

Route::get('/client/cart', [App\Http\Controllers\clientController::class, 'show_cart'])->middleware('auth');

Route::get('/client/build', [App\Http\Controllers\clientController::class, 'show_build'])->middleware('auth');




Route::post('/client/cart/add', [App\Http\Controllers\clientController::class, 'add_cart'])->middleware('auth');

Route::post('/client/cart/delete', [App\Http\Controllers\clientController::class, 'delete_cart'])->middleware('auth');

Route::post('/CLIENT/BUILD', [App\Http\Controllers\clientController::class, 'build'])->middleware('auth');

Route::post('/CLIENT/buy', [App\Http\Controllers\clientController::class, 'buy'])->middleware('auth');

Route::post('/client/sendemail', [App\Http\Controllers\clientController::class, 'sendemail'])->middleware('auth');





Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout']);



Auth::routes();