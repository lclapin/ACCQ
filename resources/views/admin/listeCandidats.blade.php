<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
   
<body>
<header class="header2">
                <div class="premierA">
                <div class="logo"><a href="{{ url('admin/home') }}"><img class="imgLogo" src="../../images/logo_ACCQ.png" alt="logoACCQ"></a></div>
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
    <div class="titrePageAC"><h1 class="titrePageA">Candidats</h1><a class="nouvelleR" href="{{ url('admin/nouveauCandidat') }}">Nouveau candidat</a></div>
    <div class="barreP"></div>
    <div class="TC"><a href="{{ url('admin/engagements') }}">Voir les réponses reçues</a></div>
    <table class = 'tableEC1'>
    <thead>
    <tr class="toutEC1">
      <th class="titreEC1"><div class="titreCan">Candidat.e</div><div class="titreCirc">Circonscription</div><div class="titrePartiC">Parti politique</div><div class="titreReponseC">Réponse</div</th>
      <th class="barreSMP"></th>
    </tr>
  </thead>
  
	<tbody class = 'tbody2'>

	<?php
		foreach($candidats2 as $candidat2)
		{
		?>

		<tr class = 'idNomDate'>	
        <td class="donnesC"><div class="nomCC"><?= $candidat2->NomComplet ?></div>
        <div class="circC"><?= $candidat2->circonscription ?></div><div class="partiC"> <?= $candidat2->parti_politique ?></div>
        <div class="reponseC"> <?= $candidat2->reponse1 ?></div>
        <div class="sup"><a class="supC" href="{{ route('supCand', $candidat2->id) }}">Supprimer la réponse</a></div></td>
        <td class="barreSMT"></td>
        </tr>
        

		<?php
		
		}
		?>
		
	</tbody>	
    </table>	

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