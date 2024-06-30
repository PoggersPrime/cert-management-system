<?php

use App\Livewire\Pages\Admin\Dashboard;
use App\Livewire\Pages\Admin\User\UserComponent;
use App\Livewire\Pages\Auth\CheckCert;
use App\Livewire\Pages\Auth\UserLogin;
use Illuminate\Support\Facades\Route;


Route::get("/", CheckCert::class)->name('cert-check');
Route::get("/user-login", UserLogin::class)->name('user-login');
Route::get('/users', UserComponent::class);


Route::get("/dashboard", Dashboard::class)->name('dashboard');
