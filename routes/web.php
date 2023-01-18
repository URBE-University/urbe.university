<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Post\Index as Posts;
use App\Http\Livewire\Admin\Event\Index as Events;
use App\Http\Livewire\Admin\User\Index as Users;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    // Article routes
    Route::get('/posts', Posts::class)->name('admin.posts');
    Route::get('/posts/new', App\Http\Livewire\Admin\Post\Create::class)->name('admin.post.create');

    // Event routes
    Route::get('/events', Events::class)->name('admin.events');
    Route::get('/events/new', App\Http\Livewire\Admin\Event\Create::class)->name('admin.event.create');

    // User routes
    Route::get('/users', Users::class)->name('admin.users');
    Route::get('/user/{user}/edit', App\Http\Livewire\Admin\User\Edit::class)->name('admin.user.edit');
});
