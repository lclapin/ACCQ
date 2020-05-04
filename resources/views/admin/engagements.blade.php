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
    <div class="titrePageAC"><h1 class="titrePageA">Réponses des candidats</h1><a class="nouvelleR" href="{{ url('admin/nouvelleReponse') }}">Nouvelle réponse</a></div>
    <div class="barreP"></div>
    <div class="TC"><a href="{{ url('admin/listeCandidats') }}">Voir la liste de tous les candidats</a></div>
    <table class = 'tableEC1'>
    <thead>
    <tr class="toutEC1">
      <th class="titreEC1"><div class="titreCan">Candidat.e</div><div class="titreCirc">Circonscription</div><div class="titrePartiC">Parti politique</div><div class="titreReponseC">Réponse</div</th>
      <th class="barreSMP"></th>
    </tr>
  </thead>
  
	<tbody class = 'tbody2'>

	<?php
		foreach($candidats1 as $candidat1)
		{
		?>

		<tr class = 'idNomDate'>	
        <td class="donnesC"><div class="nomCC"><?= $candidat1->NomComplet ?></div>
        <div class="circC"><?= $candidat1->circonscription ?></div><div class="partiC"> <?= $candidat1->parti_politique ?></div>
        <div class="reponseC"> <?= $candidat1->reponse1 ?></div>
        <div class="modSup"><a href="{{ route('insertModifierCand', $candidat1->id) }}">Modifier la réponse</a><p>&nbsp|&nbsp</p><a class="supC" href="{{ route('supRep', $candidat1->ide) }}">Supprimer la réponse</a></div></td>
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