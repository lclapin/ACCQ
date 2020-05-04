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
        <li>Mission</li>
    </ol>
    <h1 class="titrePage">Mission</h1>
    <div class="barreP"></div>
    <nav class="navPM">
    <ul class="navMission">
        <li><a class="elementNavM" href="{{ url('pages/vision') }}">1. Vision</a></li>
        <li><a class="elementNavM activeM" href="{{ url('pages/mission') }}">2. Mission</a></li>
        <li><a class="elementNavM" href="{{ url('pages/objectifs') }}">3. Objectifs et moyens</a></li>
        <li><a class="elementNavM" href="{{ url('pages/nous_rejoindre') }}">4. Nous rejoindre</a></li>
    </ul>
    </nav>
    <div class="contenu">
    <div class="titreM">Le grand chantier de la Constituante commence maintenant!</div>
    <div class="barreM"></div>
    <p>L'Alliance pour une constituante citoyenne du Québec se donne comme mission de promouvoir, de préparer et de provoquer la convocation d’une Assemblée constituante non partisane, totalement libre dans ses délibérations, ayant comme mandat la rédaction d'une Constitution par et pour le peuple.</p><br>
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