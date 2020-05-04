<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
   
<body>
@include('includes.header')

@include('includes.banniere')
<div class="containerPage">
<div class="page">

    <?php
		foreach($titresR as $titreR)
		{
    ?>
    <ol class="ariane">
        <li><a href="{{ url('/') }}">Accueil</a></li>
        <li>&nbsp/&nbsp</li>
        <li><a href="{{ url('pages/listeOR') }}">Nos organisations régionales</a></li>
        <li>&nbsp/&nbsp</li>
        <li><a href="{{ url('regions/bas_st_laurent') }}"><?= $titreR->name ?></a></li>
        <li>&nbsp/&nbsp</li>
        <li>Réunions</li>
    </ol>
    <h1 class="titrePage">Toutes les réunions de l'ACRQ « <?= $titreR->name ?> »</h1>
    <div class="barreP"></div>
    <?php
        }
    ?>
    <table class = 'tableRU'>
    <thead>
    <tr class="toutRU">
      <th class="titreRU"><div class="titredateRU">Date</div><div class="titreAdresseRU">Adresse</div><div class="titreCRRU">Compte-rendu</div></th>
      <th class="barreSMP"></th>
    </tr>
  </thead>
  
	<tbody class = 'tbody2'>

    <?php
		foreach($reunionsU as $reunionU)
		{
	?>

		<tr class = 'dateAdresseRU'>	
        <td class="donnesRU"><div class="dateRU"><?= $reunionU->meeting_date ?></div>
        <div class="adresseRU"><?= $reunionU->address ?></div><div class="CRRU"> <?= $reunionU->report ?></div>
        <td class="barreSMT"></td>
        </tr>
        
        <?php
		
    }
    ?>
	</tbody>	
    </table>

</div>
</div>
@include('includes.footer')
</body>
</html>