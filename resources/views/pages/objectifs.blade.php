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
                        <li><a class="elementNav" href="{{ url('pages/manifeste') }}">Manifeste</a></li>
                        <li><a id="active1" class="elementNav" href="{{ url('pages/projet_de_loi') }}">Requêtes et recommandations</a></li>
                        <li class="deroulant2"><a class="elementNav active" class="educ" onclick="deroulant2()">Éducation<img class="fleche" src="../images/down-arrow1.png" alt="fleche"></a>
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
        <li><a href="{{ url('pages/mission') }}">Mission</a></li>
        <li>&nbsp/&nbsp</li>
        <li>Objectifs et moyens</li>
    </ol>
    <h1 class="titrePage">Objectifs et moyens</h1>
    <div class="barreP"></div>
    <nav class="navPM">
    <ul class="navMission">
        <li><a class="elementNavM" href="{{ url('pages/vision') }}">1. Vision</a></li>
        <li><a class="elementNavM" href="{{ url('pages/mission') }}">2. Mission</a></li>
        <li><a class="elementNavM activeM" href="{{ url('pages/objectifs') }}">3. Objectifs et moyens</a></li>
        <li><a class="elementNavM" href="{{ url('pages/nous_rejoindre') }}">4. Nous rejoindre</a></li>
    </ul>
    </nav>
    <div class="contenu">
    <div class="titreM">L'Alliance pour une constituante citoyenne du Québec s’engage à l'instauration d'une véritable démocratie par un processus constituant libre dans ses délibérations. Vous engagez-vous avec NOUS?</div>
    <div class="barreM"></div>
    <div class="titreOb">Nos objectifs</div>
    <div class="objectifsNo">Objectif 1: Promouvoir l’importance d’une démarche constituante afin que notre constitution soit rédigée par et pour le peuple.</div>
    <div class="moyens">Moyens:</div>
    <ul>
        <li>Faire connaître le projet politique d'une assemblée constituante non partisane, libre dans ses délibérations, à la population du Québec.</li>
        <li>Informer le peuple québécois pour qu’il devienne un peuple constituant en lui offrant des outils d’éducation populaire par l'entremise de notre site internet, nos séminaires en ligne et nos rencontres informatives.</li>
        <li>Bâtir des ponts avec la société civile.</li>
        <li>Établir des ateliers constituants qui porteront sur les divers chapitres d'une constitution : choix de société, statut des personnes vulnérables, langue officielle, laïcité, droits, libertés et responsabilités, services publics, éducation, ressources naturelles et environnement, sécurité, politiques économiques, fiscales et monétaires, type de gouvernement, mécanismes de participation des citoyens et des citoyennes, et des régions, gouvernements territoriaux, etc.</li>
    </ul><br>
    <div class="objectifsNo">Objectif 2 : Rassembler la population québécoise autour d'un projet commun tangible puisqu’elle a l’intelligence, la capacité et la détermination :</div>
    <ol type="a">
        <li>de définir les règles d’une future Assemblée constituante (mandat, format, critères d'éligibilité, lignes de conduite, statuts et règlements, tirage au sort, etc.);</li>
        <li>d’écrire par elle-même sa propre constitution</li>
    </ol><br>
    <div class="moyens">Moyens:</div>
    <ul>
        <li>Établir une structure organisée et démocratique dans chacune des 17 régions du Québec. Cette organisation aura comme objectif de préparer la mise en place d’une assemblée constituante citoyenne simulée.</li>
        <li>Établir un noyau central, composé de différents comités et d’un comité organisateur (COOR) au niveau national, qui permettra l'harmonisation de notre démarche.</li>
        <li>Établir une multitude de regroupements de Constituant.e.s à partir de nos ACRQ.</li>
        <li>Regrouper les Québécois et les Québécoises pour qu’ils s’exercent, lors d’ateliers constituants, à rédiger une Loi fondamentale et participent aussi à définir le mode de fonctionnement d’une assemblée constituante simulée.</li>
        <li>Inviter tous les Constituant.e.s à participer à la rédaction d'une constitution préparatoire, une fois que nous aurons ensemble défini, son mode de fonctionnement. L’Alliance pour une constituante citoyenne du Québec orchestrera alors une Constituante simulée. Tous les débats de l’Alliance pour une constituante citoyenne du Québec seront accessibles sur internet.</li>
        <li>Diffuser le résultat de l’expérience constituante à toute la population du Québec.</li>
    </ul><br>
    <div class="objectifsNo">Objectif 3 : D’ici la prochaine élection générale au Québec, faire pression sur les partis et sur l’Assemblée nationale pour nous assurer que soit convoquée, rapidement après l’élection, une Assemblée constituante, totalement libre dans ses délibérations.</div>
    <div class="moyens">Moyens:</div>
    <ul>
        <li>Mobiliser un minimum de 100 000 personnes comprenant bien le sens d'une démarche constituante non partisane.</li>
        <li>Faire les pressions nécessaires sur ceux et celles qui souhaitent nous représenter pour qu'ils ou qu’elles s'engagent, au-delà de toute ligne de parti, à convoquer, sans délai, une assemblée constituante non partisane, libre dans ses délibérations. Suite au prochain rendez-vous électoral québécois, cette Assemblée constituante sera mandatée pour rédiger et faire adopter notre toute première constitution démocratique du Québec qui sera ensuite entérinée par l’ensemble de la population du Québec.</li> 
    </ul><br>
    <div class="barreCit1">
    <div class="barre1"></div>
    <div class="citation1">Un monde libre et responsable déploie ses ailes. ENSEMBLE, prenons notre envol!</div>
    </div>

    <ul>
        <li><a href="{{ url('pages/listeOR') }}">Découvrez votre ACRQ</a></li>
        <li><a href="{{ url('pages/manifeste') }}">Signez le manifeste maintenant</a></li>
    </ul>
    </div>
    
</div>
</div>
@include('includes.footer')
</body>
</html>