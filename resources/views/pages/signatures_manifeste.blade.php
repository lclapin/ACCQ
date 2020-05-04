<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
   
<body>
@include('includes.header')

@include('includes.banniere')
<div class="containerPage">
<div class="page">
    <ol class="ariane">
        <li><a href="{{ url('/') }}">Accueil</a></li>
        <li>&nbsp/&nbsp</li>
        <li>Signatures du manifeste</li>
    </ol>
    <h1 class="titrePage">Merci <?= $countSignsM ?> fois pour votre engagement!</h1>
    <div class="barreP"></div>
    <table class = 'tableSMP'>
    <thead>
    <tr class="toutSMP">
      <th class="titreSMP"><div># Signature</div><div class="nomC">Nom complet</div><div class="dateSM">Date de la signature</div></th>
      <th class="barreSMP"></th>
    </tr>
  </thead>
  
	<tbody class = 'tbody2'>

	<?php
		foreach($signaturesM as $signatureM)
		{
		?>

		<tr class = 'idNomDate'>	
        <td class="donnesS"><div class="SMid"><?= $signatureM->id ?></div><div class="SMnom"><?= $signatureM->name?></div><div class="SMdate"> <?= $signatureM->created_at ?></div></td>
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