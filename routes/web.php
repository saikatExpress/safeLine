<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\control\firstController;
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

Route::get('/myProfile', [firstController::class, 'profile'])->name('profile.us');

Route::get('/myDash', [firstController::class, 'dash'])->name('dashboard.us');
Route::get('/cmm', [firstController::class, 'community'])->name('community.us');

//__invoke method
Route::get('/server', invokeController::class)->name('invoke.us');

Route::post('student', [firstController::class, 'studenStore'])->name('student.store');

Route::post('/student/about', [firstController::class, 'studentAbout'])->name('student.about');

Route::get('/country', [firstController::class, 'country'])->name('country')->middleware('country');

Route::get(md5('/contact'), function () {
    return view('contact');
})->name('contact.us');

/**Route::get('/country', function () {
    return view('country');
})->middleware('country');**/

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