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
        <li><?= $titreR->name ?></li>
    </ol>
    <h1 class="titrePage"><?= $titreR->nomCompletR ?></h1>
    <div class="barreP"></div>
    <div class="ACRQFB"><img class="imgFB" src="../../images/facebook.png" alt="logoFB"><a href="<?= $titreR->fb_url ?>" target=blank>Page facebook de l'ACRQ <?= $titreR->id ?></a></div>
    <div class="RR">
    <div class="reunions">
        <div class="titreReunions">Prochaine réunion régionale</div>
        <div class="barreR"></div>
        <p>Aucune réunion n'est prévue</p>
        <a href="{{ route('reunionsU', $titreR->id) }}">Voir les réunions passées</a>
    </div>
    <?php
        }
    ?>
    
    <div class="responsables">
        <div class="titreResponsables">Responsables</div>
        <div class="barreR"></div>
        <?php
		foreach($responsablesU as $responsableU)
		{
    ?>
        <div class="responsable">
       
            <div class="nom"><?= $responsableU->full_name ?></div>
            <div class="courriel"><a href="mailto:<?= $responsableU->email ?>"><?= $responsableU->email ?></a></div>
            <div class="titre"><?= $responsableU->phone ?></div>
            <div class="pageFB"><a href="<?= $responsableU->fb_page ?>" target=blank>Page Facebook</a></div>
        </div>
        <?php
        }
    ?>
    </div>
    

    </div>
</div>        
</div>
@include('includes.footer')
</body>
</html>