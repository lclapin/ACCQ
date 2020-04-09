<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;



class NavController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function accueil()
    {
        return view('accueil');
        
    }

    public function manifeste()
    {
        return view('pages/manifeste');
        
    }

    public function projet_de_loi()
    {
        return view('pages/projet_de_loi');
        
    }

    public function discutoire()
    {
        return view('pages/discutoire');
        
    }

    public function medias()
    {
        return view('pages/medias');
        
    }

    public function realisations()
    {
        return view('pages/realisations');
        
    }

    public function nous_joindre()
    {
        return view('pages/nous_joindre');
        
    }

    public function a_propos()
    {
        return view('pages/a_propos');
        
    }

    public function obnl()
    {
        return view('pages/obnl');
        
    }

    public function statuts_reglements()
    {
        return view('pages/statuts_reglements');
        
    }

    public function constat()
    {
        return view('pages/constat');
        
    }

    public function mission()
    {
        return view('pages/mission');
        
    }

    public function bibliotheque()
    {
        return view('pages/bibliotheque');
        
    }

    public function mediatheque()
    {
        return view('pages/mediatheque');
        
    }

    public function promouvoir()
    {
        return view('pages/promouvoir');
        
    }

    public function sondage()
    {
        return view('pages/sondage');
        
    }

    public function constituons()
    {
        return view('pages/constituons');
        
    }

    public function ateliers()
    {
        return view('pages/ateliers');
        
    }

    public function rencontres()
    {
        return view('pages/rencontres');
        
    }

    public function devenir_membre()
    {
        return view('pages/devenir_membre');
        
    }

    public function listeOR()
    {
        return view('pages/listeOR');
        
    }
}