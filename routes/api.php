<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LicenceController;
use App\Http\Controllers\OglasController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PripremaController;
use App\Http\Controllers\ProgramController;
use App\Models\Category;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{slug}', ['PostController@index']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/partners', [PartnerController::class, 'index']);

Route::get('/oglas', [OglasController::class,'index']);

Route::get('/programi', [ProgramController::class,'index']);

Route::get('/programi/{slug}', ['ProgramController@index',]);

Route::get('/licence', [LicenceController::class,'index']);

Route::get('/gallery', [GalleryController::class,'index']);  

Route::get('/clients', [ClientsController::class,'index']);

Route::get('/priprema', [PripremaController::class,'index']);

