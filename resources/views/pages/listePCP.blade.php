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
        <li><a href="{{ url('pages/realisations') }}">Réalisations</a></li>
        <li>&nbsp/&nbsp</li>
        <li><a href="{{ url('pages/engagement') }}">Engagement solonnel</a></li>
        <li>&nbsp/&nbsp</li>
        <li>Réponses reçues</li>
    </ol>
    <h1 class="titrePage">Réponses reçues</h1>
    <div class="barreP"></div>

</div>
</div>
@include('includes.footer')
</body>
</html>