<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Post\Index as Posts;
use App\Http\Livewire\Admin\Event\Index as Events;
use App\Http\Livewire\Admin\User\FinishSetup;
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
    Route::get('/finish-setup', FinishSetup::class)->name('admin.finish-setup');

    Route::middleware('is_active')->group(function () {
        Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

        // Article routes
        Route::middleware('can:post:view')->get('/posts', Posts::class)->name('admin.posts');
        Route::middleware('can:post:create')->get('/posts/new', App\Http\Livewire\Admin\Post\Create::class)->name('admin.post.create');
        Route::middleware('can:post:update')->get('/posts/{post}/edit', App\Http\Livewire\Admin\Post\Edit::class)->name('admin.post.edit');

        // Event routes
        Route::middleware('can:event:view')->get('/events', Events::class)->name('admin.events');
        Route::middleware('can:event:create')->get('/events/new', App\Http\Livewire\Admin\Event\Create::class)->name('admin.event.create');
        Route::middleware('can:event:update')->get('/events/{event}/edit', App\Http\Livewire\Admin\Event\Edit::class)->name('admin.event.edit');

        // User routes
        Route::middleware('can:user:view')->get('/users', Users::class)->name('admin.users');
        Route::middleware('can:user:update')->get('/user/{user}/edit', App\Http\Livewire\Admin\User\Edit::class)->name('admin.user.edit');
    });
});
