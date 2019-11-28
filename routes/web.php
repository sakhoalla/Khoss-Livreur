<?php

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

Route::get('/', "HomeController@index");

Route::get("/livreur/{id}", "HomeController@show" );



//normale
//Route::get("/Livreur", "CategoriesController@index" );
//Route::get("/Categories", "CategoriesController@index" );

//Route::get("/produits", "CategoriesController@show" );

//Route::get("/categorie/{id}", "CategoriesController@show" );

//Route::get("/produits /{id}", function ($id) {
  //  return "Je suis sur le produit $id";
//});

//Route::get("/produits /{id} /{id_comment}/{id_categorie}", function ($id,$_comment,$_categorie) {
   // return "Je suis  le produit $id";
//});