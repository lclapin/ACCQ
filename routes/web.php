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

Route::get('pages/obnl', 'NavController@obnl')->name('obnl');

Route::get('pages/statuts_reglements', 'NavController@statuts_reglements')->name('statuts_reglements');

Route::get('pages/constat', 'NavController@constat')->name('constat');

Route::get('pages/mission', 'NavController@mission')->name('mission');

Route::get('pages/bibliotheque', 'NavController@bibliotheque')->name('bibliotheque');

Route::get('pages/mediatheque', 'NavController@mediatheque')->name('mediatheque');

Route::get('pages/promouvoir', 'NavController@promouvoir')->name('promouvoir');

Route::get('pages/sondage', 'NavController@sondage')->name('sondage');

Route::get('pages/constituons', 'NavController@constituons')->name('constituons');

Route::get('pages/ateliers', 'NavController@ateliers')->name('ateliers');

Route::get('pages/rencontres', 'NavController@rencontres')->name('rencontres');

Route::get('pages/devenir_membre', 'NavController@devenir_membre')->name('devenir_membre');

Route::get('pages/listeOR', 'NavController@listeOR')->name('listeOR');


/*Régions*/

Route::get('regions/bas_st_laurent', 'RegionController@bas_st_laurent')->name('bas_st_laurent');

Route::get('regions/saguenay', 'RegionController@saguenay')->name('saguenay');

Route::get('regions/capitale_nationale', 'RegionController@capitale_nationale')->name('capitale_nationale');

Route::get('regions/mauricie', 'RegionController@mauricie')->name('mauricie');

Route::get('regions/estrie', 'RegionController@estrie')->name('estrie');

Route::get('regions/montreal', 'RegionController@montreal')->name('montreal');

Route::get('regions/outaouais', 'RegionController@outaouais')->name('outaouais');

Route::get('regions/abitibi', 'RegionController@abitibi')->name('abitibi');

Route::get('regions/cote_nord', 'RegionController@cote_nord')->name('cote_nord');

Route::get('regions/nord_du_quebec', 'RegionController@nord_du_quebec')->name('nord_du_quebec');

Route::get('regions/gaspesie', 'RegionController@gaspesie')->name('gaspesie');

Route::get('regions/chaudiere_appalaches', 'RegionController@chaudiere_appalaches')->name('chaudiere_appalaches');

Route::get('regions/laval', 'RegionController@laval')->name('laval');

Route::get('regions/lanaudiere', 'RegionController@lanaudiere')->name('lanaudiere');

Route::get('regions/laurentides', 'RegionController@laurentides')->name('laurentides');

Route::get('regions/monteregie', 'RegionController@monteregie')->name('monteregie');

Route::get('regions/centre_du_quebec', 'RegionController@centre_du_quebec')->name('centre_du_quebec');






