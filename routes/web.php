<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PortoController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\dashbaord\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user\ContactController;
use App\Http\Controllers\user\UserContactController;
use App\Http\Controllers\website\WebsiteController;
use App\Http\Middleware\AdminMiddleWare;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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

/* Start Website Routes */
Route::get('/home', [WebsiteController::class, 'index'])->name('home');
Route::get('/', [WebsiteController::class, 'index']);
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/service', [WebsiteController::class, 'service'])->name('service');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/porto', [WebsiteController::class, 'porto'])->name('porto');
Route::get('/message', [WebsiteController::class, 'message'])->name('message');
/* End Website Routes */

/* Start Admin and Dashboard Routes */
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::resource('/dash', AdminController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/porto', PortoController::class);
    Route::resource('/blog', BlogController::class);
    Route::resource('/message', MessageController::class);
    Route::resource('/user', UserController::class);
});
/* End Admin and Dashboard Routes

/* Start User Routes */
Route::middleware(['auth'])->group(function () {
    Route::resource('user-contact', UserContactController::class)->names([
        'destroy' => 'user-contact-destroy',
    ]);
});
/* End User Routes */

/* Start Dashbard Routes */
Route::redirect('/dash', '/admin/dash');
/* End Dashboard Routes */

/* Start Language Routes */
Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ar'])) {
        abort(400);
    }

    session()->put('locale', $locale);
    return redirect()->back();
})->name('lang.switch');
/* End Language Routes */
