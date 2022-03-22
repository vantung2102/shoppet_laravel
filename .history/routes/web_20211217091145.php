<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductDetailController;

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UploadController;
use App\Http\Controllers\admin\SliderController;



// client routes
Route::prefix("/")->middleware("checkClients")->group(function () {

    Route::get('/', [HomeController::class, 'index']);

    Route::get('/product', [App\Http\Controllers\ProductController::class, 'listProduct']);

    Route::post('services/load-product', [App\Http\Controllers\ProductController::class, 'loadMoreProduct']);

    Route::get('danh-muc/{id}-{slug}.html', [App\Http\Controllers\MenuController::class, 'index']);

    Route::get('san-pham/{id}-{slug}.html', [ProductDetailController::class, 'index']);

    Route::post('add-cart', [CartController::class, 'index']);

    Route::get('carts', [CartController::class, 'show']);

    Route::post('update-cart', [CartController::class, 'update']);

    Route::get('carts/delete/{id}', [CartController::class, 'delete']);

    Route::post('carts', [CartController::class, 'addCart']);
});

//admin routes
Route::prefix("/admin")->group(function () {

    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');

    Route::post('/login/processLogin', [AdminController::class, 'processLogin'])->name('admin.processLogin');
});

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/index', [ProductController::class, 'index'])->name('admin.index');

        Route::post('/index', [ProductController::class, 'processAddProduct']);


        #Menu
        Route::prefix("menus")->group(function () {

            Route::get('add', [MenuController::class, 'addMenu'])->name('admin.menus.add');

            Route::post('processAddMenu', [MenuController::class, 'processAddMenu'])->name('admin.menus.processAddMenu');

            Route::get('list', [MenuController::class, 'listMenu'])->name('admin.menus.list');

            Route::get('update/{menu}', [MenuController::class, 'editMenu'])->name('admin.menus.edit');

            Route::post('update/{menu}', [MenuController::class, 'processUpdateMenu'])->name('admin.menus.processUpdateMenu');

            Route::delete('destroy', [MenuController::class, 'deleteMenu'])->name('admin.menus.delete');
        });

        #Product
        Route::prefix('products')->group(function () {

            Route::get('update/{product}', [ProductController::class, 'editProduct']);

            Route::post('update/{product}', [ProductController::class, 'processUpdateProduct']);

            Route::delete('destroy', [ProductController::class, 'deleteProduct']);
        });

        #Slider
        Route::prefix('slider')->group(function () {

            Route::get('add', [SliderController::class, 'addSlider'])->name('admin.slider.add');

            Route::post('add', [SliderController::class, 'processAddSlider']);

            Route::get('list', [SliderController::class, 'index'])->name('admin.slider.list');

            Route::get('update/{slider}', [SliderController::class, 'editSlider']);

            Route::post('update/{slider}', [SliderController::class, 'processUpdateSlider']);

            Route::delete('destroy', [SliderController::class, 'deleteSlider']);
        });

        #Upload
        Route::post('upload/service', [UploadController::class, 'uploadProductAjax']);

        #cart
        Route::get('customer', [App\Http\Controllers\admin\CartController::class, 'index']);

        Route::post('customer/view/{customer}', [App\Http\Controllers\admin\CartController::class, 'view'])
    });
});