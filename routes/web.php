<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::any('/Ht4kdg3;ujeghb', function () {
    return view('about1');
})->name('about.us');

Route::get('/contactsjafggfasjhasfgeuyu', function () {
    return view('contact');
})->name('contact.us');

Route::get('/country', function () {
    return view('country');
})->middleware('country');

Route::get('/amar', function (Request $request) {
    $token = $request->session()->token();

    dd($token);

    //$token = csrf_token();

});








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';