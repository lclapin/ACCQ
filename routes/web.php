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
    return view('accueil');
});

Route::get('/', 'NavController@accueil')->name('accueil');

Route::get('pages/manifeste', 'NavController@manifeste')->name('manifeste');

Route::get('pages/projet_de_loi', 'NavController@projet_de_loi')->name('projet_de_loi');

Route::get('pages/discutoire', 'NavController@discutoire')->name('discutoire');

Route::get('pages/medias', 'NavController@medias')->name('medias');

Route::get('pages/realisations', 'NavController@realisations')->name('realisations');

Route::get('pages/nous_joindre', 'NavController@nous_joindre')->name('nous_joindre');

Route::get('pages/a_propos', 'NavController@a_propos')->name('a_propos');


