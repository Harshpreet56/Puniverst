<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\myuser;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth', 'admin_auth'])->group(function () {
    Route::get('/admin', [Controller::class, 'index'])->name('admin.index');
    // Add more admin routes here
});

Route::get('/auth', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::view("/about","about");
Route::view("/contact","contact");
Route::view("/event","event");
Route::view("/news","news");
Route::view("/singlepost","singlepost");
Route::view("/courses","Courese1");
Route::view("/allcoures","allcoures");

});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
});


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});



 Route::view("/","index");
// Route::view("/about","about");
// Route::view("/contact","contact");
// Route::view("/event","event");
// Route::view("/news","news");
// Route::view("/singlepost","singlepost");
// Route::view("/courses","Courese1");
// Route::view("/allcoures","allcoures");
// Route::view("/dash","dashbord/index");
  
require __DIR__.'/auth.php';