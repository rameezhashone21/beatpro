<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppSettingController;
use App\Http\Controllers\WebSettingController;
use App\Http\Controllers\BlogArticleController;
use App\Http\Controllers\BlogCategoryController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/faqs', [PagesController::class, 'faqs']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/membership', [MembershipController::class, 'index']);
Route::get('/services', [PagesController::class, 'services']);
Route::get('/all_tracks', [PagesController::class, 'all_tracks']);
Route::get('/album/{id}', [PagesController::class, 'specific_album']);


Route::middleware(['auth'])->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('checkpermission:dashboard');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

/*
|--------------------------------------------------------------------------
| Admin dashboard Routes
|--------------------------------------------------------------------------
*/

Route::prefix('/admin')->group(function () {
  Route::middleware(['checkrole:admin'])->group(function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])
      ->name('admin.dashboard')
      ->middleware('checkpermission:admin.dashboard.view');

    // Users
    Route::get('/users', [UsersController::class, 'index'])
      ->name('view.users')
      ->middleware('checkpermission:view.users');

    Route::get('/user/add', [UsersController::class, 'create'])
      ->name('create.users')
      ->middleware('checkpermission:create.users');

    Route::post('/user/save', [UsersController::class, 'store'])
      ->name('save.users')
      ->middleware('checkpermission:create.users');

    Route::get('/user/delete/{id}', [UsersController::class, 'destroy'])
      ->name('delete.users')
      ->middleware('checkpermission:delete.users');

    Route::get('/user/edit/{id}', [UsersController::class, 'edit'])
      ->name('edit.users')
      ->middleware('checkpermission:update.users');

    Route::put('/user/{id}', [UsersController::class, 'update'])
      ->name('update.users')
      ->middleware('checkpermission:update.users');

    // Roles & permissions
    Route::get('/roles-permissions', [AccessController::class, 'index'])
      ->name('view.roles-permissions')
      ->middleware('checkpermission:view.roles.permissions');

    Route::prefix('/role')->name('role')->group(function () {
      Route::get('/add', [RoleController::class, 'create'])
        ->name('.create')
        ->middleware('checkpermission:create.roles');

      Route::post('/store', [RoleController::class, 'store'])
        ->name('.save')
        ->middleware('checkpermission:create.roles');

      Route::get('/edit/{id}', [RoleController::class, 'edit'])
        ->name('.edit')
        ->middleware('checkpermission:update.roles');

      Route::put('/{id}', [RoleController::class, 'update'])
        ->name('.update')
        ->middleware('checkpermission:update.roles');

      Route::get('/delete/{id}', [RoleController::class, 'destroy'])
        ->name('.delete')
        ->middleware('checkpermission:delete.roles');
    });

    //Categories
    Route::get('/categories', [CategoriesController::class, 'index'])
      ->name('view.categories')
      ->middleware('checkpermission:view.categories');

    Route::get('/category/add', [CategoriesController::class, 'create'])
      ->name('create.categories')
      ->middleware('checkpermission:create.categories');

    Route::post('/category/save', [CategoriesController::class, 'store'])
      ->name('save.categories')
      ->middleware('checkpermission:create.categories');

    Route::get('/category/delete/{id}', [CategoriesController::class, 'destroy'])
      ->name('delete.categories')
      ->middleware('checkpermission:delete.categories');

    Route::get('/category/edit/{id}', [CategoriesController::class, 'edit'])
      ->name('edit.categories')
      ->middleware('checkpermission:update.categories');

    Route::put('/category/{id}', [CategoriesController::class, 'update'])
      ->name('update.categories')
      ->middleware('checkpermission:update.categories');

  //Services
  Route::get('/services', [ServicesController::class, 'index'])
    ->name('view.services')
    ->middleware('checkpermission:view.services');

  Route::get('/service/add', [ServicesController::class, 'create'])
    ->name('create.services')
    ->middleware('checkpermission:create.services');

  Route::post('/service/save', [ServicesController::class, 'store'])
    ->name('save.services')
    ->middleware('checkpermission:create.services');

  Route::get('/service/delete/{id}', [ServicesController::class, 'destroy'])
    ->name('delete.services')
    ->middleware('checkpermission:delete.services');

  Route::get('/service/edit/{id}', [ServicesController::class, 'edit'])
    ->name('edit.services')
    ->middleware('checkpermission:update.services');

  Route::put('/service/{id}', [ServicesController::class, 'update'])
    ->name('update.services')
    ->middleware('checkpermission:update.services');

  //Albums
  Route::get('/albums', [AlbumsController::class, 'index'])
    ->name('view.albums')
    ->middleware('checkpermission:view.albums');

  Route::get('/album/add', [AlbumsController::class, 'create'])
    ->name('create.albums')
    ->middleware('checkpermission:create.albums');

  Route::post('/album/save', [AlbumsController::class, 'store'])
    ->name('save.albums')
    ->middleware('checkpermission:create.albums');

  Route::get('/album/delete/{id}', [AlbumsController::class, 'destroy'])
    ->name('delete.albums')
    ->middleware('checkpermission:delete.albums');

  Route::get('/album/edit/{id}', [AlbumsController::class, 'edit'])
    ->name('edit.albums')
    ->middleware('checkpermission:update.albums');

    Route::get('/album/view/{id}', [AlbumsController::class, 'view_songs'])
    ->name('view.albums')
    ->middleware('checkpermission:view.albums');  

  Route::put('/album/{id}', [AlbumsController::class, 'update'])
    ->name('update.albums')
    ->middleware('checkpermission:update.albums');

  //Songs
  Route::get('/songs', [SongsController::class, 'index'])
  ->name('view.songs')
  ->middleware('checkpermission:view.songs');

  Route::get('/song/add', [SongsController::class, 'create'])
  ->name('create.songs')
  ->middleware('checkpermission:create.songs');

  Route::post('/song/save', [SongsController::class, 'store'])
  ->name('save.songs')
  ->middleware('checkpermission:create.songs');
  
  Route::get('/song/delete/{id}', [SongsController::class, 'destroy'])
  ->name('delete.songs')
  ->middleware('checkpermission:delete.songs');

  Route::get('/song/edit/{id}', [SongsController::class, 'edit'])
  ->name('edit.songs')
  ->middleware('checkpermission:update.songs');

  Route::put('/song/{id}', [SongsController::class, 'update'])
  ->name('update.songs')
  ->middleware('checkpermission:update.songs');

    // Site pages
    Route::get('/pages', [PageController::class, 'index'])
      ->name('view.pages')
      ->middleware('checkpermission:view.pages');

    Route::get('/page/add', [PageController::class, 'create'])
      ->name('create.pages')
      ->middleware('checkpermission:create.pages');

    Route::post('/page/save', [PageController::class, 'store'])
      ->name('save.pages')
      ->middleware('checkpermission:create.pages');

    Route::get('/page/delete/{id}', [PageController::class, 'destroy'])
      ->name('delete.pages')
      ->middleware('checkpermission:delete.pages');

    Route::get('/page/edit/{id}', [PageController::class, 'edit'])
      ->name('edit.pages')
      ->middleware('checkpermission:update.pages');

    Route::put('/page/{id}', [PageController::class, 'update'])
      ->name('update.pages')
      ->middleware('checkpermission:update.pages');

    // Blog Category
    Route::get('/blog/category', [BlogCategoryController::class, 'index'])
      ->name('blog.category.view')
      ->middleware('checkpermission:view.blog.category');

    Route::get('/blog/category/add', [BlogCategoryController::class, 'create'])
      ->name('blog.category.create')
      ->middleware('checkpermission:create.blog.category');

    Route::post('/blog/category/add', [BlogCategoryController::class, 'store'])
      ->middleware('checkpermission:create.blog.category');

    Route::get('/blog/category/delete/{id}', [BlogCategoryController::class, 'destroy'])
      ->name('blog.category.delete')
      ->middleware('checkpermission:delte.blog.category');

    Route::get('/blog/category/edit/{id}', [BlogCategoryController::class, 'edit'])
      ->name('blog.category.update')
      ->middleware('checkpermission:update.blog.category');

    Route::put('/blog/category/edit/{id}', [BlogCategoryController::class, 'update'])
      ->middleware('checkpermission:update.blog.category');

    // Blog Article
    Route::get('/blog/article/{id}', [BlogArticleController::class, 'index'])
      ->name('blog.article.view')
      ->middleware('checkpermission:view.blog.article');

    Route::get('/blog/article/add/{id}', [BlogArticleController::class, 'create'])
      ->name('blog.article.create')
      ->middleware('checkpermission:create.blog.article');

    Route::post('/blog/article/add/{id}', [BlogArticleController::class, 'store']);

    Route::get('/blog/article/delete/{id}', [BlogArticleController::class, 'destroy'])
      ->name('blog.article.delete')
      ->middleware('checkpermission:delete.blog.article');

    Route::get('/blog/article/edit/{id}', [BlogArticleController::class, 'edit'])
      ->name('blog.article.update')
      ->middleware('checkpermission:update.blog.article');

    Route::put('/blog/article/edit/{id}', [BlogArticleController::class, 'update']);

    // App setttings
    Route::get('/app-setting/edit/{id}', [AppSettingController::class, 'edit'])
      ->name('edit.app-setting')
      ->middleware('checkpermission:update.app.settings');

    Route::put('/app-setting/{id}', [AppSettingController::class, 'update'])
      ->name('update.app-setting')
      ->middleware('checkpermission:update.app.settings');


    // Web settings
    Route::get('/web-setting/edit/{id}', [WebSettingController::class, 'edit'])
      ->name('edit.web-setting')
      ->middleware('checkpermission:update.web.settings');

    Route::put('/web-setting/{id}', [WebSettingController::class, 'update'])
      ->name('update.web-setting')
      ->middleware('checkpermission:update.web.settings');
  });
});
