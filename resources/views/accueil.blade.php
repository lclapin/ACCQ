<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.head')
    <body>
    <header>
                <div class="premier">
                <div class="logo"><a href="{{ url('/') }}"><img class="imgLogo" src="../images/logo_ACCQ.png" alt="logoACCQ"></a></div>
                <nav id="navPrinc1">
                    <ul id="navPrinc" class="navPrinc">
                        <li><a class="elementNav active" href="{{ url('/') }}">Accueil</a></li>
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
   <img class="imgBanniere" src="images/banniere.png" alt="banniereACCQ">
   <div class="blocPrincipal">    
        <div class="premierBloc">
        <div class="sondage2">
            <div class="titreSondage2">SONDAGE EN LIGNE</div>
            <p class="texteSondage2">Depuis cinq ans déjà, l'idée d'une constituante citoyenne chemine. 
            L'ACCQ travaille à mettre en place les conditions nécessaires pour réaliser cette avancée remarquable pour le peuple québécois. 
            Votre participation à ce sondage nous aidera à mener à bien notre mission.
            </p>
            <div class="repondre">
                <a href="{{ url('pages/sondage') }}">Répondre au sondage maintenant</a>
            </div>
        </div>
        
        <a class="lienOrg" href="{{ url('pages/organigramme') }}">
        <div class="organigrammeA">
               <div class="consulter">Consulter l'organigramme de l'ACCQ</div>
               <img class="imgOrg" src="../images/logo_ACCQ.png" alt="imgOrg">
        </div>
        </a>
    
    </div>
        <div class="deuxiemeBloc">
            <div class="ateliers">
                <a href="{{ url('pages/ateliers') }}">
                    <img class="imgAteliers" src="../images/ateliers.jpg" alt="image_rencontres">
                </a>
            </div>
            <div class="rencontres">
                <a href="{{ url('pages/rencontres') }}">
                    <img class="imgRencontres" src="../images/rencontres.jpg" alt="image_rencontres">
                </a>
            </div>
        </div>
        <div class="troisiemeBloc">
            <div class="videoRS">
                <div class="videoConstituante">
                <iframe class="videoC1" width="495" height="315" src="https://www.youtube.com/embed/NvCW1Xat-5s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="texteVideo">Plusieurs autres vidéos sont disponibles dans la &nbsp<a href="{{ url('pages/mediatheque') }}"> médiathèque</a>!</div>
                <div class="lienManifeste">
                <a href="{{ url('pages/manifeste') }}">
                    <img class="imgManifeste" src="../images/manifeste.png" alt="image_manifeste">
                </a>
            </div>
            <div class="lienDevenirMembre">
                <a href="{{ url('pages/devenir_membre') }}">
                    <img class="imgMembre" src="../images/membre.jpg" alt="image_membre">
                </a>
            </div>
            <div class="texteFB">Aimez notre page Facebook</div>
            <div id="fb-root"></div>
               <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v6.0"></script>
               <div class="fb-page" data-href="https://www.facebook.com/ConstituanteCitoyenne/" data-tabs="timeline" data-width="" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ConstituanteCitoyenne/" class="fb-xfbml-parse-ignore">
               <a href="https://www.facebook.com/ConstituanteCitoyenne/">Alliance pour une Constituante citoyenne du Québec</a></blockquote></div>
            </div>
            <div class="regions">

            <?php
		        foreach($regionsU as $regionU)
		        {
            ?>
            <div class="region">
                            <a href="{{ route('regionU', $regionU->id) }}">
                                <img class="imgRegion" src="../images/regions/<?= $regionU->image ?>" alt="image_bas_st_laurent">
                                <div class="texteRegion"><?= $regionU->nomCompletR ?></div>
                                <div class="overlay">
                                <div class="text">
                                    <div class="texteNumero">Région <?= $regionU->id ?></div>
                                    <div class="texteRegion2"><?= $regionU->name ?></div>
                                    <div class="texteAller">Aller à la page</div>
                                </div>
                                </div>
                            </a>
                        </div>
            <?php
                }
            ?>
            </div>
        </div>
    </div>
   @include('includes.footer') 
    </body>
   
</html>
