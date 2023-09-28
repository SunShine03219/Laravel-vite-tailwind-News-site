<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Chat;
use App\Http\Livewire\Categories;
use App\Http\Livewire\MyApplication;
use App\Http\Livewire\News;
use App\Http\Livewire\MyBoxingShow;
use App\Http\Livewire\MyClient;
use App\Http\Livewire\MyFightPost;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Signature;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::post('get-states-by-country', 'CountryStateCityController@getState');
Route::post('get-cities-by-state', 'CountryStateCityController@getCity');

Route::middleware('auth')->group(function () {
    Route::get('/categories', Categories::class)->name('categories');
    Route::get('/profile/{id?}', Profile::class)->name('profile');
    Route::get('/news', News::class)->name('news');
});

require __DIR__ . '/auth.php';
