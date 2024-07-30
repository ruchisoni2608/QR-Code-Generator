<?php

use App\Http\Controllers\Admin\SocialMediaLinkController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Client\HomeController;
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
Route::get('/test', function () {
    return view('test');
});

Route::get('/', \App\Livewire\QrGenerator::class);

Route::get('/qr_generator', \App\Livewire\QrGenerator::class);

Route::get('/profile/{slug}', \App\Livewire\ProfileView::class)->name('profile.show');

// Route::get('/', [HomeController::class, 'index'])->name('client.home');

Route::prefix('cm-admin')->group(function () {
    Route::middleware('auth')
        ->name('admin.')
        ->group(function () {
            Route::get('/', [DashboardController::class, 'index']);
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

            Route::prefix('a_social_media_links')->group(function () {
                Route::get('/', [SocialMediaLinkController::class, 'index'])->name('social_media_links');
                Route::get('/create', [SocialMediaLinkController::class, 'create'])->name('social_media_links.create');
                Route::post('/save', [SocialMediaLinkController::class, 'store'])->name('social_media_links.save');
                Route::get('/{socialMediaLink}/edit', [SocialMediaLinkController::class, 'edit'])->name('social_media_links.edit');
                Route::put('{socialMediaLink}/update', [SocialMediaLinkController::class, 'update'])->name('social_media_links.update');
                Route::delete('{socialMediaLink}/delete', [SocialMediaLinkController::class, 'destroy'])->name('social_media_links.delete');
            });
        });
    require __DIR__ . '/auth.php';
});
