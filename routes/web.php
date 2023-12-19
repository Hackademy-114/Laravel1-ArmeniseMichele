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

Route::get('/pokedex' , function(){
    $trainer = 'Michele';
    $pokemons = [
        ['name' => 'kyogre', 'type' => 'acqua'],
        ['name' => 'groudon', 'type' => 'terra'],
        ['name' => 'charizard', 'type' => 'fuoco'],
        ['name' => 'pikachu', 'type' => 'elettrico'],
        ['name' => 'lugia', 'type' => 'drago']
    ];
    return view('pokedex' , ['trainer' => $trainer , 'pokemons' => $pokemons]);
})->name('pokedex');

Route::get('/ClasseAulab' , function(){
    $teacher = 'Michele';
    $students = [
        ['name'=> 'Pippo', 'age'=>'30'],
        ['name'=> 'Pio', 'age'=>'40'],
        ['name'=> 'Gae', 'age'=>'25'],
        ['name'=> 'Gio', 'age'=>'26'],
        ['name'=> 'Nick', 'age'=>'28'],
    ];
    return view('ClasseAulab' , ['teacher'=>$teacher , 'students'=>$students]);
});

