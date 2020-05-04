<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
   
<body>
@include('includes.header')

@include('includes.banniere')
<div class="containerPage">
<div class="page">

    <?php
		foreach($titresCand as $titreCand)
		{
	?>
    <ol class="ariane">
        <li><a href="{{ url('/') }}">Accueil</a></li>
        <li>&nbsp/&nbsp</li>
        <li><a href="{{ url('pages/realisations') }}">Réalisations</a></li>
        <li>&nbsp/&nbsp</li>
        <li><a href="{{ url('pages/engagement') }}">Engagement solonnel</a></li>
        <li>&nbsp/&nbsp</li>
        <li><a href="{{ url('pages/listePCC') }}">Liste des circonscriptions</a></li>
        <li>&nbsp/&nbsp</li>
        <li><?= $titreCand->name ?></li>
    </ol>
    <h1 class="titrePage">Engagement des personnes candidates dans « <?= $titreCand->name ?> »</h1>
    <div class="barreP"></div>
    <?php
		}
	?>

</div>
</div>
@include('includes.footer')
</body>
</html>