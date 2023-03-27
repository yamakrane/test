<?php

use App\Http\Livewire\Form;
use App\Http\Livewire\Youssef;

\Illuminate\Support\Facades\Route::get('form', Form::class);

Route::get('/youssef', Youssef::class);