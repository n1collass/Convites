<?php

use App\Models\Invite;
use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InviteController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::controller(InviteController::class)
    ->group(function () {
        Route::get('convite/{code}', 'show')->name('invites.show');
        Route::post('convite/{code}', 'confirm')->name('invites.confirm');
        Route::get('convite/{code}/confirmacoes', 'auth')->name('invites.auth');
        Route::post('convite/{code}/confirmacoes', 'manage')->name('invites.manage');
    });

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
