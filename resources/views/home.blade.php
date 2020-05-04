<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
   
<body>
<header class="header2">
                <div class="premierA">
                <div class="logo"><a href="{{ url('admin/home') }}"><img class="imgLogo" src="../images/logo_ACCQ.png" alt="logoACCQ"></a></div>
                <nav>
                    <ul id="navPrincA" class="navPrincA">
                        <li><a class="elementNavA" href="{{ url('admin/home') }}">Accueil</a></li>
                        <li><a class="elementNavA" href="{{ url('/') }}" target="blank">Voir le site</a></li>
                        <li><a class="elementNavA" href="{{ route('logout') }}">Se déconnecter</a></li>
                    </ul>
                </nav>
                </div>
   </header>
   <div class="containerPageA">
<div class="pageA">
    <h1 class="titrePageA">Gestion du site de l'ACCQ</h1>
    <div class="barreP"></div>
    <ul>
        <li><a href="{{ url('admin/engagements') }}">Engagement solennel</a></li>
        <li><a href="{{ url('admin/acrq') }}">Gérer les ACRQ</a></li>
        <li><a href="{{ url('admin/membres') }}">Gérer les signatures du manifeste</a></li>
        <li><a href="{{ url('admin/ateliersA') }}">Gérer les ateliers</a></li>
        <li><a href="{{ url('admin/participants') }}">Gérer les signatures de «L'appel»</a></li>
        <li><a href="{{ url('/') }}" target="blank">Voir le site dans un nouvel onglet</a></li>
        <li><a  href="{{ route('logout') }}">Se déconnecter</a></li>
    </ul>
</div>
</div>

<footer>
    <div class="footerC">
<div class="logoFooter"><img class="imgLogoFooter" src="../images/logo_ACCQ.png" alt="logoACCQFooter"></div>
<div class="aPropos">
Alliance pour une constituante citoyenne du Québec @2020<div>
</div>
</footer>
</body>
</html>