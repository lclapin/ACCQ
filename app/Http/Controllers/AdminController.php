<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\ModifierReponseRequest;

use App\Http\Requests\NouveauCandidatRequest;

use App\Http\Requests\ModifierAtelierRequest;

use App\Http\Requests\ModifierInscritRequest;

use App\Http\Requests\NouvelAtelierRequest;

use App\Http\Requests\ModifierResponsableRequest;

use App\Http\Requests\NouveauResponsableRequest;

use App\Http\Requests\ModifierReunionRequest;

use App\Http\Requests\NouvelleReunionRequest;

use App\Http\Requests\ModifierACRQRequest;

use App\Http\Requests\ApprobationMembreRequest;

use App\Http\Requests\AuthentificationRequest;

use App\Http\Requests\ApprobationUsagerRequest;

use Auth;



class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {

        //$authentifications = DB::table('users')->select(DB::raw('id, email'))->get();

        return view('auth/login');
        
    }

    //public function logout()
    //{

      //  Auth::logout();

        //$authentifications = DB::table('users')->select(DB::raw('id, email'))->get();

       // return view('auth/login');
        
    //}


    //public function authentification()
    //{
        

      //  return view('admin/home');
        
    //}


    /*public function authentification(AuthentificationRequest $request)
    {
        

        $courriel = $request->input('courrielA');
        $motDePasse = $request->input('mdpA');

        $hashed_password = password_hash($motDePasse, PASSWORD_DEFAULT);
       
        $motDePasseE = DB::table('users')->select('encrypted_password')
        ->where('email', $courriel)
        ->get();

        if(password_verify($motDePasse, '$2y$10$U6Skl7YuIJQOCLS4Djlzvee8uSgmjJvIhthp6SU.jQee0NDWNCj72')){
            session_start();
            $_SESSION['courriel'] = $courriel;
        return view('admin/home');

        }else{
            $authentifications = DB::table('users')->select(DB::raw('id, email'))->get();

            return view('admin/login', ['authentifications' => $authentifications]);
        }

        
    }*/


    public function home()
    {
        return view('/home');
        
    }

    public function engagements()
    {
        return view('admin/engagements');
        
    }

    public function acrq()
    {

        //$ACRQS = DB::select('select id, CONCAT(id, " . ", name) AS nomComplet from hives order by id asc');

        $ACRQS = DB::table('hives')
                ->select(DB::raw('hives.id, CONCAT(hives.id, " . ", name) AS nomComplet'))
                ->orderBy('id', 'asc')
                //->join('hive_contacts', 'hives.id', '=', 'hive_contacts.hive_id')
                ->get();

        return view('admin/acrq', ['ACRQS' => $ACRQS]);
        
    }

    public function insertModifierACRQ($id)
    {

        $titresACRQM = DB::table('hives')->select(DB::raw('id, name, number, image, fb_url'))->where('id', $id)->get();


        return view('admin/modifierACRQ', ['titresACRQM' => $titresACRQM]);   
    }

    public function modifierACRQ(ModifierACRQRequest $request, $id)
    {

        $ACRQS = DB::table('hives')
        ->select(DB::raw('hives.id, CONCAT(hives.id, " . ", name) AS nomComplet'))
        //->join('hive_contacts', 'hives.id', '=', 'hive_contacts.hive_id')
        ->get();



        $adImage = $request->file('imageACM');

        if($adImage){		
			$filename1 = time().'.'.$adImage->getClientOriginalExtension();
			$public_path1 = '../public/images/regions';
			$adImage->move(public_path($public_path1),  $filename1);
								 
            $lien_image = $filename1;
        }else{
            foreach($ACRQS as $ACRQ)
		    {
                $lien_image = $ACRQ->image;
            }
        }

        DB::table('hives')
                ->where('id', $id)
                ->update(['name' =>$request['nomACM'],
                'number'=>$request['numeroACM'],
                'fb_url'=>$request['facebookACM'],
                'image'=>$lien_image
                ]);

        return view('admin/acrq', ['ACRQS' => $ACRQS]);
        
    }

    public function responsablesA($id)
    {
        $titresResp = DB::table('hives')->select(DB::raw('id, name'))->where('id', $id)->get();

        $responsablesA = DB::table('hive_contacts')
            ->select(DB::raw('id, hive_id, full_name, email, phone'))
            //->join('workshops', 'workshop.id', '=', 'workshop_registrations.workshop_id')
            ->where('hive_id', $id)
            ->get();

        return view('admin/responsablesA', ['titresResp' => $titresResp], ['responsablesA' => $responsablesA]);
        
    }

    public function insertModifierResponsable($id)
    {

        $titresR= DB::table('hives')->select(DB::raw('id, name'))->where('id', $id)->get();
        var_dump($titresR);
        $modResponsables = DB::table('hive_contacts')->select(DB::raw('id, hive_id, full_name, email, phone, function, fb_page'))->where('id', $id)->get();


        return view('admin/modifierResponsable', ['titresR' => $titresR], ['modResponsables' => $modResponsables]);
        
    }

    public function modifierResponsable(ModifierResponsableRequest $request, $id, $idH)
    {
        DB::table('hive_contacts')
                ->where('id', $id)
                ->update(['full_name' =>$request['nomRM'],
                'email'=>$request['courrielRM'],
                'phone'=>$request['telephoneRM'],
                'fb_page'=>$request['facebookRM']
                ]);

                $titresResp = DB::table('hives')->select(DB::raw('id, name'))->where('id', $id)->get();
            
                $responsablesA = DB::table('hive_contacts')
                ->select(DB::raw('id, hive_id, full_name, email, phone'))
                //->join('workshops', 'workshop.id', '=', 'workshop_registrations.workshop_id')
                ->where('hive_id', $idH)
                ->get();

                return view('admin/responsablesA', ['titresResp' => $titresResp], ['responsablesA' => $responsablesA]);
        
    }

    public function nouveauResponsable($id)
    {
        $titresRespA = DB::table('hives')->select(DB::raw('id, name'))->where('id', $id)->get();
            
        $ajoutResponsables = DB::table('hive_contacts')
                ->select(DB::raw('id, hive_id, full_name, email, phone'))
                //->join('workshops', 'workshop.id', '=', 'workshop_registrations.workshop_id')
                ->where('hive_id', $id)
                ->get();

        return view('admin/nouveauResponsable', ['titresRespA' => $titresRespA], ['ajoutResponsables' => $ajoutResponsables]);
   
    }

    public function ajouterResponsable(NouveauResponsableRequest $request, $id)
    {

        $hive_id = $id;
        $nom = $request->input('nomRA');
        $courriel = $request->input('courrielRA');
        $telephone = $request->input('telephoneRA');
        $facebook = $request->input('facebookRA');
        
 
        $data = array("hive_id"=>$hive_id,"full_name"=>$nom,"email"=>$courriel,"phone"=>$telephone,"fb_page"=>$facebook);

        DB::table('hive_contacts')->insert($data);

        $titresResp = DB::table('hives')->select(DB::raw('id, name'))->where('id', $id)->get();
            
                $responsablesA = DB::table('hive_contacts')
                ->select(DB::raw('id, hive_id, full_name, email, phone'))
                //->join('workshops', 'workshop.id', '=', 'workshop_registrations.workshop_id')
                ->where('hive_id', $id)
                ->get();

        return view('admin/responsablesA', ['titresResp' => $titresResp], ['responsablesA' => $responsablesA]);
        
    }

    public function supResp($id ,$idH)
    {
        DB::table('hive_contacts')->where('id', $id)->delete();

        $titresResp = DB::table('hives')->select(DB::raw('id, name'))->where('id', $idH)->get();
            
                $responsablesA = DB::table('hive_contacts')
                ->select(DB::raw('id, hive_id, full_name, email, phone'))
                //->join('workshops', 'workshop.id', '=', 'workshop_registrations.workshop_id')
                ->where('hive_id', $idH)
                ->get();

        return view('admin/responsablesA', ['titresResp' => $titresResp], ['responsablesA' => $responsablesA]);
        
    }

    public function reunionsA($id)
    {

        $titresReun = DB::table('hives')->select(DB::raw('id, name'))->where('id', $id)->get();

        $reunionsA = DB::table('hive_meetings')
                ->select(DB::raw('id, hive_id, CONCAT(meeting_date, " à ", meeting_time) AS dateComplete, location, report'))
                //->join('workshops', 'workshop.id', '=', 'workshop_registrations.workshop_id')
                ->where('hive_id', $id)
                ->get();
            

        return view('admin/reunionsA', ['titresReun' => $titresReun], ['reunionsA' => $reunionsA]);
        
    }

    public function insertModifierReunion($id)
    {

        $titresReunM = DB::table('hives')->select(DB::raw('id, name'))->where('id', $id)->get();

        $modReunions = DB::table('hive_meetings')->select(DB::raw('id, hive_id, location, address, city, meeting_date, meeting_time'))->where('id', $id)->get();


        return view('admin/modifierReunion', ['titresReunM' => $titresReunM], ['modReunions' => $modReunions]);
        
    }

    public function modifierReunion(ModifierReunionRequest $request, $id, $idH)
    {

        $titresReun = DB::table('hives')->select(DB::raw('id, name'))->where('id', $id)->get();
            
        $reunionsA = DB::table('hive_meetings')
        ->select(DB::raw('id, hive_id, CONCAT(meeting_date, " à ", meeting_time) AS dateComplete, location, agenda, report'))
        //->join('workshops', 'workshop.id', '=', 'workshop_registrations.workshop_id')
        ->where('hive_id', $idH)
        ->get();

        $adOR = $request->file('ORREM');
        
        if($adOR){
            $filename = time().'.'.$adOR->getClientOriginalExtension();
            $public_path = '../public/pdf/CR';
            $adOR->move(public_path($public_path),  $filename);
             
            $lien_OR = $filename;
        }else{
            foreach($reunionsA as $reunionA)
		    {
                $lien_OR = $reunionA->agenda;
            }
        }

        $adCR = $request->file('CRREM');

        if($adCR){		
			$filename1 = time().'.'.$adCR->getClientOriginalExtension();
			$public_path1 = '../public/pdf/CR';
			$adCR->move(public_path($public_path1),  $filename1);
								 
            $lien_CR = $filename1;
        }else{
            foreach($reunionsA as $reunionA)
		    {
                $lien_CR = $reunionA->report;
            }
        }

        DB::table('hive_meetings')
                ->where('id', $id)
                ->update(['location' =>$request['endroitREM'],
                'address'=>$request['adresseREM'],
                'city'=>$request['municapaliteREM'],
                'meeting_date'=>$request['dateREM'],
                'meeting_time'=>$request['heureREM'],
                'agenda'=>$lien_OR,
                'report'=>$lien_CR
                ]);

                return view('admin/reunionsA', ['titresReun' => $titresReun], ['reunionsA' => $reunionsA]);
        
    }

    public function nouvelleReunion($id)
    {
        $titresReunN = DB::table('hives')->select(DB::raw('id, name'))->where('id', $id)->get();
            
        $ajoutReunions = DB::table('hive_meetings')
                ->select(DB::raw('id, hive_id, CONCAT(meeting_date, " à ", meeting_time) AS dateComplete, location, agenda, report'))
                //->join('workshops', 'workshop.id', '=', 'workshop_registrations.workshop_id')
                ->where('hive_id', $id)
                ->get();

        return view('admin/nouvelleReunion', ['titresReunN' => $titresReunN], ['ajoutReunions' => $ajoutReunions]);
   
    }

    public function ajouterReunion(NouvelleReunionRequest $request, $id)
    {

        $adOR = $request->file('ORREA');
        
        if($adOR){
            $filename = time().'.'.$adOR->getClientOriginalExtension();
            $public_path = '../public/pdf/CR';
            $adOR->move(public_path($public_path),  $filename);
             
            $lien_OR = $filename;
        }else{
            $lien_OR = NULL;
        }

        $adCR = $request->file('CRREA');

        if($adCR){		
			$filename1 = time().'.'.$adCR->getClientOriginalExtension();
			$public_path1 = '../public/pdf/CR';
			$adCR->move(public_path($public_path1),  $filename1);
								 
            $lien_CR = $filename1;
        }else{
            $lien_CR = NULL;
        }

        $hive_id = $id;
        $endroit = $request->input('endroitREA');
        $adresse = $request->input('adresseREA');
        $municipalite = $request->input('municipaliteREA');
        $date = $request->input('dateREA');
        $heure = $request->input('heureREA');
        //$OR = $request->input('facebookREA');
        //$CR = $request->input('facebookREA');
        
        
 
        $data = array("hive_id"=>$hive_id,"location"=>$endroit,"address"=>$adresse,"city"=>$municipalite,"meeting_date"=>$date,"meeting_time"=>$heure,"agenda"=>$lien_OR,"report"=>$lien_CR);

        DB::table('hive_meetings')->insert($data);

        $titresReun = DB::table('hives')->select(DB::raw('id, name'))->where('id', $id)->get();
            
        $reunionsA = DB::table('hive_meetings')
        ->select(DB::raw('id, hive_id, CONCAT(meeting_date, " à ", meeting_time) AS dateComplete, location, agenda, report'))
        //->join('workshops', 'workshop.id', '=', 'workshop_registrations.workshop_id')
        ->where('hive_id', $id)
        ->get();

        return view('admin/reunionsA', ['titresReun' => $titresReun], ['reunionsA' => $reunionsA]);
        
    }

    public function membres()
    {
        $countNM = DB::table('new_members')->count();
        $countsOM = DB::table('members')->count();

        $nouveauxMembres = DB::table('new_members')
        ->select(DB::raw('id, name, email, phone, city, postal_code, created_at'))
        ->get();

        $membres = DB::table('members')
        ->select(DB::raw('id, name, email, phone, city, postal_code, status, no_region, created_at'))
        ->orderBy('created_at', 'desc')
        ->get();

        return view('admin/membres', compact('countNM','nouveauxMembres','countsOM', 'membres'));
        //return view('admin/membres', ['countNM' => $countNM], ['nouveauxMembres' => $nouveauxMembres], ['countsOM' => $countsOM], ['membres' => $membres]);
        
    }

    public function approbationM(ApprobationMembreRequest $request, $id)
    {

        $nouveauxMembresA = DB::table('new_members')
        ->select(DB::raw('id, name, email, phone, city, postal_code, status, no_region, created_at, confirmed_at'))
        ->where('id', $id)
        ->get();

        foreach($nouveauxMembresA as $nouvelUsagerA)
		    {
        $nom = $nouvelUsagerA->name;
        $courriel = $nouvelUsagerA->email;
        $telephone = $nouvelUsagerA->phone;
        $ville = $nouvelUsagerA->city;
        $codePostal = $nouvelUsagerA->postal_code;
        $status = $nouvelUsagerA->status;
        $region = $nouvelUsagerA->no_region;
        $cree = $nouvelUsagerA->created_at;
        $confirme = $request->input('CURRENT_TIMESTAMP');
            
 
        $data = array("name"=>$nom,"email"=>$courriel,"phone"=>$telephone,"city"=>$ville,"postal_code"=>$codePostal,"status"=>$status,"no_region"=>$region,"created_at"=>$cree,"confirmed_at"=>$confirme);
        
        DB::table('members')->insert($data);
        }
        DB::table('new_members')->where('id', $id)->delete();


        $countNM = DB::table('new_members')->count();
        $countsOM = DB::table('members')->count();

        $nouveauxMembres = DB::table('new_members')
        ->select(DB::raw('id, name, email, phone, city, postal_code, created_at'))
        ->get();

        $membres = DB::table('members')
        ->select(DB::raw('id, name, email, phone, city, postal_code, status, no_region, created_at'))
        ->orderBy('created_at', 'desc')
        ->get();

        return view('admin/membres', compact('countNM','nouveauxMembres','countsOM', 'membres'));
        
    }

    public function supAMEM($id){

        DB::table('new_members')->where('id', $id)->delete();


        $countNM = DB::table('new_members')->count();
        $countsOM = DB::table('members')->count();

        $nouveauxMembres = DB::table('new_members')
        ->select(DB::raw('id, name, email, phone, city, postal_code, created_at'))
        ->get();

        $membres = DB::table('members')
        ->select(DB::raw('id, name, email, phone, city, postal_code, status, no_region, created_at'))
        ->orderBy('created_at', 'desc')
        ->get();

        return view('admin/membres', compact('countNM','nouveauxMembres','countsOM', 'membres'));

    }

    public function ateliersA()
    {

        $countInscriptions = DB::table('workshop_registrations')
        ->join('workshops', 'workshops.id', '=', 'workshop_registrations.workshop_id')
        ->where('workshops.id', 'workshop_registrations.workshop_id')
        ->count();
        $ateliers = DB::select('select id, starts_at, name, available_slots from workshops');


        return view('admin/ateliersA', ['ateliers' => $ateliers], ['countInscriptions' => $countInscriptions]);
        
    }

    public function nouvelAtelier()
    {
        return view('admin/nouvelAtelier');
   
    }

    public function ajoutAtelier(NouvelAtelierRequest $request)
    {

        $modAteliers = DB::table('workshops')
        ->select(DB::raw('id, starts_at, name, description, animation, expertise, available_slots'))
        ->get();

        $nom = $request->input('nomAA');
        $date = $request->input('dateAA');;
        $description = $request->input('descriptionAA');
        $animation = $request->input('animationAA');
        $expertise = $request->input('expertiseAA');
        $available = $request->input('availableAA');
 
        $data = array("name"=>$nom,"starts_at"=>$date,"description"=>$description,"animation"=>$animation,"expertise"=>$expertise,"available_slots"=>$available);

        DB::table('workshops')->insert($data);

        $countInscriptions = DB::table('workshop_registrations')
        ->join('workshops', 'workshops.id', '=', 'workshop_registrations.workshop_id')
        ->where('workshops.id', 'workshop_registrations.workshop_id')
        ->count();

        $ateliers = DB::select('select id, starts_at, name, available_slots from workshops');

        return view('admin/ateliersA', ['ateliers' => $ateliers], ['countInscriptions' => $countInscriptions]);
        
    }

    public function insertModifierAtelier($id)
    {
        $modAteliers = DB::table('workshops')->select(DB::raw('id, starts_at, name, description, animation, expertise, available_slots'))->where('id', $id)->get();

        return view('admin/modifierAtelier', ['modAteliers' => $modAteliers]);
        
    }

    public function modifierAtelier(ModifierAtelierRequest $request, $id)
    {
        DB::table('workshops')
                ->where('id', $id)
                ->update(['name' =>$request['nomAM'],
                'starts_at'=>$request['dateAM'],
                'description'=>$request['descriptionAM'],
                'animation'=>$request['animationAM'],
                'expertise'=>$request['expertiseAM'],
                'available_slots'=>$request['availableAM'],
                'updated_at'=>$request['CURRENT_TIMESTAMP']
                ]);
            
                $countInscriptions = DB::table('workshop_registrations')
                ->join('workshops', 'workshops.id', '=', 'workshop_registrations.workshop_id')
                ->where('workshops.id', 'workshop_registrations.workshop_id')
                ->count();

                $ateliers = DB::select('select id, starts_at, name, available_slots from workshops');

                return view('admin/ateliersA', ['ateliers' => $ateliers], ['countInscriptions' => $countInscriptions]);
        
    }

    public function supAtelier($id)
    {
        DB::table('workshops')->where('id', $id)->delete();

        $countInscriptions = DB::table('workshop_registrations')
        ->join('workshops', 'workshops.id', '=', 'workshop_registrations.workshop_id')
        ->where('workshops.id', 'workshop_registrations.workshop_id')
        ->count();

        $ateliers = DB::select('select id, starts_at, name, available_slots from workshops');

        return view('admin/ateliersA', ['ateliers' => $ateliers], ['countInscriptions' => $countInscriptions]);
        
    }

    public function inscriptions($id)
    {
        
        $titres = DB::table('workshops')
        ->select(DB::raw('id, name'))
        ->where('id', $id)
        ->get();
        
        $inscriptions = DB::table('workshop_registrations')
        ->select(DB::raw('id, workshop_id, name, email, phone'))
        //->join('workshops', 'workshop.id', '=', 'workshop_registrations.workshop_id')
        ->where('workshop_id', $id)
        ->get();
       

        return view('admin/inscriptions', ['titres' => $titres], ['inscriptions' => $inscriptions]);
        
    }

    public function insertModifierInscrit($id)
    {

        $modInscrits = DB::table('workshop_registrations')->select(DB::raw('id, workshop_id, name, email, phone'))->where('id', $id)->get();


        return view('admin/modifierInscrit', ['modInscrits' => $modInscrits]);
        
    }

    public function modifierInscrit(ModifierInscritRequest $request, $id)
    {
        DB::table('workshop_registrations')
                ->where('id', $id)
                ->update(['name' =>$request['nomIM'],
                'email'=>$request['courrielIM'],
                'phone'=>$request['telephoneIM'],
                'updated_at'=>$request['CURRENT_TIMESTAMP']
                ]);
            

                $ateliers = DB::select('select id, starts_at, name, available_slots from workshops');

                return view('admin/ateliersA', ['ateliers' => $ateliers]);
        
    }

    public function supInscrit($id ,$idI)
    {
        DB::table('workshop_registrations')->where('id', $id)->delete();

        $titres = DB::table('workshops')
        ->select(DB::raw('id, name'))
        ->where('id', $idI)
        ->get();
        
        $inscriptions = DB::table('workshop_registrations')
        ->select(DB::raw('id, workshop_id, name, email, phone'))
        ->where('workshop_id', $idI)
        ->get();

        return view('admin/inscriptions', ['titres' => $titres], ['inscriptions' => $inscriptions]);
        
    }

    public function participants()
    {
        $participants = DB::table('participants')
        ->select(DB::raw('id, first_name, last_name, email, phone, city, postal_code, created_at'))
        ->orderBy('created_at', 'desc')
        ->get();

        return view('admin/participants', ['participants' => $participants]);
        
    }

    

    public function supPart($id)
    {
        DB::table('participants')->where('id', $id)->delete();

        $participants = DB::table('participants')
        ->select(DB::raw('id, first_name, last_name, email, phone, city, postal_code, created_at'))
        ->orderBy('created_at', 'desc')
        ->get();

        return view('admin/participants', ['participants' => $participants]);
        
    }

    public function nouvelleReponse()
    {
        return view('admin/nouvelleReponse');
        
    }

    public function listeCandidats()
    {
        return view('admin/listeCandidats');
        
    }

    public function nouveauCandidat()
    {

        $circonscriptions = DB::select('select id, name from districts');

        $partis = DB::select('select id, name from political_parties');

        return view('admin/nouveauCandidat', ['circonscriptions' => $circonscriptions], ['partis' => $partis]);
        
    }

    public function ajoutCandidat(NouveauCandidatRequest $request)
    {

        $prenom = $request->input('prenomCand');
        $nom = $request->input('nomCand');
        $deuxiemeNom = $request->input('deuxiemenomCand');
        $circonscription = $request->input('circonsCand');
        $parti = $request->input('partiCand');
 
        $data = array('first_name'=>$prenom,"last_name"=>$nom,"middle_name"=>$deuxiemeNom,"district_id"=>$circonscription,"political_party_id"=>$parti);

        DB::table('candidates')->insert($data);

        $candidats2 = DB::select(
            'select candidates.id AS id, CONCAT(candidates.last_name, " , ", candidates.first_name) AS NomComplet,
            districts.name AS circonscription, political_parties.name AS parti_politique, engagements.id AS ide, reponses.reponse AS reponse1
            from candidates
            join districts
            on districts.id = candidates.district_id
            join political_parties
            on political_parties.id = candidates.political_party_id
            join engagements
            on engagements.candidate_id = candidates.id
            join reponses
            on engagements.status = reponses.id limit 20');

        return view('admin/listeCandidats', ['candidats2' => $candidats2]);
        
    }

    public function candidats1()
    {
        $candidats1 = DB::select(
            'select candidates.id AS id, CONCAT(candidates.last_name, " , ", candidates.first_name) AS NomComplet,
            districts.name AS circonscription, political_parties.name AS parti_politique, engagements.id AS ide, reponses.reponse AS reponse1
            from candidates
            join districts
            on districts.id = candidates.district_id
            join political_parties
            on political_parties.id = candidates.political_party_id
            join engagements
            on engagements.candidate_id = candidates.id
            join reponses
            on engagements.status = reponses.id limit 20');

        return view('admin/engagements', ['candidats1' => $candidats1]);
        
    }

    public function candidats2()
    {
        $candidats2 = DB::select(
            'select candidates.id AS id, CONCAT(candidates.last_name, " , ", candidates.first_name) AS NomComplet,
            districts.name AS circonscription, political_parties.name AS parti_politique, engagements.id AS ide, reponses.reponse AS reponse1
            from candidates
            join districts
            on districts.id = candidates.district_id
            join political_parties
            on political_parties.id = candidates.political_party_id
            join engagements
            on engagements.candidate_id = candidates.id
            join reponses
            on engagements.status = reponses.id limit 20');

        return view('admin/listeCandidats', ['candidats2' => $candidats2]);
        
    }

    public function insertModifierCand($id)
    {
       // $modCands = DB::select(
         //   'select id, CONCAT(candidates.last_name, " , ", candidates.first_name) AS NomComplet
           // from candidates')->where('id', $id)->get();
           $modCands = DB::table('candidates')->select(DB::raw('id, CONCAT(candidates.last_name, " , ", candidates.first_name) AS NomComplet'))->where('id', $id)->get();
            //$reponses = DB::table('reponses')->select('id, reponse');
           //   'select id, CONCAT(candidates.last_name, " , ", candidates.first_name) AS NomComplet
              // from candidates')->where('id', $id)->get();

        return view('admin/modifierCand', ['modCands' => $modCands]);
        
    }

    public function modifierCandC(ModifierReponseRequest $request, $id)
    {
        DB::table('engagements')
                ->where('candidate_id', $id)
                ->update(['notes' =>$request['commentairesCand'],
                'status'=>$request['reponsesCand'],
                'updated_at'=>$request['CURRENT_TIMESTAMP']
                ]);
            

                $candidats1 = DB::select(
                    'select candidates.id AS id, CONCAT(candidates.last_name, " , ", candidates.first_name) AS NomComplet,
                    districts.name AS circonscription, political_parties.name AS parti_politique, engagements.id AS ide, reponses.reponse AS reponse1
                    from candidates
                    join districts
                    on districts.id = candidates.district_id
                    join political_parties
                    on political_parties.id = candidates.political_party_id
                    join engagements
                    on engagements.candidate_id = candidates.id
                    join reponses
                    on engagements.status = reponses.id limit 20');

                return view('admin/engagements', ['candidats1' => $candidats1]);
        
    }

    public function supRep($id)
    {
        DB::table('engagements')->where('id', $id)->delete();
        //DB::delete('delete from candidates where "id" = $id');

        $candidats1 = DB::select(
            'select candidates.id AS id, CONCAT(candidates.last_name, " , ", candidates.first_name) AS NomComplet,
            districts.name AS circonscription, political_parties.name AS parti_politique, engagements.id AS ide, reponses.reponse AS reponse1
            from candidates
            join districts
            on districts.id = candidates.district_id
            join political_parties
            on political_parties.id = candidates.political_party_id
            join engagements
            on engagements.candidate_id = candidates.id
            join reponses
            on engagements.status = reponses.id limit 20');

        return view('admin/engagements', ['candidats1' => $candidats1]);
        
    }

    public function supCand($id)
    {
        DB::table('candidates')->where('id', $id)->delete();
        //DB::delete('delete from candidates where "id" = $id');

        $candidats2 = DB::select(
            'select candidates.id AS id, CONCAT(candidates.last_name, " , ", candidates.first_name) AS NomComplet,
            districts.name AS circonscription, political_parties.name AS parti_politique, engagements.id AS ide, reponses.reponse AS reponse1
            from candidates
            join districts
            on districts.id = candidates.district_id
            join political_parties
            on political_parties.id = candidates.political_party_id
            join engagements
            on engagements.candidate_id = candidates.id
            join reponses
            on engagements.status = reponses.id limit 20');

        return view('admin/listeCandidats', ['candidats2' => $candidats2]);
        
    }
}