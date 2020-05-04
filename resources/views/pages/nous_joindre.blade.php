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
                        <li><a class="elementNav" href="{{ url('pages/realisations') }}">Réalisations</a></li>
                        <li><a class="elementNav active" href="{{ url('pages/nous_joindre') }}">Nous joindre</a></li>
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
        <li>Nous joindre</li>
    </ol>
    <h1 class="titrePage">Nous joindre</h1>
    <div class="barreP"></div>
    <div class="CR">
        <div class="composition">
        <p>Lors de l’Assemblée générale de l’ACCQ de novembre 2019, nous avons élu un conseil d’administration de onze (11) membres. Voici la composition de notre nouveau CA :</p>
             <ul>
                 <li>Président: Éric Maisonneuve / 06 - Montréal / <a href="mailto:ericmaison68@gmail.com">ericmaison68@gmail.com</a></li>
                 <li>Vice-président: Alain M. Bergeron / 05 - Estrie / <a href="mailto:alainmbergeron@hotmail.com">alainmbergeron@hotmail.com</a></li>
                 <li>Trésorier: Luc Harbour / 05 - Estrie / <a href="mailto:lucharbour@gmail.com">lucharbour@gmail.com</a></li>
                 <li>Secrétaire: Danielle Morin / 05 – Estrie <a href="mailto:daniellemorin2013@hotmail.com">daniellemorin2013@hotmail.com</a></li>
             </ul>
        <div class="admin">Administratrices et administrateurs:</div>
            <ul>
                 <li>Chantal Jolicoeur / 14 - Lanaudière / <a href="mailto:chantal.jolicoeur24@hotmail.fr">chantal.jolicoeur24@hotmail.fr</a></li>
                 <li>Martine Labossière / 16 - Montérégie / <a href="mailto:grand-heron@hotmail.com">grand-heron@hotmail.com</a></li>
                 <li>Yves legault / 06 - Montréal / <a href="mailto:yves.yll.legault@videotron.ca">yves.yll.legault@videotron.ca</a></li>
                 <li>Philippe Malric / 06 - Montréal / <a href="mailto:malric.philippe@gmail.com">malric.philippe@gmail.com</a></li>
                 <li>Thierry Pasquier / 16 - Montérégie / <a href="mailto:guerrierinterieur@gmail.com">guerrierinterieur@gmail.com</a></li>
                 <li>Daniel Raunet / 16 - Montérégie / <a href="mailto:draunet@hotmail.fr">draunet@hotmail.fr</a></li>
                 <li>Béatrice Séjourné-Badin / 06 - Montréal / <a href="mailto:beasbad@gmail.com">beasbad@gmail.com</a></li>
             </ul>
        </div>
        <div class="responsabilites">
            <p>Notez que plusieurs comités sont formés ou sont en cours de formation. Voici la distribution des responsabilités dans les divers comités:</p>
            <ul>
                <li>Communications : Éric Maisonneuve</li>
                <li>Financement : Danielle Morin et Luc Harbour</li>
                <li>Instruction populaire : Yves Legault</li>
                <li>Mobilisation et recrutement : Chantal Jolicoeur et Alain Bergeron</li>
                <li>Multimédia (TI) : François Lamontagne et Yves Legault</li>
                <li>Recherche : Martine Labossière, Yves Legault et Philippe Malric</li>
                <li>Requêtes et recommandations : Alain Bergeron et Daniel Raunet</li>
                <li>Secrétariat : Danielle Morin</li>
            </ul>
            <p>Pour tout intérêt à vous impliquer dans l’un ou l’autre de ces comités, écrivez-nous à <a href="mailto:info@accq.quebec">info@accq.quebec</a>.</p>
        </div>
    </div>
    <p>L'ACCQ tient à remercier ceux et celles qui s'impliquent avec dévouement et conviction.
</div>
</div>
@include('includes.footer')
</body>
</html>