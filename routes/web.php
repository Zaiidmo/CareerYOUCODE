<?php

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Announcement;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
Route::get('discover', [AnnouncementController::class, 'discover'])->name('discover');

Route::post('announcements/{announcementId}/apply', [UserController::class, 'apply'])->name('announcements.apply');
//ADMINS PAGES
Route::middleware(['auth', 'verified', 'role:staff'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('announcements', AnnouncementController::class)->except(['show']);
    Route::resource('companies', CompanyController::class);
    Route::get('/dashboard', function () {
        $users = User::count();
        $staffCount = DB::table('model_has_roles')->where('role_id', 2)->count();
        $studentsCount = DB::table('model_has_roles')->where('role_id', 1)->count();
        $announcements = Announcement::count();
        $companies = Company::count();
        $applications = DB::table('announcement_user')->count();
        return view('dashboard', compact('users', 'announcements', 'companies', 'staffCount', 'studentsCount', 'applications'));
    })->name('dashboard');
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
});

Route::get('announcements/{announcement}', [AnnouncementController::class, 'show'])->name('announcements.show');
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
