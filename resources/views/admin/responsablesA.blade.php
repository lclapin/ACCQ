<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
   
<body>
<header class="header2">
                <div class="premierA">
                <div class="logo"><a href="{{ url('admin/home') }}"><img class="imgLogo" src="../../../images/logo_ACCQ.png" alt="logoACCQ"></a></div>
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
		foreach($titresResp as $titreResp)
		{
		?>
<ol class="ariane">
        <li><a href="{{ url('admin/home') }}">Accueil</a></li>
        <li>&nbsp/&nbsp</li>
        <li><a href="{{ url('admin/acrq') }}">Gestion des ACRQ</a></li>
        <li>&nbsp/&nbsp</li>
        <li>Responsables (<?= $titreResp->name ?>)</li>
    </ol>
    <h1 class="titrePageA">Responsables de l'ACRQ «<?= $titreResp->name ?> »</h1>

       
    <div class="barreP"></div>
    <div class="ajouterResp"><a href="{{ route('nouveauResponsable', $titreResp->id) }}">Ajouter un responsable</a></div><br>
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
		foreach($responsablesA as $responsableA)
		{
	?>

		<tr class = 'nomCourrielI'>	
        <td class="donnesI"><div class="nomI"><?= $responsableA->full_name ?></div>
        <div class="courrielI"><?= $responsableA->email ?></div><div class="telephoneI"> <?= $responsableA->phone ?></div>
        <div class="modSupA"><div class="modifierA"><a  href="{{ route('insertModifierResponsable', $responsableA->id) }}">Modifier</a></div><div class="supprimerA"><a class="supC" href="{{ route('supResp', ['id'=>$responsableA->id , 'idH'=>$responsableA->hive_id]) }}">Supprimer</a></div></div></td>
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