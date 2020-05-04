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
    <h1 class="titrePageA">Participants à l'événement « L'APPEL POUR UN QUÉBEC CITOYEN »</h1>
    <div class="barreP"></div>

    <table class = 'tableAEC'>
    <thead>
    <tr class="toutAEC">
      <th class="titreAEC"><div class="titrePrenomAEC">Prénom</div><div class="titreNomAEC">Nom</div><div class="titreCourrielAEC">Courriel</div>
      <div class="titreTelephoneAEC">Téléphone</div><div class="titreVilleAEC">Ville</div>
      <div class="titreCodePostalAEC">Code postal</div>
      <div class="titreDateAEC">Date de réception</div></th>
      <th class="barreSMP"></th>
    </tr>
  </thead>
  
	<tbody class = 'tbody2'>

	<?php
		foreach($participants as $participant)
		{
		?>

		<tr class ='idNomCourrielAEC'>	
        <td class="donnesMEC"><div class="prenomAEC"><?= $participant->first_name ?></div><div class="nomAEC"><?= $participant->last_name ?></div>
        <div class="courrielAEC"><a href="mailto:<?= $participant->email ?>"><?= $participant->email ?></a></div
        ><div class="telephoneAEC"> <?= $participant->phone ?></div>
        <div class="villeAEC"> <?= $participant->city ?></div>
        <div class="codePostalAECC"> <?= $participant->postal_code ?></div>
        <div class="dateAEC"> <?= $participant->created_at ?></div>
        <div class="supprimerPart"><a href="{{ route('supPart', $participant->id) }}">Supprimer</a></div></div></td>
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