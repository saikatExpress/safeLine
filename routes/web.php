<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\control\firstController;

use App\Http\Controllers\control\secondController;

use App\Http\Controllers\invokeController;

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


Route::get('/about', [firstController::class, 'index'])->name('about.us');



Route::get('/test', [secondController::class, 'SecondTest']);

Route::get('/myProfile', [firstController::class, 'profile'])->name('profile.us');

Route::get('/home', [firstController::class, 'home'])->name('home.us');
Route::get('/cmm', [firstController::class, 'community'])->name('community.us');

Route::get('/laravel', [firstController::class, 'lara'])->name('laravel.us');


Route::get('/my', function (Request $request) {
    $request->session()->put('age', 24);
});

Route::get('/all', function (Request $request) {
    return $request->session()->all();
});

//__invoke method
Route::get('/server', invokeController::class)->name('invoke.us');

Route::post('student', [firstController::class, 'studenStore'])->name('student.store');

Route::post('/profile', [firstController::class, 'profileStore'])->name('store.profile');

Route::post('/student/about', [firstController::class, 'studentAbout'])->name('student.about');

Route::get('/country', [firstController::class, 'country'])->name('country')->middleware('country');

Route::get('/going', [firstController::class, 'saikat'])->name('go.us');

Route::get(md5('/contact'), function () {
    return view('contact');
})->name('contact.us');












Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';