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
    // ARRAY - I METODO
    $data = [
        'content'   => 'Lorem Ipsum dolor...',
        'name'      => 'Stefano',
        'surname'   => 'Cardillo'
    ];

    //INVIO ARRAY - I METODO    
    return view('home', $data);
    
});

Route::get('/about-us', function () {

    //CONTENT - II METODO
    $content = 'Lorem ipsum dolor sit...';
    $address = 'Via Risorgimento 420, Napoli (NA)';
    $story = 'Lorem ipsum asoioiadnvio nsadvoi nsadoivnaso dnvaosdn voafvoia ndovnasdv na';
    
    //INVIO CONTENT - II METODO
    return view('about_us', compact('content', 'address', 'story'));

});