<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\FormValidate;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new_form', FormValidate::class);
