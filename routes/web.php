<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;


Route::get('/', [HomeController::class, 'getHome']);

Route::get('catalog', [CatalogController::class, 'getIndex']);
Route::get('catalog/show/{id}', [CatalogController::class, 'getShow']);
Route::get('catalog/create', [CatalogController::class, 'getCreate']);
Route::get('catalog/edit/{id}', [CatalogController::class, 'getEdit']);

Route::get('login', function () {
    return view('auth.login');
});
//----------------------------------------
// Route::get('catalog', function () {
//     return view('catalog.index');
// });
// Route::get('catalog/create', function () {
//     return view('catalog.create');
// });
// Route::get('catalog/show/{id}', function($id) {
//     return view('catalog.show')->with('id', $id);
// });
// Route::get('catalog/edit/{id}', function ($id) {
//     return view('catalog.edit')->with('id', $id);
// });