<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WebsiteController;
use App\Http\Livewire\Admin\Menu\Index as Menus;
use App\Http\Livewire\Admin\Page\Index as Pages;
use App\Http\Livewire\Admin\Post\Index as Posts;
use App\Http\Livewire\Admin\Category\Index as Categories;
use App\Http\Livewire\Admin\User\Index as Users;
use App\Http\Livewire\Admin\Seo\Index as SeoHome;
use App\Http\Livewire\Admin\Event\Index as Events;
use App\Http\Livewire\Admin\Media\Index as Media;
use App\Http\Livewire\Admin\School\Index as SchoolHome;
use App\Http\Livewire\Admin\School\StartDates\Index as StartDates;
use App\Http\Livewire\Admin\School\Catalog\Index as ShowCatalogs;
use App\Http\Livewire\Admin\Seo\Tools\SocialMedia;
use App\Http\Livewire\Admin\Seo\Tools\InstantIndex\Index as InstantIndex;
use App\Http\Livewire\Admin\Seo\Tools\SiteSettings;
use App\Http\Livewire\Admin\Seo\Tools\WebmasterTools;
use App\Http\Livewire\Admin\Seo\Tools\Redirects\Index as RedirectsIndex;

/**
 * Public routes
 */
Route::middleware(['web', 'parse_shortcodes'])->group(function () {
    Route::get('/', [WebsiteController::class, 'home'])->name('home');

    // Blog Routes
    Route::get('/blog', [PostController::class, 'index'])->name('blog.post.index');
    Route::get('/blog/{slug}', [PostController::class, 'show'])->name('blog.post.show');
    Route::get('/blog/categories/{category}', [PostController::class, 'category'])->name('blog.category.show');
    Route::get('/blog/authors/{author}', [PostController::class, 'author'])->name('blog.author.show');

    // Event Routes
    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/events/{slug}', [EventController::class, 'show'])->name('events.show');

    // Redirects route
    Route::get('/go-to/{uri}', [WebsiteController::class, 'redirect'])->name('redirects');
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
    Route::middleware('can:post:view')->get('/categories', Categories::class)->name('admin.categories');


    // Event routes
    Route::middleware('can:event:view')->get('/events', Events::class)->name('admin.events');
    Route::middleware('can:event:create')->get('/events/new', App\Http\Livewire\Admin\Event\Create::class)->name('admin.event.create');
    Route::middleware('can:event:update')->get('/events/{event}/edit', App\Http\Livewire\Admin\Event\Edit::class)->name('admin.event.edit');

    // Page routes
    Route::middleware('can:page:view')->get('/pages', Pages::class)->name('admin.pages');
    Route::get('/pages/new', App\Http\Livewire\Admin\Page\Create::class)->name('admin.page.create');
    Route::middleware('can:page:update')->get('/pages/{page}/edit', App\Http\Livewire\Admin\Page\Edit::class)->name('admin.page.edit');

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

    // School tools routes
    Route::middleware('can:school-information:manage')->get('/school', SchoolHome::class)->name('admin.school.home');
    Route::middleware('can:school-information:manage')->get('/school/start-dates', StartDates::class)->name('admin.school.start-dates');
    Route::middleware('can:school-information:manage')->get('/school/catalog', ShowCatalogs::class)->name('admin.school.catalog');

    // Media routes
    Route::middleware('can:media:view')->get('/media', Media::class)->name('admin.media');

    // User routes
    Route::middleware('can:user:view')->get('/users', Users::class)->name('admin.users');
    Route::middleware('can:user:update')->get('/user/{user}/edit', App\Http\Livewire\Admin\User\Edit::class)->name('admin.user.edit');
});

// Custom web pages
Route::middleware(['web', 'parse_shortcodes'])->group( function () {
    Route::get('/{uri}', [WebsiteController::class, 'page'])->where('uri', '(.*)')->name('web.page');
});
