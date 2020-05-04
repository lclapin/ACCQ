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
        <li>Signatures de « L' APPEL »</li>
    </ol>
    <h1 class="titrePage">Liste des signatures de « L' APPEL » .</h1>
    <div class="barreP"></div>
        <ul>
        <?php
		    foreach($signaturesA as $signatureA)
		    {
        ?>

            <li><?= $signatureA->nomComplet ?></li>
        
        <?php
            }
        ?>
        </ul>

</div>
</div>

@include('includes.footer')
</body>
</html>