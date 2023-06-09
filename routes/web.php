<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/', function () {
    return view('welcome');
});



Route::get('about', function () {
    $about = 'This is about page';
    $about2 = 'This is about 2';
    return view('about.index',compact('about', 'about2') );
});

Route::get('contact', function () {
    return view('contact');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('about', function () {
//     return "<h1>About Page</h1>";
// });

// Route::get ('contact', function () {
//     return "<h1>Contact Page</h1>";
// });

// Route::get ('contact/{id}', function ($id) {
//     return $id;
// })->name('edit-contact');

// Route::get('home', function(){
//     return "<a href = '".route('edit-contact',1)."'>About</a>";
// });

// /** Route Grouping */
// Route::group(['prefix' => 'customer' ], function(){
//     Route::get('/', function () {
//         return "<h1>Customer List</h1>";
//     });

//     Route::get('/create', function () {
//         return "<h1>Customer create</h1>";
//     });

//     Route::get('/show', function () {
//         return "<h1>Customer show</h1>";
//     });

// });

// /** Fallback Route */

// Route::fallback(function(){
//   return "Route Not Exsists";
// });
