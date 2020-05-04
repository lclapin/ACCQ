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
        <li>1. Préambule, valeurs et principes</li>
    </ol>
    <h1 class="titrePageA">Modifier une inscription</h1>
    <div class="barreP"></div>
    <div class="formC">
           
            <?php
		        foreach($modInscrits as $modInscrit)
		        {
		    ?>
            <form class="form3" method="post" action ="{{ route('modifierInscrit', $modInscrit->id) }}" >
            @csrf
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            
                <label for="nomIM">Nom</label><br>
                <input class="inputIM" type="text" id="nomIM" name="nomIM" value="<?= $modInscrit->name ?>"><br>
                <label for="courrielIM">Courriel</label><br>
                <input class="inputIM" type="text" id="courrielIM" name="courrielIM" value="<?= $modInscrit->email ?>"><br>
                <label for="telephoneIM">Téléphone</label><br>
                <input class="inputIM" type="text" id="telephoneIM" name="telephoneIM" value="<?= $modInscrit->phone ?>"><br>

            <?php
                }
            ?>    
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