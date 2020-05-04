<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
   
<body>
<header class="header2">
                <div class="premierA">
                <div class="logo"><a href="{{ url('admin/home') }}"><img class="imgLogo" src="../images/logo_ACCQ.png" alt="logoACCQ"></a></div>
                <nav>
                    <ul id="navPrincA" class="navPrincA">
                        <li><a class="elementNavA" href="{{ url('admin/home') }}">Accueil</a></li>
                        <li><a class="elementNavA" href="{{ url('/') }}" target="blank">Voir le site</a></li>
                        <li><a class="elementNavA" href="{{ route('logout') }}">Se déconnecter</a></li>
                    </ul>
                </nav>
                </div>
   </header>
   <div class="containerPageA">
<div class="pageA">
<ol class="ariane">
        <li><a href="{{ url('admin/home') }}">Accueil</a></li>
        <li>&nbsp/&nbsp</li>
        <li>Gestion des ACRQ</li>
    </ol>
    <h1 class="titrePageA">Gestion des ACRQ</h1>
    <div class="barreP"></div>
    <div class="lesRegionsA">
    <?php
		foreach($ACRQS as $ACRQ)
		{
        ?>
        <div class="laRegionA">
        <div class="regionA" onclick="deroulantR(<?= $ACRQ->id ?>)"><?= $ACRQ->nomComplet ?></div>
            <div id="monSousRegionA<?= $ACRQ->id ?>" class="sousRegionA">
                <a href="{{ route('insertModifierACRQ', $ACRQ->id) }}">Informations</a>
                <a href="{{ route('responsablesA', $ACRQ->id) }}">Responsables</a>
                <a href="{{ route('reunionsA', $ACRQ->id) }}">Réunions</a>
        </div>
        </div>
    
		<?php
		}
		?>
    </div>
    <script>
        function deroulantR(x) {
            document.getElementById("monSousRegionA" + x).classList.toggle("showR");
        }

        /*window.onclick = function(event) {
    
        if (!(event.srcElement.innerText == "1. Bas-St-Laurent")) {
        
        document.getElementById("monSousRegionA1").classList.remove('showR');
        }if (!(event.srcElement.innerText == "Éducation")) {
          
          document.getElementById("monSous2").classList.remove('show');
        }if (!(event.srcElement.innerText == "Organisation")) {
          
          document.getElementById("monSous3").classList.remove('affiche');
        }if (!(event.srcElement.innerText == "Éducation")) {
          
          document.getElementById("monSous4").classList.remove('affiche');
      }
  }*/



    </script>

</div>
</div>
<footer>
    <div class="footerC">
<div class="logoFooter"><img class="imgLogoFooter" src="../images/logo_ACCQ.png" alt="logoACCQFooter"></div>
<div class="aPropos">
Alliance pour une constituante citoyenne du Québec @2020<div>
</div>
</footer>
</body>
</html>