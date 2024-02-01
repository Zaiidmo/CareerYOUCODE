<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Models\Announcement;
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
Route::resource('users', UserController ::class);
Route::resource('announcements', AnnouncementController ::class);
Route::resource('companies', CompanyController ::class);

Route::get('/', function () {
    $announcements = Announcement::limit(6)->get();
    return view('home', compact('announcements'));
});

Route::get('discover', function (){
    $announcements = Announcement::get();
    return view('announcements/discover', compact('announcements'));
});


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
