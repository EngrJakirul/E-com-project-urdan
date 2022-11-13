<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\UrdanController;
use App\Http\Controllers\Frontend\UrdanCategoryController;
use App\Http\Controllers\Frontend\UrdanProductController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Admin\SubCategoryController;

use App\Http\Controllers\Admin\BrandController;

use App\Http\Controllers\Admin\UnitController;

use App\Http\Controllers\Admin\ProductController;

use App\Http\Controllers\Frontend\CartController;



Route::get('/', [UrdanController::class, 'index'])->name('home');

Route::get('/category-page/{id}', [UrdanCategoryController::class, 'categoryPage'])->name('category.page');

Route::get('/get-product-info-modal', [UrdanCategoryController::class, 'getProductInfoModal'])->name('getProduct.infoModal');

Route::get('/product-details/{id}', [UrdanProductController::class, 'productDetails'])->name('product.details');





Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class,'index'] )->name('dashboard');

    //this route work only for category controller and category product//
    Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('category.add');
    Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');
    Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory'])->name('category.edit');
    Route::post('/update-category/{id}', [CategoryController::class, 'updateCategory'])->name('category.update');
    Route::post('/new-category', [CategoryController::class, 'newCategory'])->name('category.new');
    Route::get('/manage-category', [CategoryController::class, 'manageCategory'])->name('category.manage');
    //end here//

    //this route work only for SubCategory controller and category product//
    Route::get('/add-sub-category', [SubCategoryController::class, 'addSubCategory'])->name('subcategory.add');
    Route::get('/delete-sub-category/{id}', [SubCategoryController::class,'deleteSubCategory'])->name('subcategory.delete');
    Route::get('/edit-sub-category/{id}', [SubCategoryController::class, 'editSubCategory'])->name('subcategory.edit');
    Route::post('/update-sub-category/{id}', [SubCategoryController::class, 'updateSubCategory'])->name('subcategory.update');
    Route::post('/new-sub-category', [SubCategoryController::class, 'newSubCategory'])->name('subcategory.new');
    Route::get('/manage-sub-category/', [SubCategoryController::class, 'manageSubCategory'])->name('subcategory.manage');
    //end here//

    //this route work only for SubCategory controller and category product//
    Route::get('/add-brand', [BrandController::class, 'addBrand'])->name('brand.add');
    Route::get('/delete-brand', [BrandController::class, 'deleteBrand'])->name('brand.delete');
    Route::get('/edit-brand', [BrandController::class, 'editBrand'])->name('brand.edit');
    Route::post('/update-brand', [BrandController::class, 'updateBrand'])->name('brand.update');
    Route::post('/new-brand', [BrandController::class, 'newBrand'])->name('brand.new');
    Route::get('/manage-brand', [BrandController::class, 'manageBrand'])->name('brand.manage');
    //end here//

    //this route work only for PRODUCT controller//
    Route::get('/add-product', [ProductController::class, 'addProduct'])->name('product.add');
    Route::get('/delete-product', [ProductController::class, 'deleteProduct'])->name('product.delete');
    Route::get('/edit-product', [ProductController::class, 'editProduct'])->name('product.edit');
    Route::post('/update-product', [ProductController::class, 'updateProduct'])->name('product.update');
    Route::post('/new-product', [ProductController::class, 'newProduct'])->name('product.new');
    Route::get('/manage-product', [ProductController::class, 'manageProduct'])->name('product.manage');
    //end here//

    //this route work only for PRODUCT controller//
    Route::get('/get-sub-category-by-category-id/{id}', [ProductController::class, 'getSubCategoryId']);
    //end here//

    //this route work only for PRODUCT controller//
    Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.tocart');

    //end here//

    //this route work only for UNIT controller//
    Route::get('/add-unit', [UnitController::class, 'addUnit'])->name('unit.add');
    Route::get('/delete-unit', [UnitController::class, 'deleteUnit'])->name('unit.delete');
    Route::get('/edit-unit', [UnitController::class, 'editUnit'])->name('unit.edit');
    Route::post('/update-unit', [UnitController::class, 'updateUnit'])->name('unit.update');
    Route::post('/new-unit', [UnitController::class, 'newUnit'])->name('unit.new');
    Route::get('/manage-unit', [UnitController::class, 'manageUnit'])->name('unit.manage');
    //end here//



});
