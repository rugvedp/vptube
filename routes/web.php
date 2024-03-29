<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChannelController;
use App\Http\Livewire\Video\CreateVideo;
use App\Http\Livewire\Video\AllVideo;
use App\Http\Livewire\Video\EditVideo;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('login');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'index'])->name('register');
*/
Route::middleware('auth')->group(function(){
    Route::get('/channel/{channel}/edit', [ChannelController::class, 'edit'])->name('channel.edit');
    Route::get('/videos/{channel}/create', CreateVideo::class)->name('video.create');
    Route::get('/channel/{channel}/{video}/edit', EditVideo::class)->name('video.edit');
    Route::get('/channel/{channel}', AllVideo::class)->name('video.all');
});