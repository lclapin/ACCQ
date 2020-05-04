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
        <li>Signatures</li>
    </ol>
    <h1 class="titrePageA">Liste des signatures</h1>
    <div class="barreP"></div>
    <div class="signApp"><?= $countNM ?> signature(s) en attente d'approbation</div>
    <table class = 'tableMEM'>
    <thead>
    <tr class="toutMEM">
      <th class="titreMEM"><div class="titreNomMEM">Nom</div><div class="titreCourrielMEM">Courriel</div>
      <div class="titreTelephoneMEM">Téléphone</div><div class="titreVilleMEM">Ville</div>
      <div class="titreCodePostalMEM">Code postal</div><div class="titreDateMEM">Date de la signature</div></th>
      <th class="barreSMP"></th>
    </tr>
  </thead>
  
	<tbody class = 'tbody2'>

	<?php
		foreach($nouveauxMembres as $nouveauMembre)
		{
		?>

		<tr class = 'idNomCourrielMEM'>	
        <td class="donnesMEM"><div class="nomMEM"><?= $nouveauMembre->name ?></div>
        <div class="courrielMEM"><a href="mailto:<?= $nouveauMembre->email ?>"><?= $nouveauMembre->email ?></a></div><div class="telephoneMEM"> <?= $nouveauMembre->phone ?></div>
        <div class="villeMEM"> <?= $nouveauMembre->city ?></div>
        <div class="codePostalMEM"> <?= $nouveauMembre->postal_code ?></div>
        <div class="dateMEM"> <?= $nouveauMembre->created_at ?></div>
        <div class="AppSupMEM"><div class="appMEM"><a href="{{ route('approbationM', $nouveauMembre->id) }}">Approuver la signature</a></div><div class="supMEM"><a href="{{ route('supAMEM', $nouveauMembre->id) }}">Supprimer la signature</a></div></div></td>
        <td class="barreSMT"></td>
        </tr>
        

		<?php
		}
		?>
		
	</tbody>	
    </table>	

    <div class="signConf"><?= $countsOM ?> signatures approuvées</div>
    <table class = 'tableMEC'>
    <thead>
    <tr class="toutMEC">
      <th class="titreMEC"><div class="titreStatusMEC">Status</div><div class="titreNomMEC">Nom</div><div class="titreCourrielMEC">Courriel</div>
      <div class="titreTelephoneMEC">Téléphone</div><div class="titreVilleMEC">Ville</div>
      <div class="titreCodePostalMEC">Code postal</div>
      <div class="titreRegionMEC">Région</div>
      <div class="titreDateMEC">Date de la signature</div></th>
      <th class="barreSMP"></th>
    </tr>
  </thead>
  
	<tbody class = 'tbody2'>

	<?php
		foreach($membres as $membre)
		{
		?>

		<tr class = 'idNomCourrielMEC'>	
        <td class="donnesMEC"><div class="statusMEC"><?= $membre->status ?></div><div class="nomMEC"><?= $membre->name ?></div>
        <div class="courrielMEC"><a href="mailto:<?= $membre->email ?>"><?= $membre->email ?></a></div
        ><div class="telephoneMEM"> <?= $membre->phone ?></div>
        <div class="villeMEC"> <?= $membre->city ?></div>
        <div class="codePostalMEC"> <?= $membre->postal_code ?></div>
        <div class="regionMEC"> <?= $membre->no_region ?></div>
        <div class="dateMEC"> <?= $membre->created_at ?></div>
        </td>
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