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

Route::resource("product", "ProductsController");
Route::get("/product/edit/{id}", "ProductsController@edit")->name('editer_produit');
Route::patch("/product/edit/{id}", "ProductsController@update")->name('update_produit');
Route::get("/product/create/{id}", "ProductsController@create")->name('create_produit');
Route::patch("/product/create/{id}", "ProductsController@update")->name('update_produit');

Route::resource("/categorie", "CategoriessController");
Route::get("/categorie/edit/{id}", "CategoriessController@edit")->name('editer_categorie');
Route::patch("/categorie/edit/{id}", "CategoriessController@update")->name('update_categorie');
Route::get("/categorie/create/{id}", "CategoriessController@create")->name('create_categorie');
Route::patch("/categorie/create/{id}", "CategoriessController@update")->name('update_categorie');

Route::resource("/client", "ClientssController");
Route::get("/client/edit/{id}", "ClientssController@edit")->name('editer_client');
Route::patch("/client/edit/{id}", "ClientssController@update")->name('update_client');
Route::get("/client/create/{id}", "ClientssController@create")->name('create_client');
Route::patch("/client/create/{id}", "ClientssController@update")->name('update_client');

Route::resource("/livreur", "LivreurssController");
Route::get("/livreur/edit/{id}", "LivreurssController@edit")->name('editer_livreur');
Route::patch("/livreur/edit/{id}", "LivreurssController@update")->name('update_livreur');
Route::get("/livreur/create/{id}", "LivreurssController@create")->name('create_livreur');
Route::patch("/livreur/create/{id}", "LivreurssController@update")->name('update_livreur');



Route::resource("/commande", "CommandesController");
Route::get("/commande/edit/{id}", "CommandesController@edit")->name('editer_commande');
Route::patch("/commade/edit/{id}", "CommandesController@update")->name('update_commande');
Route::get("/commande/create/{id}", "CommandesController@create")->name('create_commande');
Route::patch("/commande/create/{id}", "CommandesController@update")->name('update_commande');




Route::get("/Portfolio/portfolio", "PortfolioController@Portfolio")->name('portfolio');


Route::get("/Accueill/accueill", "AccueillController@Accueill")->name('accueill');


Route::get("/Service/service", "ServiceController@Service")->name('service');



Route::get("/Contact/contact", "ContactController@Contact")->name('contact');


Route::get("/Team/team", "TeamController@Team")->name('team');



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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//*/