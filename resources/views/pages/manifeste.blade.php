<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
   
<body>
<header>
                <div class="premier">
                <div class="logo"><a href="{{ url('/') }}"><img class="imgLogo" src="../images/logo_ACCQ.png" alt="logoACCQ"></a></div>
                <nav id="navPrinc1">
                    <ul id="navPrinc" class="navPrinc">
                        <li><a class="elementNav" href="{{ url('/') }}">Accueil</a></li>
                        <li class="deroulant1"><a class="elementNav" class="org" onclick="deroulant1()">Organisation<img class="fleche" src="../images/down-arrow1.png" alt="fleche"></a>
                            <div id="monSous1" class="sous1">
                                <a href="{{ url('pages/obnl') }}">OBNL</a>
                                <a href="{{ url('pages/statuts_reglements') }}">Règlements</a>
                            </div>
                        </li>
                        <li><a class="elementNav active" href="{{ url('pages/manifeste') }}">Manifeste</a></li>
                        <li><a id="active1" class="elementNav" href="{{ url('pages/projet_de_loi') }}">Requêtes et recommandations</a></li>
                        <li class="deroulant2"><a class="elementNav" class="educ" onclick="deroulant2()">Éducation<img class="fleche" src="../images/down-arrow1.png" alt="fleche"></a>
                            <div id="monSous2" class="sous2">
                                <a href="{{ url('pages/constat') }}">Constat</a>
                                <a href="{{ url('pages/mission') }}">Mission</a>
                                <a href="{{ url('pages/bibliotheque') }}">Bibliothèque</a>
                                <a href="{{ url('pages/mediatheque') }}">Médiathèque</a>
                                <a href="{{ url('pages/promouvoir') }}">Promouvoir</a>
                                <a href="{{ url('pages/sondage') }}">Sondage</a>
                            </div>
                        </li>
                        <li><a class="elementNav" href="{{ url('pages/discutoire') }}">Discutoire</a></li>
                        <li><a class="elementNav" href="{{ url('pages/medias') }}">Médias</a></li>
                        <li><a class="elementNav" href="{{ url('pages/realisations') }}">Réalisations</a></li>
                        <li><a class="elementNav" href="{{ url('pages/nous_joindre') }}">Nous joindre</a></li>
                    </ul>
                    
                </nav>
                <button class="buttonNav" onclick="deroulantNav()">
                    <div class="BN">
                        <div class="barreN"></div>
                        <div class="barreN"></div>
                        <div class="barreN"></div>
                    </div>
                    </button>
                    </div>
                    <nav id="navPrinc2">
                    <ul id="navPrincU" class="navPrincU">
                        <li><a class="elementNav" href="{{ url('/') }}">Accueil</a></li>
                        <li class="deroulant3"><a class="elementNav" class="org" onclick="deroulant3()">Organisation<img class="fleche" src="../images/down-arrow1.png" alt="fleche"></a>
                            <div id="monSous3" class="sous3">
                                <a href="{{ url('pages/obnl') }}">OBNL</a>
                                <a href="{{ url('pages/statuts_reglements') }}">Règlements</a>
                            </div>
                        </li>
                        <li><a class="elementNav" href="{{ url('pages/manifeste') }}">Manifeste</a></li>
                        <li><a id="active1" class="elementNav" href="{{ url('pages/projet_de_loi') }}">Requêtes et recommandations</a></li>
                        <li class="deroulant4"><a class="elementNav" class="educ" onclick="deroulant4()">Éducation<img class="fleche" src="../images/down-arrow1.png" alt="fleche"></a>
                            <div id="monSous4" class="sous4">
                                <a href="{{ url('pages/constat') }}">Constat</a>
                                <a href="{{ url('pages/mission') }}">Mission</a>
                                <a href="{{ url('pages/bibliotheque') }}">Bibliothèque</a>
                                <a href="{{ url('pages/mediatheque') }}">Médiathèque</a>
                                <a href="{{ url('pages/promouvoir') }}">Promouvoir</a>
                                <a href="{{ url('pages/sondage') }}">Sondage</a>
                            </div>
                        </li>
                        <li><a class="elementNav" href="{{ url('pages/discutoire') }}">Discutoire</a></li>
                        <li><a class="elementNav" href="{{ url('pages/medias') }}">Médias</a></li>
                        <li><a class="elementNav" href="{{ url('pages/realisations') }}">Réalisations</a></li>
                        <li><a class="elementNav" href="{{ url('pages/nous_joindre') }}">Nous joindre</a></li>
                    </ul>
</nav>
                <script src="https://code.jquery.com/jquery-3.3.1.js"></script>  
                <script>

function deroulant1() {
  document.getElementById("monSous1").classList.toggle("show");
}

function deroulant2() {
  document.getElementById("monSous2").classList.toggle("show");
}

function deroulant3() {
  document.getElementById("monSous3").classList.toggle("affiche");
}

function deroulant4() {
    document.getElementById("monSous4").classList.toggle("affiche");
}

function deroulantNav() {
    document.getElementById("navPrincU").classList.toggle("affiche");
}

window.onclick = function(event) {
    
  if (!(event.srcElement.innerText == "Organisation")) {
      
      document.getElementById("monSous1").classList.remove('show');
  }if (!(event.srcElement.innerText == "Éducation")) {
        
        document.getElementById("monSous2").classList.remove('show');
    }if (!(event.srcElement.innerText == "Organisation")) {
        
        document.getElementById("monSous3").classList.remove('affiche');
    }if (!(event.srcElement.innerText == "Éducation")) {
        
        document.getElementById("monSous4").classList.remove('affiche');
    }
}


</script>
            
   </header>

@include('includes.banniere')

<div class="containerPage">
<div class="page">
    <ol class="ariane">
        <li><a href="{{ url('/') }}">Accueil</a></li>
        <li>&nbsp/&nbsp</li>
        <li>Signez le manifeste</li>
    </ol>
    <h1 class="titrePage">Signez le manifeste</h1>
    <div class="barreP"></div>
    <div class="CS">
        <div class="constitution1">
            <div class="titreConstitution"><img class="imgI" src="../images/i_rouge.png" alt="imgI">
                <p>UNE CONSTITUTION, UN BOUT DE PAPIER INUTILE? ERREUR...</p>
            </div>
            <ol>
                <li>Dans une démocratie digne de ce nom, le peuple est souverain. C’est donc à lui de dicter les règles du jeu.</li><br>
                <li>Présentement, la souveraineté du peuple est bafouée de toutes parts. Trop souvent, ceux que nous choisissons pour nous représenter, une fois élus, servent d’autres intérêts que ceux du peuple.</li><br>
                <li>Pour sortir de cette impuissance politique, il ne suffit pas de manifester ni de changer de parti au pouvoir. Il faut changer le régime politique lui-même et les règles du jeu qui sont à la source de notre impuissance.</li><br>
                <li>Le moyen de changer de régime politique, c’est d’écrire la constitution de l’État. Une constitution est ce qui nous définit comme peuple distinct et nous protège des abus de pouvoir. C’est la Loi fondamentale que tous les dirigeants, organismes et citoyens doivent respecter.</li><br>
                <li>Le peuple québécois ne s’est jamais prononcé sur ce qui lui sert de constitution, aussi bien au Québec qu’au Canada.</li><br>
                <li>Pour écrire notre constitution, il faut avoir recours au peuple souverain, car les partis politiques sont sur ce sujet en conflit d’intérêts. Ce n’est pas aux gens au pouvoir d’écrire les règles du pouvoir.</li><br>
                <li>L’Assemblée par laquelle le peuple peut exercer sa souveraineté et son pouvoir constituant de façon légitime, ordonnée et efficace est ce qu’on appelle une Assemblée constituante. Son rôle est d’inviter la population à y participer et à proposer en toute liberté, un texte de constitution pour adoption par référendum. Elle doit être représentative, participative, non partisane et libre dans ses délibérations, donc composée idéalement de citoyens tirés au sort. Elle doit pouvoir recourir à toutes les ressources et expertises nécessaires pour faire son travail. Le débat public entourant son travail doit être encadré de façon à prévenir le contrôle de l’information par des intérêts particuliers.</li><br>
                <li>L'Assemblée constituante citoyenne doit idéalement être convoquée par l’Assemblée nationale pour s’assurer que la Constitution qui en résultera, une fois adoptée par référendum, ne puisse être écartée par les pouvoirs en place, au Québec, au Canada et à l’international.</li><br>
                <li>Nous, citoyennes et citoyens responsables, nous nous engageons à promouvoir, à préparer et à provoquer la convocation d’une Assemblée constituante non partisane, libre dans ses délibérations, et à tout mettre en œuvre pour que soit respectée la volonté du peuple québécois.</li><br>
                <li>Voici la <a href="{{ url('pages/mission') }}">mission</a> que s'est donnée l'Alliance pour une constituante citoyenne du Québec (ACCQ)</li><br>
            </ol>
        </div>
        <div class="signatures">
        <div class="voirS"><a href="{{ url('pages/signatures_manifeste') }}">Voir les <?= $countSignsM ?> signatures</a></div>
        <div class="DS">Dernières signatures</div>
        <div class="barreSM"></div>
        <table class = 'tableSM'>
	<tbody class = 'tbody1'>

	<?php
		foreach($signaturesM as $signatureM)
		{
		?>

		<tr class = 'nomDate'>	

        <td class="nomS"><?= $signatureM->name ?> - <?= $signatureM->created_at ?></td>
        <td class="barreSMT"></td>
        </tr>
        

		<?php
		
		}
		?>
		
	</tbody>	
    </table>	
        </div>
    </div>
    <div class="SF">
        <div class="jeSigne">
            <div class="titreJS">Je signe!</div>
            <div class="texteJSP1">Pour participer activement à notre démarche citoyenne, nous vous invitons à signer ce manifeste en nous laissant vos coordonnées. Il nous sera ainsi plus facile de vous rejoindre et vous inviter à participer.</div><br>
            <div class="TF">
                <div class="texteJSP2"><span>Votre nom apparaîtra dans la liste des signatures sur le site</span> après une validation de notre part. Vos informations personnelles (courriel, téléphone et code postal) demeureront confidentielles et ne seront jamais transmises à qui que ce soit sans votre consentement explicite.</div><br>
                <img class="imgFD" src="../images/fleche_droite.png" alt="fleche_droite">
            </div>
        </div>
        <div class="formS">
            <form class="form1" method="post" action = "/createSM">
            @csrf
            <div class="lesInputs">
                <label for="nom">* Nom complet</label><br>
                <input type="text" id="nom" name="nom"><br>
                <label for="courriel">* Courriel</label><br>
                <input type="text" id="courriel" name="courriel"><br>
                <label for="telephone">Numéro de téléphone</label><br>
                <input type="text" id="telephone" name="telephone"><br>
                <label for="municipalite">Municipalité</label><br>
                <input type="text" id="municipalite" name="municipalite"><br>
                <label for="code_postal">* Code postal</label><br>
                <input type="text" id="code_postal" name="code_postal"><br>
            </div>
            <input type="submit" value="Signer">
            </form>

        </div>

    </div>
</div>    
</div>
@include('includes.footer')
</body>
</html>