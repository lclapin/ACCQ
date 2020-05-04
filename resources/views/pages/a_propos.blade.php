<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
   
<body>
@include('includes.header')

@include('includes.banniere')
<div class="containerAPropos">
<div class="page">
    <ol class="ariane">
        <li><a href="{{ url('/') }}">Accueil</a></li>
        <li>&nbsp/&nbsp</li>
        <li>À propos du site web</li>
    </ol>
    <h1 class="titrePage">À propos du site web</h1>
    <div class="barreP"></div>
    <p>Ce site web appartient à l'ensemble des constituant.es. Le <a href="{{ url('pages/organigramme') }}">comité TI</a> est mandaté pour le mettre à jour selon les besoins de notre regroupement non partisan.</p><br>
    <p>Le code source est <a href="https://github.com/accq/site-web-accq" target="blank">accessible publiquement sur Github</a> afin:</p></br>
    <ol>
        <li>d'assurer un maximum de transparence;</li>
        <li> favoriser la coopération entre les développeurs voulant contribuer à l'amélioration du site web;</li>
    </ol>
</div>
</div>
@include('includes.footer')
</body>
</html>