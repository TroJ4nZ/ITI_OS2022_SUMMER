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

/*
    ----------------------------------------------------------------
  HOME ROUTES
  ----------------------------------------------------------------
   */

Route::get('/', function () {
    return view('welcome');
})->name('home');

/*
|
|--------------------------------------------------------------------------
User Routes
|-------------------------------------------------------------
*/

Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');;
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::get('users/{id}', [UserController::class, 'show'])->where('id', "[0-9]+")->name('users.show'); // regex to prevent strings
Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');


/*
|
|--------------------------------------------------------------------------
Posts Routes
|-------------------------------------------------------------
*/


Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'index'])->name('posts.create');
Route::get('posts/{id}', [PostController::class, 'index'])->where('id', "[0-9]+")->name('posts.show');
Route::get('posts/{id}/edit', [PostController::class, 'index'])->name('posts.edit');
Route::get('posts/{id}', [PostController::class, 'index'])->name('posts.destroy');
Route::get('posts/deleted', [PostController::class, 'index'])->name('posts.destroyed');


// Route --> A class
// :: --> scope resolution operator (for static methods and properties of a class)
// get --> static method
// => --> for array
// -> --> dot operator for both methods and properties
// Route::get returns route, we then call the method of Route that is name() using the
// access dot operator -> (method chaining)



Route::fallback(function () {
    return "This is a fallback route";
});
