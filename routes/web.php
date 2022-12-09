<?php

use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplimentsController;
use App\Http\Livewire\UserComponent;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome'); 

Route::post('/consulta' , [ComplimentsController::class, 'consul'])->name('compliments.consul');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    

    Route::get('/compliments', [ComplimentsController::class, 'index'])->name('compliments.index');
    Route::resource('roles', RoleController::class)->names('admin.roles');
    Route::get('users', UserComponent::class)->name('admin.user.index');


});
  
Route::get('/log' , function(){
    return view('components.layouts.guest');
} )->name('guest');



