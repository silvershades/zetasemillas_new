<?php

use Illuminate\Support\Facades\Auth;
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


/** HOME */
//Route::get('/', 'App\Http\Controllers\PostController@index')->name('index');
Route::get('/', 'App\Http\Controllers\WebInfoController@index')->name('index');
Route::get('/home', 'App\Http\Controllers\WebInfoController@index')->name('index2');


Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('products.index');
Route::get('/products/{product}', 'App\Http\Controllers\ProductController@show')->name('products.show');
Route::get('/products/showcase/{tipo}', 'App\Http\Controllers\ProductController@showcase')->name('products.showcase');


Route::get('/novedades', 'App\Http\Controllers\NewsHeaderController@index')->name('novedades.index');


Route::group(['prefix' => 'zeta_admin', 'middleware' => 'can:isAdmin'], function () {

    Auth::routes();
    /** users */
    Route::get('/', 'App\Http\Controllers\AdminController@index')->name('admin.index');
    Route::get('/productos', 'App\Http\Controllers\AdminController@productos_index')->name('admin.productos.index');
    Route::get('/productos/create_girasol', 'App\Http\Controllers\AdminController@productos_create_girasol')->name('admin.productos.create_girasol');
    Route::get('/productos/create_maiz', 'App\Http\Controllers\AdminController@productos_create_maiz')->name('admin.productos.create_maiz');
    Route::get('/productos/create_sorgo', 'App\Http\Controllers\AdminController@productos_create_sorgo')->name('admin.productos.create_sorgo');
    Route::get('/productos/edit_girasol/{product}', 'App\Http\Controllers\AdminController@productos_edit_girasol')->name('admin.productos.edit_girasol');
    Route::get('/productos/edit_maiz/{product}', 'App\Http\Controllers\AdminController@productos_edit_maiz')->name('admin.productos.edit_maiz');
    Route::get('/productos/edit_sorgo/{product}', 'App\Http\Controllers\AdminController@productos_edit_sorgo')->name('admin.productos.edit_sorgo');
    Route::post('/productos', 'App\Http\Controllers\AdminController@productos_store')->name('admin.productos.store');
    Route::patch('/productos', 'App\Http\Controllers\AdminController@productos_update')->name('admin.productos.update');
    Route::post('/productos/activar/{product}', 'App\Http\Controllers\AdminController@producto_activar')->name('admin.productos.activar');
    Route::post('/productos/relevante/{product}', 'App\Http\Controllers\AdminController@producto_relevante')->name('admin.productos.relevante');


    Route::get('/novedades', 'App\Http\Controllers\AdminController@novedades_index')->name('admin.novedades.index');

    Route::get('/textos', 'App\Http\Controllers\AdminController@textos_index')->name('admin.textos.index');
    Route::post('/store_texto_1', 'App\Http\Controllers\AdminController@store_texto_1')->name('admin.textos.store_texto_1');
    Route::post('/store_texto_2', 'App\Http\Controllers\AdminController@store_texto_2')->name('admin.textos.store_texto_2');
    Route::post('/store_texto_direccion', 'App\Http\Controllers\AdminController@store_texto_direccion')->name('admin.textos.store_texto_direccion');
    Route::post('/store_texto_telefonos', 'App\Http\Controllers\AdminController@store_texto_telefonos')->name('admin.textos.store_texto_telefonos');
    Route::post('/store_texto_telefonos_exterior', 'App\Http\Controllers\AdminController@store_texto_telefonos_exterior')->name('admin.textos.store_texto_telefonos_exterior');
    Route::post('/store_texto_mail1', 'App\Http\Controllers\AdminController@store_texto_mail1')->name('admin.textos.store_texto_mail1');
    Route::post('/store_texto_mail2', 'App\Http\Controllers\AdminController@store_texto_mail2')->name('admin.textos.store_texto_mail2');
    Route::post('/store_contacto_whatsapp', 'App\Http\Controllers\AdminController@store_contacto_whatsapp')->name('admin.textos.store_contacto_whatsapp');
    Route::post('/store_contacto_formulario', 'App\Http\Controllers\AdminController@store_contacto_formulario')->name('admin.textos.store_contacto_formulario');

    Route::get('/imagenes', 'App\Http\Controllers\AdminController@imagenes_index')->name('admin.imagenes.index');
    Route::get('/usuarios', 'App\Http\Controllers\AdminController@usuarios_index')->name('admin.usuarios.index');

});

