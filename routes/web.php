<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Controller;
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
// Route::resource('users', Controller ::class);
// Route::resource('announcements', AnnouncementController ::class);
Route::resource('companies', CompanyController ::class);

Route::get('/', function () {
    return view('home');
});
// Route::get('jobs', function () {
//     return view('jobs');
// });
// Route::get('login', function () {
//     return view('login');
// });
// Route::get('signup', function () {
//     return view('signup');
// });
// Route::get('single_page', function () {
//     return view('single_page');
// });
Route::get('dashboard', function () {
    return view('dashboard');
});
