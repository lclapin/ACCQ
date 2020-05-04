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
		    foreach($titresReun as $titreReun)
		    {
		?>
<ol class="ariane">
        <li><a href="{{ url('admin/home') }}">Accueil</a></li>
        <li>&nbsp/&nbsp</li>
        <li><a href="{{ url('admin/acrq') }}">Gestion des ACRQ</a></li>
        <li>&nbsp/&nbsp</li>
        <li>Réunions (<?= $titreReun->name ?>)</li>
    </ol>
    <h1 class="titrePageA">Réunions de l'ACRQ « <?= $titreReun->name ?> »</h1>

       
    <div class="barreP"></div>
    <div class="ajouterA"><a href="{{ route('nouvelleReunion', $titreReun->id) }}">Ajouter une réunion</a></div><br>
    <div class="RP">Réunions passées</div>
    <?php
		    }
		?>
    <table class = 'tableRP'> 
    <thead>
    <tr class="toutRP">
      <th class="titreRP"><div class="titreDateRP">Date/Heure</div><div class="titreLieuRP">Lieu</div><div class="titreCRRP">Compte-rendu</div></th>
      <th class="barreSMP"></th>
    </tr>
  </thead>
  
	<tbody class = 'tbody2'>

	<?php
		foreach($reunionsA as $reunionA)
		{
		?>

		<tr class = 'dateHeureRP'>	
        <td class="donnesRP"><div class="dateRP"><?= $reunionA->dateComplete ?></div>
        <div class="lieuRP"><?= $reunionA->location ?></div><div class="CRRP"> <a href="../../../pdf/CR/<?= $reunionA->report ?>" target="blank">Télécharger</a></div>
        <div class="modSupA"><div class="modifierA"><a  href="{{ route('insertModifierReunion', $reunionA->id) }}">Modifier</a></div></div></td>
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