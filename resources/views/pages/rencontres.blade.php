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
        <li>Rencontres informatives</li>
    </ol>
    <h1 class="titrePage">Rencontres informatives</h1>
    <div class="barreP"></div>
    <p>Notez que nos rencontres informatives locales reprendront suite à la conférence de presse que nous entendons convoquer au printemps.</p>
</div>
</div>

@include('includes.footer')
</body>
</html>