<?php

use App\Livewire\Pages\Auth\CheckCert;
use App\Livewire\Pages\Auth\UserLogin;
use Illuminate\Support\Facades\Route;


Route::get("/", CheckCert::class)->name('cert-check');
Route::get("/user-login", UserLogin::class)->name('user-login');
