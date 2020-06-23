<?php

use App\Http\Middleware\Admin;
use App\Model\maison;
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

//Route::get('/', function () {
//    return view('welcome');
//});



/****SECTION ADMINS  */

//Route::get("/clients", "clientController@index");
//
//Route::get("/clients/create", "clientController@create");
//
//Route::post("/clients", "clientController@store");
//
//Route::get("/clients/{id}", "clientController@show");
//
//Route::get("/clients", "clientController@index");
//
//Route::get("/clients/{id}/edit", "clientController@edit");
//
//Route::patch("/clients/{id}", "clientController@update");
//
//Route::delete('/clients/{id}', "clientController@destroy");

Route::resource('/clients', 'clientController')->middleware(Admin::class);

Route::get('/logout', function(){
    Auth()->logout();
    return redirect("/accueil");

})->middleware(Admin::class);


/******END SECTION ADMINS */

Route::get('/', "indexController@index");

Route::get("/accueil", "indexController@index");

Route::get("/connect", "connectController@connect"); 
Route::post("/connect", "connectController@postconnect");                                                                                                                                                                                          

Route::get("/contact", "contactController@contact");

Route::get("/services", "servicesController@services");

Route::get("/alertemail", "alertEmailController@email");

Route::get("/villas", "villaController@villa"); //villa_maison list all villa

Route::get("/appartements", "appartementsController@appartement");//list all appart

Route::get("/locations", "locationsController@location"); //list all locations

Route::get("/autres_biens", "autresBiensController@autrebien");

Route::get("/exclusivite", "exclusiviteController@exclusivite");

Route::get("/appart50", "appart50Controller@appart50");

Route::get("/appart100", "appart100Controller@appart100");

Route::get("/piece3", "piece3Controller@piece3");

Route::get("/piece4", "piece4Controller@piece4");

Route::get('/details{id}', "detailsController@article");

Route::get("query", "queryController@query");

//Route::get("zzz", "queryController@query");



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/************pour les Mails *************************/
Route::post('/newsletter', 'newsletterController@newsletter');

Route::post('/information_generale', 'information_generaleController@information_generale');

Route::post('/article_information/{id}', 'article_informationController@article_information');


