<?php
use App\Http\Controllers\FruitController;
use Illuminate\Support\Facades\Route;
use App\Models\Fruit;
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
    return view('welcome');
});


Route::get('/myview/{user}', function ($user) {
    return view('home', ['username' => $user]);
});

Route::get('/fruits', function () {
    $fruits = Fruit::all();
    return view('fruits', ['fruits' => $fruits]);
});

Route::get('/showFruits', [FruitController::class, 'getFruits']);
