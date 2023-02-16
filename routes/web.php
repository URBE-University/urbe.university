<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Livewire\Admin\Menu\Index as Menus;
use App\Http\Livewire\Admin\Page\Index as Pages;
use App\Http\Livewire\Admin\Post\Index as Posts;
use App\Http\Livewire\Admin\User\Index as Users;
use App\Http\Livewire\Admin\Seo\Index as SeoHome;
use App\Http\Livewire\Admin\Event\Index as Events;
use App\Http\Livewire\Admin\Seo\Tools\SocialMedia;
use App\Http\Livewire\Admin\Seo\Tools\InstantIndex\Index as InstantIndex;
use App\Http\Livewire\Admin\Seo\Tools\SiteSettings;
use App\Http\Livewire\Admin\Seo\Tools\WebmasterTools;
use App\Http\Livewire\Admin\Seo\Tools\Redirects\Index as RedirectsIndex;
use Illuminate\Support\Facades\Request;

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

Route::middleware('web')->group(function () {
    Route::get('/', [WebsiteController::class, 'home'])->name('home');
    Route::get('/contact', [WebsiteController::class, 'home'])->name('home2');
    Route::get('{uri}', [WebsiteController::class, 'redirect'])->name('redirects');
});

/**
 * Protected routes
 */
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified', 'is_active'])
    ->prefix('admin')
    ->group(function ()
{
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    // Article routes
    Route::middleware('can:post:view')->get('/posts', Posts::class)->name('admin.posts');
    Route::middleware('can:post:create')->get('/posts/new', App\Http\Livewire\Admin\Post\Create::class)->name('admin.post.create');
    Route::middleware('can:post:update')->get('/posts/{post}/edit', App\Http\Livewire\Admin\Post\Edit::class)->name('admin.post.edit');

    // Event routes
    Route::middleware('can:event:view')->get('/events', Events::class)->name('admin.events');
    Route::middleware('can:event:create')->get('/events/new', App\Http\Livewire\Admin\Event\Create::class)->name('admin.event.create');
    Route::middleware('can:event:update')->get('/events/{event}/edit', App\Http\Livewire\Admin\Event\Edit::class)->name('admin.event.edit');

    // Page routes
    Route::middleware('can:page:view')->get('/pages', Pages::class)->name('admin.pages');
    Route::get('/pages/new', App\Http\Livewire\Admin\Page\Create::class)->name('admin.page.create');

    // Menu routes
    Route::middleware('can:menu:view')->get('/menus/{selector}', Menus::class)->name('admin.menus');

    // SEO management routes
    Route::middleware('can:seo:view')->get('/seo', SeoHome::class)->name('admin.seo.home');
    // SEO tools routes
    Route::middleware('can:seo:view')->get('/seo/site-settings', SiteSettings::class)->name('admin.seo.site.settings');
    Route::middleware('can:seo:view')->get('/seo/socialmedia', SocialMedia::class)->name('admin.seo.socialmedia');
    Route::middleware('can:seo:view')->get('/seo/instant-index', InstantIndex::class)->name('admin.seo.instant.index');
    Route::middleware('can:seo:view')->get('/seo/webmaster-tools', WebmasterTools::class)->name('admin.seo.webmaster.tools');
    Route::middleware('can:seo:view')->get('/seo/redirects', RedirectsIndex::class)->name('admin.seo.redirects');

    // Route::middleware('can:seo:view')->get('/seo/monitor-404', Monitor404::class)->name('admin.seo.monitor404');

    // User routes
    Route::middleware('can:user:view')->get('/users', Users::class)->name('admin.users');
    Route::middleware('can:user:update')->get('/user/{user}/edit', App\Http\Livewire\Admin\User\Edit::class)->name('admin.user.edit');
});
