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
    return view('welcome');
});

Route::get('/general-assembly', function () {
    return view('committees.ga');
});

Route::get('/security-council', function () {
    return view('committees.sc');
});

Route::get('/world-health-organization', function () {
    return view('committees.who');
});

Route::get('/ecosoc', function () {
    return view('committees.ecosoc');
});

Route::get('/hlpf', function () {
    return view('committees.hlpf');
});

Route::get('/un-women', function () {
    return view('committees.unwomen');
});

Route::get('/iaea', function () {
    return view('committees.iaea');
});

Route::get('/unoosa', function () {
    return view('committees.unoosa');
});

Route::get('/human-rights', function () {
    return view('committees.hr');
});

Route::get('/international-court-justice', function () {
    return view('committees.icj');
});

Route::get('/league-third-reich', function () {
    return view('committees.ltr');
});

Route::get('/futuristic-world-league', function () {
    return view('committees.fwl');
});

Route::get('/futuristic-world-league-6to', function () {
    return view('committees.fwl6');
});

Route::get('/un-peacekeeping-program', function () {
    return view('committees.unpp');
});

Route::get('/secretariat', function () {
    return view('secretariat');
});

Route::get('/speaker', function () {
    return view('speaker');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/frequently-asked-questions', function () {
    return view('faq');
});

Route::get('/zoom-guide', function () {
    return view('zoom');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
