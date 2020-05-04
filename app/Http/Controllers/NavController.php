<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\SignaturesManifesteRequest;

use App\Http\Requests\SignaturesAppelRequest;



class NavController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function accueil()
    {

        $regionsU = DB::table('hives')->select(DB::raw('id, name, CONCAT(id,".",name) as nomCompletR, image, fb_url'))
        ->orderby('id')
        ->get();

        return view('accueil', ['regionsU' => $regionsU]);
        
    }

    public function regionU($id)
    {
        $titresR = DB::table('hives')
        ->select(DB::raw('id, name, CONCAT(id,".",name) as nomCompletR, image, fb_url'))
        ->where('id', $id)
        ->get();
        
        $responsablesU = DB::table('hive_contacts')
        ->select(DB::raw('id, hive_id, full_name, email, phone, fb_page'))
        ->where('hive_id', $id)
        ->get();

        return view('pages/regionU', ['titresR' => $titresR], ['responsablesU' => $responsablesU]);
        
    }

    public function reunionsU($id)
    {
        $titresR = DB::table('hives')
        ->select(DB::raw('id, name, CONCAT(id,".",name) as nomCompletR, image, fb_url'))
        ->where('id', $id)
        ->get();
        
        $reunionsU = DB::table('hive_meetings')
        ->select(DB::raw('id, hive_id, address, meeting_date, report'))
        ->where('hive_id', $id)
        ->get();

        return view('pages/reunionsU', ['titresR' => $titresR], ['reunionsU' => $reunionsU]);
        
    }

    public function manifeste()
    {
        $countSignsM = DB::table('members')->count();
        $signaturesM = DB::select('select * from members order by id DESC limit 20');

        return view('pages/manifeste', ['countSignsM' => $countSignsM], ['signaturesM' => $signaturesM]);
        
    }

    public function createSM(SignaturesManifesteRequest $request)
    {
        $nom = $request->input('nom');
        $courriel = $request->input('courriel');
        $telephone = $request->input('telephone');
        $municipalite = $request->input('municipalite');
        $code_postal = $request->input('code_postal');
 
        $data = array('name'=>$nom,"email"=>$courriel,"phone"=>$telephone,"city"=>$municipalite,"postal_code"=>$code_postal);

        DB::table('new_members')->insert($data);

        $countSignsM = DB::table('members')->count();
        $signaturesM = DB::select('select * from members order by id DESC limit 20');

        return view('pages/manifeste', ['signaturesM' => $signaturesM], ['countSignsM' => $countSignsM]);
        
    }

    public function signatures_manifeste()
    {
        
       // $signaturesM = DB::table('members')
        //->select(DB::raw('*'))
        //->paginate(20);
        $countSignsM = DB::table('members')->count();
        $signaturesM = DB::select('select * from members order by id DESC');

        return view('pages/signatures_manifeste', ['countSignsM' => $countSignsM], ['signaturesM' => $signaturesM]);
        
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

    public function engagement()
    {
        return view('pages/engagement');
        
    }

    public function requetes()
    {
        return view('pages/requetes');
        
    }

    public function appel()
    {

        $countSignsA = DB::table('participants')->count();

        return view('pages/appel', ['countSignsA' => $countSignsA]);
        
    }

    public function constitution2()
    {
        return view('pages/constitution2');
        
    }

    public function devenir()
    {
        return view('pages/devenir');
        
    }

    public function signatures_appel()
    {
        $signaturesA = DB::select('select CONCAT(first_name, " ", last_name) AS nomComplet from participants order by id DESC');

        return view('pages/signatures_appel', ['signaturesA' => $signaturesA]);
        
    }

    public function createSA(SignaturesAppelRequest $request)
    {
        $prenom = $request->input('prenomA');
        var_dump($prenom);
        $nom = $request->input('nomA');
        $courriel = $request->input('courrielA');
        $telephone = $request->input('telephoneA');
        $municipalite = $request->input('municipaliteA');
        $code_postal = $request->input('code_postalA');
        $cree = $request->input('CURRENT_TIMESTAMP');
 
        $data = array('first_name'=>$prenom,'last_name'=>$nom,"email"=>$courriel,"phone"=>$telephone,"city"=>$municipalite,"postal_code"=>$code_postal,"created_at"=>$cree);

        DB::table('participants')->insert($data);

        $signaturesA = DB::select('select CONCAT(first_name, " ", last_name) AS nomComplet from participants order by id DESC');

        return view('pages/signatures_appel', ['signaturesA' => $signaturesA]);
        
    }

    public function listePCP()
    {
        return view('pages/listePCP');
        
    }

    public function listePCC()
    {
        $hives = DB::table('hives')->select(DB::raw('name, CONCAT(id, " - ", name) AS nomComplet'))->get();

       

        $regionsD = DB::table('hives')
        ->select(DB::raw('hives.id , CONCAT(hives.id, " - ", hives.name) AS nomComplet, hives.name AS nameHive, districts.id as idD,
         districts.name as nameC'))
        ->join('districts', 'hives.id', '=', 'districts.hive_id')
        //->where('hive_id', $id)
        ->get();
        


        /*foreach($hives as $hive){
            
            echo "<br>";
            //var_dump($test);
           //var_dump($regionsD[0]->nomComplet);
            echo "<br>";
            //var_dump($unique_hive);
            var_dump($hive);
            
            foreach($regionsD as $regionD){
                if($hive->name == $regionD->nameHive){
                    echo "<br>";
                    var_dump($regionD->nameC);
                }
            }

        }*/
        //hives.name AS nameHive,
       

       
        
        /*$districts = DB::table('districts')
           ->whereExists(function ($query) {
            
               $query->select(DB::raw(1))
                     ->from('hives')
                     ->whereRaw('districts.hive_id', $regionD->id);
           })
           ->get();*/
        
        
		//foreach($regionsD as $regionD)
		//{
        //$test = select * from districts left join hives on hives.id = districts.hive_id 
        //$districts = DB::table('districts')
        //->select(DB::raw('districts.id, districts.hive_id, districts.name as nameD'))
        //->leftjoin('hives', 'hives.id', '=', 'districts.hive_id')
        //->get();
        //->groupby('hives.id')
        //->where('districts.hive_id', $regionD->id)
        //->get();
        //var_dump($regionD->id);
        //}

        //$districts = DB::select('select CONCAT(first_name, " ", last_name) AS nomComplet from participants order by id DESC');

        return view('pages/listePCC', ['hives' => $hives], ['regionsD' => $regionsD]);
        
    }

    public function pageCandidats($idD)
    {

        $titresCand = DB::table('districts')->select(DB::raw('id, name'))->where('id', $idD)->get();

        return view('pages/pageCandidats', ['titresCand' => $titresCand]);        
    }


    public function convocation()
    {
        return view('pages/convocation');
        
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

    public function vision()
    {
        return view('pages/vision');
        
    }

    public function objectifs()
    {
        return view('pages/objectifs');
        
    }

    public function nous_rejoindre()
    {
        return view('pages/nous_rejoindre');
        
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
        $titresOR = DB::table('hives')
        ->select(DB::raw('id, name, CONCAT(id,".",name) as nomCompletR, image, fb_url'))
        ->get();

        return view('pages/listeOR', ['titresOR' => $titresOR]);
        
    }

    public function organigramme()
    {
        return view('pages/organigramme');
        
    }
}