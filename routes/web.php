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

//Route::get('admin/', 'AdminController@login', function () {
  //  return view('admin/login');
//});

Route::get('/', 'NavController@accueil')->name('accueil');

Route::get('pages/regionU/{id}', 'NavController@regionU')->name('regionU');

Route::get('pages/reunionsU/{id}', 'NavController@reunionsU')->name('reunionsU');

Route::get('pages/manifeste', 'NavController@manifeste')->name('manifeste');

Route::post('createSM','NavController@createSM');

Route::get('pages/signatures_manifeste', 'NavController@signatures_manifeste')->name('signatures_manifeste');

Route::get('pages/projet_de_loi', 'NavController@projet_de_loi')->name('projet_de_loi');

Route::get('pages/discutoire', 'NavController@discutoire')->name('discutoire');

Route::get('pages/medias', 'NavController@medias')->name('medias');

Route::get('pages/realisations', 'NavController@realisations')->name('realisations');

Route::get('pages/engagement', 'NavController@engagement')->name('engagement');

Route::get('pages/listePCP', 'NavController@listePCP')->name('listePCP');

Route::get('pages/listePCC', 'NavController@listePCC')->name('listePCC');

Route::get('pages/pageCandidats/{idD}', 'NavController@pageCandidats')->name('pageCandidats');

Route::get('pages/convocation', 'NavController@convocation')->name('convocation');

Route::get('pages/nous_joindre', 'NavController@nous_joindre')->name('nous_joindre');

Route::get('pages/a_propos', 'NavController@a_propos')->name('a_propos');

Route::get('pages/obnl', 'NavController@obnl')->name('obnl');

Route::get('pages/statuts_reglements', 'NavController@statuts_reglements')->name('statuts_reglements');

Route::get('pages/constat', 'NavController@constat')->name('constat');

Route::get('pages/mission', 'NavController@mission')->name('mission');

Route::get('pages/vision', 'NavController@vision')->name('vision');

Route::get('pages/objectifs', 'NavController@objectifs')->name('objectifs');

Route::get('pages/nous_rejoindre', 'NavController@nous_rejoindre')->name('nous_rejoindre');

Route::get('pages/bibliotheque', 'NavController@bibliotheque')->name('bibliotheque');

Route::get('pages/mediatheque', 'NavController@mediatheque')->name('mediatheque');

Route::get('pages/promouvoir', 'NavController@promouvoir')->name('promouvoir');

Route::get('pages/sondage', 'NavController@sondage')->name('sondage');

Route::get('pages/requetes', 'NavController@requetes')->name('requetes');

Route::get('pages/appel', 'NavController@appel')->name('appel');

Route::post('createSA','NavController@createSA');

Route::get('pages/constitution2', 'NavController@constitution2')->name('constitution2');

Route::get('pages/devenir', 'NavController@devenir')->name('devenir');

Route::get('pages/signatures_appel', 'NavController@signatures_appel')->name('signatures_appel');

Route::get('pages/constituons', 'NavController@constituons')->name('constituons');

Route::get('pages/ateliers', 'NavController@ateliers')->name('ateliers');

Route::get('pages/rencontres', 'NavController@rencontres')->name('rencontres');

Route::get('pages/devenir_membre', 'NavController@devenir_membre')->name('devenir_membre');

Route::get('pages/listeOR', 'NavController@listeOR')->name('listeOR');

Route::get('pages/organigramme', 'NavController@organigramme')->name('organigramme');

/*Admin*/

Route::get('admin/', 'AdminController@login');

//Route::post('auth/login','AdminController@logout')->name('logout');

Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

Route::group(['middleware' => 'auth'], function(){


    Route::get('admin/home', 'AdminController@home')->name('home');
    
    Route::get('admin/engagements', 'AdminController@engagements')->name('engagements');
    
    Route::get('admin/engagements', 'AdminController@candidats1')->name('candidats1');
    
    Route::get('admin/acrq', 'AdminController@acrq')->name('acrq');
    
    Route::get('insertModifierACRQ/{id}', 'AdminController@insertModifierACRQ')->name('insertModifierACRQ');
    
    Route::post('admin/acrq/{id}', 'AdminController@modifierACRQ')->name('modifierACRQ');
    
    Route::get('admin/responsablesA/{id}', 'AdminController@responsablesA')->name('responsablesA');
    
    Route::get('insertModifierResponsable/{id}', 'AdminController@insertModifierResponsable')->name('insertModifierResponsable');
    
    Route::post('admin/responsablesA/{id}/{idH}', 'AdminController@modifierResponsable')->name('modifierResponsable');
    
    Route::get('admin/nouveauResponsable/{id}', 'AdminController@nouveauResponsable')->name('nouveauResponsable');
    
    Route::post('admin/responsablesA/{id}', 'AdminController@ajouterResponsable')->name('ajouterResponsable');
    
    Route::get('admin/{id}/{idH}', 'AdminController@supResp')->name('supResp');
    
    Route::get('reunionsA/{id}', 'AdminController@reunionsA')->name('reunionsA');
    
    Route::get('insertModifierReunion/{id}', 'AdminController@insertModifierReunion')->name('insertModifierReunion');
    
    Route::post('admin/reunionsA/{id}/{idH}', 'AdminController@modifierReunion')->name('modifierReunion');
    
    Route::get('nouvelleReunion/{id}', 'AdminController@nouvelleReunion')->name('nouvelleReunion');
    
    Route::post('admin/ajouterReunion/{id}', 'AdminController@ajouterReunion')->name('ajouterReunion');
    
    Route::get('admin/membres', 'AdminController@membres')->name('membres');
    
    Route::get('approbationM/{id}', 'AdminController@approbationM')->name('approbationM');
    
    Route::get('supAMEM/{id}', 'AdminController@supAMEM')->name('supAMEM');
    
    Route::get('admin/ateliersA', 'AdminController@ateliersA')->name('ateliersA');
    
    Route::get('admin/nouvelAtelier', 'AdminController@nouvelAtelier')->name('nouvelAtelier');
    
    Route::post('ajoutAtelier', 'AdminController@ajoutAtelier');
    
    Route::get('insertModifierAtelier/{id}', 'AdminController@insertModifierAtelier')->name('insertModifierAtelier');
    
    Route::post('admin/ateliersA/{id}', 'AdminController@modifierAtelier')->name('modifierAtelier');
    
    Route::get('supAtelier/{id}', 'AdminController@supAtelier')->name('supAtelier');
    
    Route::get('inscriptions/{id}', 'AdminController@inscriptions')->name('inscriptions');
    
    Route::get('modifierInscrit/{id}', 'AdminController@insertModifierInscrit')->name('insertModifierInscrit');
    
    Route::post('admin/modifierInscrit/{id}', 'AdminController@modifierInscrit')->name('modifierInscrit');
    
    Route::get('admin/{id}/{idI}', 'AdminController@supInscrit')->name('supInscrit');
    
    Route::get('admin/participants', 'AdminController@participants')->name('participants');
    
    Route::get('admin/{id}', 'AdminController@supPart')->name('supPart');
    
    Route::get('admin/nouvelleReponse', 'AdminController@nouvelleReponse')->name('nouvelleReponse');
    
    Route::get('admin/listeCandidats', 'AdminController@listeCandidats')->name('listeCandidats');
    
    Route::get('admin/nouveauCandidat', 'AdminController@nouveauCandidat')->name('nouveauCandidat');
    
    Route::get('admin/listeCandidats', 'AdminController@candidats2')->name('candidats2');
    
    Route::get('admin/modifierCand/{id}', 'AdminController@insertModifierCand')->name('insertModifierCand');
    
    Route::post('admin/engagements/{id}', 'AdminController@modifierCandC')->name('modifierCand1');
    
    Route::get('admin/engagements/{id}', 'AdminController@supRep')->name('supRep');
    
    Route::post('ajoutCandidat', 'AdminController@ajoutCandidat');
    
    Route::get('admin/listeCandidats/{id}', 'AdminController@supCand')->name('supCand');
  
  
  // and your other routes which you wanna protect
  });

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('admin/', 'AdminController@login');
