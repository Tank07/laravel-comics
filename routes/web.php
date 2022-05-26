<?php

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

Route::get('/', function () {
    return view('home');
});

//Rotta per fumetti
//url: localhost:8080/fumetti
Route::get('/fumetti', function () {

    $comics = config('comics');
    dump($comics);

    return view('fumetti', [ 'comics' => $comics ] );
})->name('fumetti');

Route::get('/fumetti/{id}', function ($id) {

    $comics = config('comics');
   
    if( is_numeric( $id ) && $id < count( $comics )){
      
        $comic = $comics[$id];

        return view('fumetto', [ 'fumettoUno' => $comic ] );

    } else {
        abort(404);
    }

})->name('fumetto');
