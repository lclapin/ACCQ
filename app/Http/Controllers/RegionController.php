<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */



    public function bas_st_laurent()
    {
        return view('regions/bas_st_laurent');
        
    }

    public function saguenay()
    {
        return view('regions/saguenay');
        
    }

    public function capitale_nationale()
    {
        return view('regions/capitale_nationale');
        
    }

    public function mauricie()
    {
        return view('regions/mauricie');
        
    }

    public function estrie()
    {
        return view('regions/estrie');
        
    }

    public function montreal()
    {
        return view('regions/montreal');
        
    }

    public function outaouais()
    {
        return view('regions/outaouais');
        
    }

    public function abitibi()
    {
        return view('regions/abitibi');
        
    }

    public function cote_nord()
    {
        return view('regions/cote_nord');
        
    }

    public function nord_du_quebec()
    {
        return view('regions/nord_du_quebec');
        
    }

    public function gaspesie()
    {
        return view('regions/gaspesie');
        
    }

    public function chaudiere_appalaches()
    {
        return view('regions/chaudiere_appalaches');
        
    }

    public function laval()
    {
        return view('regions/laval');
        
    }

    public function lanaudiere()
    {
        return view('regions/lanaudiere');
        
    }

    public function laurentides()
    {
        return view('regions/laurentides');
        
    }

    public function monteregie()
    {
        return view('regions/monteregie');
        
    }

    public function centre_du_quebec()
    {
        return view('regions/centre_du_quebec');
        
    }

}