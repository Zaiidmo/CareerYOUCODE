<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
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
//HOME PAGE
Route::get('/', function () {
    $announcements = Announcement::limit(6)->get();
    return view('home', compact('announcements'));
});

//ANNOUNCEMENTS PAGE
Route::get('discover', function () {
    $announcements = Announcement::get();
    return view('announcements/discover', compact('announcements'));
});

//ADMINS PAGES
Route::middleware(['auth', 'verified', 'role:staff'])
    // ->name('staff.')
    // ->prefix('staff')
    ->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('announcements', AnnouncementController::class);
        Route::resource('companies', CompanyController::class);
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// PROFILE PAGES

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile.edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/update-user-skills', [ProfileController::class, 'updateUserSkills'])->name('update_user_skills');
    Route::patch('/profile.update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile.delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
