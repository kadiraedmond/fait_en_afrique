<?php
use Illuminate\Support\Facades\Route;


// FRONTENDCONTROLLER
Route::get( '/', [App\Http\Controllers\FrontController::class, 'index']);
Route::get( 'about', [App\Http\Controllers\FrontController::class, 'about']);
Route::get( 'allcategorie', [App\Http\Controllers\FrontController::class, 'allcategorie']);
Route::get( 'blog', [App\Http\Controllers\FrontController::class, 'blog']);
Route::get( 'category', [App\Http\Controllers\FrontController::class, 'category']);
Route::get( 'ccm', [App\Http\Controllers\FrontController::class, 'ccm']);
Route::get( 'cond-terme', [App\Http\Controllers\FrontController::class, 'cond-terme']);
Route::get( 'contact', [App\Http\Controllers\FrontController::class, 'contact']);
// FRONTENDCONTROLLER
Route::get( 'politique-con', [App\Http\Controllers\FrontController::class, 'politique_con']);
Route::get( 'product-details/{id}', [App\Http\Controllers\FrontController::class, 'produit_details']);
Route::get( 'search-result', [App\Http\Controllers\FrontController::class, 'search_product']);
Route::get( 'search-societe', [App\Http\Controllers\FrontController::class, 'search_societe']);
Route::get( 'auteur/{raison_sociale}', [App\Http\Controllers\FrontController::class, 'compte']);
// DASHBOARDCONTROLLER
Route::get( '/admin', [App\Http\Controllers\DashboardController::class, 'index']);
Route::post( '/requete', [App\Http\Controllers\DashboardController::class, 'store_requete']);
Route::get( '/requete', [App\Http\Controllers\DashboardController::class, 'create']);

// PRODUCTCONTROLLER
Route::get( '/product-add', [App\Http\Controllers\ProductController::class, 'create']);
Route::post( '/product-add', [App\Http\Controllers\ProductController::class, 'store']);
Route::get( '/product-edit', [App\Http\Controllers\ProductController::class, 'edit']);
Route::get( '/product-list', [App\Http\Controllers\DashboardController::class, 'product_list']);
Route::get( '/select_by_cat/{name}', [App\Http\Controllers\ProductController::class, 'select_by_cat']);
// SliderController
Route::get( '/sliders-list', [App\Http\Controllers\SliderController::class, 'slider_list']);
Route::get( '/sliders-add', [App\Http\Controllers\SliderController::class, 'slider_add']);
Route::get( '/activer_slider/{id}', [App\Http\Controllers\SliderController::class, 'activer_slider']);
Route::get( '/desactiver_slider/{id}', [App\Http\Controllers\SliderController::class, 'desactiver_slider']);
Route::get( '/deleteslider/{id}', [App\Http\Controllers\SliderController::class, 'deleteslider']);
Route::post( '/sauverslider', [App\Http\Controllers\SliderController::class, 'sauverslider']);

// CategoryController
Route::get( '/category-list', [App\Http\Controllers\CategoryController::class, 'category_list']);
Route::get( '/category-add', [App\Http\Controllers\CategoryController::class, 'category_add']);
Route::post( '/category-add', [App\Http\Controllers\CategoryController::class, 'sauverproduit']);
// HOMECONTROLLER
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

