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

Route::get('/', function () {
    $dataComics = config("db_products");
    $listaComicConId = [];
    foreach ($dataComics as $key => $singoloComic) {
        $singoloComic["id"] = $key;
        $listaComicConId[] = $singoloComic;
    }
    dump($listaComicConId);
    return view('home.index', ["listaComicConId"=> $listaComicConId]);
})->name('home.index');

/* Route::get('/prodotti', function(){
    $dataComics = config("db_products");
    return view('products.index', ["comicsList"=> $dataComics]);
})->name('products.index');
 */


Route::get('/prodotto/{id?}', function ($id) {
    $dataComics = config("db_products");
    if($id >= 0 && $id < count($dataComics)){
        $singoloComic = $dataComics[$id];
        dump($singoloComic);
        return view("pages.product-detail", ["fumetto" => $singoloComic]);

    }
})->name("pages.product-detail");