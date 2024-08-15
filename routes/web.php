<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Models\Example;

Route::get('/', function(){ return view('main', [ 'items' => Example::all() ]); });

Route::any('/new', [ExampleController::class, 'create'])->name('new');
Route::any('/{id?}', [ExampleController::class, 'example'])->name('content')->where('id', '[0-9]+');
