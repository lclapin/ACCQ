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
<ol class="ariane">
        <li><a href="{{ url('admin/home') }}">Accueil</a></li>
        <li>&nbsp/&nbsp</li>
        <li>Ateliers constituants virtuels</li>
    </ol>
    <h1 class="titrePageA">Liste des ateliers</h1>
    <div class="barreP"></div>
    <div class="ajouterA"><a href="{{ url('admin/nouvelAtelier') }}">Ajouter un atelier</a></div><br>
    <table class = 'tableAT'>
    <thead>
    <tr class="toutAT">
      <th class="titreAT"><div class="titreDateA">Date</div><div class="titreNomA">Nom</div><div class="titreInscriptionsA">Inscriptions</div></th>
      <th class="barreSMP"></th>
    </tr>
  </thead>
  
	<tbody class = 'tbody2'>

	<?php
		foreach($ateliers as $atelier)
		{
		?>

		<tr class = 'dateNomA'>	
        <td class="donnesA"><div class="dateA"><?= $atelier->starts_at ?></div>
        <div class="nomA"><?= $atelier->name ?></div><div class="inscriptionsA"> <a href="{{ route('inscriptions', $atelier->id) }}">
        <?php
        foreach($inscriptions as $inscription)
		{
        if($atelier->id == $inscription->idW){
         echo "$countInscriptions";
        }
    }
         ?>/
        <?= $atelier->available_slots ?></a></div>
        <div class="modSupA"><div class="modifierA"><a  href="{{ route('insertModifierAtelier', $atelier->id) }}">Modifier</a></div><div class="supprimerA"><a class="supC" href="{{ route('supAtelier', $atelier->id) }}">Supprimer</a></div></div></td>
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