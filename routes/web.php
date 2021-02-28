<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ProductController@index')->name('index');
Route::get('/products', 'PagesController@products')->name('products');
Route::get('/admin', 'AdminController@index')->name('dashboard');

Route::get('/add_product', 'AdminController@add')->name('add_product');
Route::post('/add_product', 'AdminController@store')->name('admin.product.store');
Route::get('/view_product', 'AdminController@show')->name('view_product');
Route::get('/product_update/{id}', 'AdminController@update')->name('admin.product.edit');
Route::post('/product_update/{id}', 'AdminController@product_update')->name('admin.product.update');
Route::post('/product_delete/{id}', 'AdminController@product_delete')->name('admin.product.delete');

// category 
Route::get('/show_category', 'CategoryController@showCategory')->name('show_category');
Route::get('add_category', 'CategoryController@storeCategory')->name('add_category');
Route::post('/create_category', 'CategoryController@craeteCategory')->name('admin.category.store');
Route::get('/category_edit/{id}', 'CategoryController@categoryEdit')->name('admin.category.edit');
Route::post('/category_update/{id}', 'CategoryController@category_update')->name('admin.category.update');
Route::post('/category_delete/{id}', 'CategoryController@category_delete')->name('admin.category.delete');

Route::get('/showporduct/{slug}', 'AdminController@showProducts')->name('products.show');
Route::get('/search', 'AdminController@search')->name('search');

//Cart page
Route::get('/cart','PagesController@cart')->name('/cart');

// show all products using category

// Route::get('products/category/{slug}','AdminController@show')->name('categories.show');
// Route::get('products/category','AdminController@index')->name('categories.index');


// for products show by category in frontend
Route::get('/category/{id}','CategoryController@show')->name('categories.show');
Route::get('/category','CategoryController@index')->name('categories.index');

// brand
Route::get('/show_brand', 'BrandController@showBrand')->name('show_brand');
Route::get('add_brand', 'BrandController@storeBrand')->name('add_brand');
Route::post('/create_brand', 'BrandController@craeteBrand')->name('admin.brand.store');
Route::get('/brand_edit/{id}', 'BrandController@BrandEdit')->name('admin.brand.edit');
Route::post('/brand_update/{id}', 'BrandController@Brand_update')->name('admin.brand.update');
Route::post('/brand_delete/{id}', 'BrandController@Brand_delete')->name('admin.brand.delete');

Auth::routes();
// Route::get('/home','HomeController@index')->name('index');
Route::get('/home','ProductController@index')->name('index');

//division
Route::get('/show_division', 'DivisionController@index')->name('show_division');
Route::get('add_division', 'DivisionController@create')->name('add_division');
Route::post('/create_division', 'DivisionController@store')->name('admin.division.store');
Route::get('/division_edit/{id}', 'DivisionController@DivisionEdit')->name('admin.division.edit');
Route::post('/division_update/{id}', 'DivisionController@Division_update')->name('admin.division.update');
Route::post('/division_delete/{id}', 'DivisionController@Divisions_delete')->name('admin.division.delete');

//district
Route::get('/show_district', 'DistrictController@index')->name('show_district');
Route::get('add_district', 'DistrictController@create')->name('add_district');
Route::post('/create_district', 'DistrictController@store')->name('admin.district.store');
Route::get('/district_edit/{id}', 'DistrictController@districtEdit')->name('admin.district.edit');
Route::post('/district_update/{id}', 'DistrictController@district_update')->name('admin.district.update');
Route::post('/district_delete/{id}', 'DistrictController@districts_delete')->name('admin.district.delete');

Route::get('/notfound','AdminController@not_found')->name('not_found');
Route::get('/checkout','AdminController@check_out')->name('check_out');


