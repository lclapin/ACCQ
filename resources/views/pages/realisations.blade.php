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
                        <li><a class="elementNav active" href="{{ url('pages/realisations') }}">Réalisations</a></li>
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
        <li>Réalisations</li>
    </ol>
    <h1 class="titrePage">Campagne d'interpellation - Élections 2018</h1>
    <div class="barreP"></div>
    <div class="contenuRea">
        <div class="engagement">
            <img class="imgPoint" src="../images/point_exlamation.jpg" alt="imgPoint">
            <div class="titreEG"><a href="{{ url('pages/engagement') }}">Engagement solennel des personnes candidates aux élections d'octobre 2018</a></div>
        </div>
        <div class="listePC">
            <div class="listePCP"><a href="{{ url('pages/listePCP') }}">Liste des personnes candidates qui se sont prononcées</a></div>
            <div class="listePCC"><a href="{{ url('pages/listePCC') }}">Liste des personnes candidates par circonscription</a></div>
        </div>
        <div class="PLC"><a href="{{ url('pages/convocation') }}">Projet de loi de convocation (version 1)</a></div>

    </div>
</div>
</div>

<div class="containerConstituons">
<div class="constituons1">
    <div class="titreConstituons">BEAUCOUP PLUS QU'UNE SIMPLE EXPÉRIENCE THÉÂTRALE</div>
    <p>L’expérience théâtrale « Constituons! », lancée par le metteur en scène Christian Lapointe, a réuni en 2018-19 une quarantaine de citoyen-ne-s ordinaires, tiré-e-s au sort par les soins de la firme Léger, pour rédiger un projet de constitution québécoise. Choisis de façon à respecter la parité homme-femme et refléter les réalités générationnelles, linguistiques et régionales du Québec, ces bénévoles ont produit avec des moyens matériels très limités un projet de constitution qui dépasse les clivages partisans habituels et qui met la table pour l'établissement de consensus nationaux sur nombre de grands enjeux.</p><br>
    <p>Cette constitution a d'ailleurs été déposée symboliquement à l'Assemblée nationale au printemps 2019. Notre association tient à féliciter et à remercier toutes celles et ceux qui ont contribué de près ou de loin à la réalisation de Constituons! C'est avec enthousiasme que nombre des membres actifs ont contribué à l'initiative du metteur en scène Christian Lapointe.</p><br>
    <p>Christian, au nom de tous les signataires de notre manifeste ... MERCI!</p><br>
    <iframe class="videoC" src="https://www.youtube.com/embed/Lh71SO0Ggy4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="titreCanevas">La constitution de Constituons! - Un canevas de départ intéressant...</div>
    <div class="canevas">
        <img class="imgPDF" src="../images/pdf.jpg" alt="imgPDF">
        <a class="lienCanevas" href="../pdf/constitution_citoyenne_quebec_INM.pdf" target="blank">Constitution citoyenne quebec</a>
    </div>
</div>
</div>    
@include('includes.footer')
</body>
</html>