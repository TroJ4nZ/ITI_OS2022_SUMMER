<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
});


Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');;
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::get('users/{id}', [UserController::class, 'show'])->where('id', "[0-9]+")->name('users.show');
Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');




// Route --> A class
// :: --> scope resolution operator (for static methods and properties of a class)
// get --> static method
// => --> for array
// -> --> dot operator for both methods and properties
// Route::get returns route, we then call the method of Route that is name() using the
// access dot operator -> (method chaining)



Route::fallback(function(){
    return "This is a fallback route";
});
