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



// we can also create a parameterised route

// Route::get('/formpage/{id?}',function(string $id = null) {
//     return "<h1> form_id :".$id."</h1>";

// });

// we can also give the condition in our routing
// Route::get('/formpage/{id?}',function(string $id = null) {
//     return "<h1> form_id :".$id."</h1>";

// })->whereNumber('id');

// we can also predefined value if it match then it will return 

// Route::get('/formpage/{id?}',function(string $id = null) {
//     return "<h1> form_id :".$id."</h1>";

// })->whereIn('id',['painting','movie','song' ]);

// route for first page

Route::get('/formpage', function () {
    return view('form');
});

Route :: get('/firstpage',function(){
    return view('first');

});
Route::get('/aboutsssss',function(){
    return view('abouts');
})->name('about-us');

// we can also group the routing 

Route::prefix('page')->group(function(){

    // sime route the link 

});

// default version if user access karna chahta h wo page jo  hai hi ni to yaha pr fallback aa jayega
Route::fallback(function(){

    return "<h1> page not found </h1>";

});