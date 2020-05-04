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
                        <li><a class="elementNav active" href="{{ url('pages/discutoire') }}">Discutoire</a></li>
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
        <li>Discussion Mumble</li>
    </ol>
    <h1 class="titrePage">Discussion Mumble</h1>
    <div class="barreP"></div>
        <div class="titreConseil">CONSEILS PERSONNALISÉS POUR L’INSTALLATION DE MUMBLE</div>
        <p>Si vous n’êtes pas très à l’aise avec l’électronique, il nous fera plaisir de vous aider pas à pas lors de l'installation de notre outil d’audioconférence « Mumble » et de vous permettre de vous familiariser avec notre outil de rédaction collaborative « Framapad ». Il vous suffit de nous écrire à secretariat@accq.quebec en nous indiquant votre numéro de téléphone pour prendre un rendez-vous. Vous pouvez aussi communiquer directement avec Alain (418) 931-3230 ou Jean (514) 284-1379 qui vous accompagneront avec plaisir.</p>
        <div class="titreInstaller">SI VOUS INSTALLEZ MUMBLE VOUS-MÊME</div>
        <div class="installation">1) Installation</div><br>
        <p>Pour nous rejoindre, il vous suffit de télécharger le logiciel sous licence libre à l’adresse suivante : https://www.mumble.com et de suivre les étapes d’installation IMPORTANT : En ouvrant le lien «Mumble » ci-dessus, ne cliquez pas sur le bouton « Create » mais bien sur l’icône de votre logiciel d’exploitation soit Windows, Apple ou Linux (voir le cercle rouge dans l’image ci-dessous).</p>
        <img class="imgMumble" src="../images/download_mumble.jpg" alt="mumble">
        <div class="son">2) Réglage du son</div><br>
        <p>Une fois ce logiciel installé dans vos programmes, lorsque vous l’ouvrirez pour la première fois, Mumble vous dirige généralement vers l’assistant audio.</p><br>
        <p><strong>IMPORTANT:</strong> Bien installer la fonction «appuyer pour parler» qui se trouve sur la page « Détection de l’Activité Vocale ». Également, à la page suivante, « Qualité et notifications », il est important de désactiver la fonction « synthèse vocale ». Pour vous aider sur ce point, veuillez consulter le lien suivant :</p>
        <p><a href="https://www.mumble.com/support/mumble-server-push-to-talk.php">https://www.mumble.com/support/mumble-server-push-to-talk.php</a></p><br>
        <div class="rejoindre">3) Rejoindre la discussion</div><br>
        <p>Une fois installé, il vous suffit de l’ouvrir et de vous connecter à notre serveur avec les informations ci-dessous et en suivant les étapes décrites ici :</p>
        <p><a href="https://www.mumble.com/support/how-to-connect-to-a-mumble-server.php">https://www.mumble.com/support/how-to-connect-to-a-mumble-server.php</a></p><br>
        <p>Nom: A.C.C.Q. (vous pouvez mettre ce que vous voulez, ce champ vous permet de vous rappeler de quel serveur il s’agit).</p>
        <p>Adresse: accq.mumble.com</p>
        <p>Port: 64082</p>
        <p>Nom d’utilisateur: Votre pseudo (doit permettre de vous identifier)</p>
    </div>
    <div class="mumble">

    </div>
    </div>
</div>
</div>
@include('includes.footer')
</body>
</html>