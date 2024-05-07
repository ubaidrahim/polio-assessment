<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('province')->middleware(['auth'])->group(function () {

    Route::post('/fetch', [App\Http\Controllers\ProvinceController::class, 'fetch'])->name('province.fetch');
});   
Route::prefix('division')->middleware(['auth'])->group(function () {

    Route::post('/fetch', [App\Http\Controllers\DivisionController::class, 'fetch'])->name('division.fetch');
});   
Route::prefix('district')->middleware(['auth'])->group(function () {

    Route::post('/fetch', [App\Http\Controllers\DistrictController::class, 'fetch'])->name('district.fetch');
});   
Route::prefix('tehsil')->middleware(['auth'])->group(function () {

    Route::post('/fetch', [App\Http\Controllers\TehsilController::class, 'fetch'])->name('tehsil.fetch');
});   
Route::prefix('unioncouncil')->middleware(['auth'])->group(function () {

    Route::post('/fetch', [App\Http\Controllers\UnionCouncilController::class, 'fetch'])->name('unioncouncil.fetch');
});   
Route::prefix('household')->middleware(['auth'])->group(function () {
    Route::get('/add', [App\Http\Controllers\HouseholdController::class, 'add'])->name('household.add')->middleware('admin');
    Route::post('/create', [App\Http\Controllers\HouseholdController::class, 'create'])->name('household.create')->middleware('admin');
    Route::post('/fetch', [App\Http\Controllers\HouseholdController::class, 'fetch'])->name('household.fetch');
});
Route::prefix('member')->middleware(['auth'])->group(function () {
    Route::get('/add', [App\Http\Controllers\MemberController::class, 'add'])->name('member.add')->middleware('admin');
    Route::post('/create', [App\Http\Controllers\MemberController::class, 'create'])->name('member.create')->middleware('admin');
    Route::post('/fetch', [App\Http\Controllers\MemberController::class, 'fetch'])->name('member.fetch');
});
