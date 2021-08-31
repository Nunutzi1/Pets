<?php

use App\Http\Controllers\PetsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Get pets
Route::get('/pets', [PetsController::class, 'getPets'])->name('pets');

// Create pet
Route::post('/create', [PetsController::class, 'create'])->name('create');

// Get pet by id
Route::get('/pet/{id}', [PetsController::class, 'getPet'])->name('pet.id');

// Update pet by id
Route::put('/update/{id}', [PetsController::class, 'update'])->name('pet.update');

// Delete pet by id
Route::delete('/delete/{id}', [PetsController::class, 'destroy'])->name('pet.delete');