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
        <li>Pour devenir membre</li>
    </ol>
    <h1 class="titrePage">Devenez membre en règle ou faites un don!</h1>
    <div class="barreP"></div>
    <a href="../pdf/paiement_cotisation.pdf" target="blank">Pour voir les modalités de paiement</a>
</div>
</div>

@include('includes.footer')
</body>
</html>