<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Example;

Route::get('/', function (Request $request) {
    $example = Example::all();
    return $example;
});


Route::get('/{id?}', function (Request $request, ?int $id = 1) {
    $example = Example::find($id);
    return $example;
})->name('api.content');
