<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Models\cv;
use App\Models\education;
use App\Models\skill;
use App\Models\experience;
use App\Models\language;
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


Route::get('/setlocale', [SiteController::class, 'setLocale'])->name('setLocale');

Route::get('/', function () {
    return view('index');
});

Route::get('/cv1', function () {
    return view('FristCV');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::get('/test3', function () {
    return view('test3');
});

Route::get('/cv2', function () {
    return view('SecondCV');
});

Route::get('/cv3', function () {
    return view('TheridCV');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/cv11', function () {
    return view('cv1');
});
Route::get('/template', function () {
    return view('template');
});

Route::get('/cv22', function () {
    return view('cv2');
});

Route::get('/cv33', function () {
    return view('cv3');
});

Route::get('/createCV', function () {
    return view('createCV');
});

Route::get('/nav', function () {
    return view('nav');
});

Route::get('/try', function () {
    return view('try');
});


Route::get('/blog', function () {
    return view('blog');
});


Route::get('/ProessionalResume', function () {
    return view('ProessionalResume');
});

Route::get('/test4', function () {
    return view('test4');
});

Route::get('/down', function () {
    $pdf = PDF::chunkLoadView('<html-separator/>', 'cv1', []);
    return $pdf->stream('cv.pdf');
});

Route::get('/do', function () {
    $pdf = PDF::chunkLoadView('<html-separator/>', 'test', []);
    return $pdf->stream('cv.pdf');
});

Route::get('/down2', function () {
    $pdf = PDF::chunkLoadView('<html-separator/>', 'test2', []);
    return $pdf->stream('cv.pdf');
});


Route::get('/StudentCV', function () {
    return view('StudentCV');
});

Route::get('/ATS', function () {
    return view('ATS');
});
