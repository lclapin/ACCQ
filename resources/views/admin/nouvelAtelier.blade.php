<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
   
<body>
<header class="header2">
                <div class="premierA">
                <div class="logo"><a href="{{ url('admin/home') }}"><img class="imgLogo" src="../../images/logo_ACCQ.png" alt="logoACCQ"></a></div>
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
    <ol class="ariane">
        <li><a href="{{ url('admin/home') }}">Accueil</a></li>
        <li>&nbsp/&nbsp</li>
        <li><a href="{{ url('admin/ateliersA') }}">Ateliers</a></li>
        <li>&nbsp/&nbsp</li>
        <li>Ajouter un atelier</li>
    </ol>
    <h1 class="titrePageA">Ajouter un atelier</h1>
    <div class="barreP"></div>
    <div class="formC">
           
            <form class="form3" method="post" action ="/ajoutAtelier" >
            @csrf
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            
                <label for="nomAA">Nom</label><br>
                <input class="inputAM" type="text" id="nomAA" name="nomAA"><br>
                <label for="dateAM">Date et heure de l'atelier</label><br>
                <input class="inputAM" type="text" id="dateAA" name="dateAA"><br>
                <label for="descriptionAA">Description</label><br>
                <input class="inputTAM" type="textarea" id="descriptionAA" name="descriptionAA"><br>
                <label for="animationAA">Animation</label><br>
                <input class="inputAM" type="text" id="aniamtionAA" name="animationAA"><br>
                <label for="expertiseAA">Expertise</label><br>
                <input class="inputAM" type="text" id="expertiseAA" name="expertiseAA"><br>
                <label for="availableAA">Available slots</label><br>
                <input class="inputAM" type="text" id="availableAA" name="availableAA"><br>

            
            <input class="inputCand" type="submit" value="Enregistrer">
            </form>

        </div>

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