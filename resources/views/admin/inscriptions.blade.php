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

    <?php
		foreach($titres as $titre)
		{
	?>
<ol class="ariane">
        <li><a href="{{ url('admin/home') }}">Accueil</a></li>
        <li>&nbsp/&nbsp</li>
        <li><a href="{{ url('admin/ateliersA') }}">Ateliers</a></li>
        <li>&nbsp/&nbsp</li>
        <li>Inscriptions</li>
    </ol>
    <h1 class="titrePageA">Inscriptions à l'atelier «<?= $titre->name ?>»</h1>
    <div class="barreP"></div>
    <?php
		
    }
    ?>

   

    <table class = 'tableIA'>
    <thead>
    <tr class="toutIA">
      <th class="titreIA"><div class="titreNomI">Nom</div><div class="titreCourrielI">Courriel</div><div class="titretelephoneI">Téléphone</div></th>
      <th class="barreSMP"></th>
    </tr>
  </thead>
  
	<tbody class = 'tbody2'>

    <?php
		foreach($inscriptions as $inscription)
		{
	?>

		<tr class = 'nomCourrielI'>	
        <td class="donnesI"><div class="nomI"><?= $inscription->name ?></div>
        <div class="courrielI"><?= $inscription->email ?></div><div class="telephoneI"> <?= $inscription->phone ?></div>
        <div class="modSupA"><div class="modifierA"><a  href="{{ route('insertModifierInscrit', $inscription->id) }}">Modifier</a></div><div class="supprimerA"><a class="supC" href="{{ route('supInscrit', ['id'=>$inscription->id , 'idI'=>$inscription->workshop_id]) }}">Supprimer</a></div></div></td>
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