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
        <?php
            foreach($titresACRQM as $titreACRQM)
		    {
		?>
    <ol class="ariane">
        <li><a href="{{ url('admin/home') }}">Accueil</a></li>
        <li>&nbsp/&nbsp</li>
        <li><a href="{{ url('admin/acrq') }}">Gestion des ACRQ</a></li>
        <li>&nbsp/&nbsp</li>
        <li>Modifier une ACRQ</li>
    </ol>
    <h1 class="titrePageA">Modifier une réunion dans l'ACRQ « <?= $titreACRQM->name ?> »</h1>
    <div class="barreP"></div>
    <div class="formC">
            
            
            <form enctype="multipart/form-data" class="form3" method="post" action ="{{ route('modifierACRQ', $titreACRQM->id) }}">
            @csrf
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            
                <label for="nomACM">*Nom</label><br>
                <input class="inputIM" type="text" id="nomACM" name="nomACM" value="<?= $titreACRQM->name ?>"><br>
                <label for="numeroACM">*Numéro</label><br>
                <input class="inputIM" type="text" id="numeroACM" name="numeroACM" value="<?= $titreACRQM->number ?>"><br>
                <label for="facebookACM">Adresse Facebook</label><br>
                <input class="inputIM" type="text" id="facebookACM" name="facebookACM" value="<?= $titreACRQM->fb_url ?>"><br>
                <label for="imageACM">Image</label><br>
                <input class="inputIM" type="file" id="imageACM" name="imageACM"><br>
                <div class="toutImg"><label class="titreImg" for="IAACM">Image actuelle:</label><img class="imgACRQ" src="../../images/regions/<?= $titreACRQM->image ?>"><br></div>
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