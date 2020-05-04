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
        <li>Constituons!</li>
    </ol>
    <h1 class="titrePage">BEAUCOUP PLUS QU'UNE SIMPLE EXPÉRIENCE THÉÂTRALE</h1>
    <div class="barreP"></div>
</div>
</div>
@include('includes.footer')
</body>
</html>