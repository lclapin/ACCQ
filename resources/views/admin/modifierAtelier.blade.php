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
    <h1 class="titrePageA">Modifier un atelier</h1>
    <div class="barreP"></div>
    <div class="formC">
           
            <?php
		        foreach($modAteliers as $modAtelier)
		        {
            ?>
            <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
            <form class="form3" method="post" action ="{{ route('modifierAtelier', $modAtelier->id) }}" >
            @csrf
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            
                <label for="nomA">Nom</label><br>
                <input class="inputAM" type="text" id="nomAM" name="nomAM" value="<?= $modAtelier->name ?>"><br>
                <label for="dateAM">Date et heure de l'atelier</label><br>
                <input class="inputAM" type="text" id="dateAM" name="dateAM" value="<?= $modAtelier->starts_at ?>"><br>
                <label for="descriptionAM">Description</label><br>
                <textarea class="inputTAM" id="descriptionAM" name="descriptionAM">
                <?= $modAtelier->description ?>
                </textarea><br>
                <label for="animationAM">Animation</label><br>
                <input class="inputAM" type="text" id="aniamtionAM" name="animationAM" value="<?= $modAtelier->animation ?>"><br>
                <label for="expertiseAM">Expertise</label><br>
                <input class="inputAM" type="text" id="expertiseAM" name="expertiseAM" value="<?= $modAtelier->expertise ?>"><br>
                <label for="availableAM">Available slots</label><br>
                <input class="inputAM" type="text" id="availableAM" name="availableAM" value="<?= $modAtelier->available_slots ?>"><br>

            <?php
                }
            ?>    
            <input class="inputCand" type="submit" value="Enregistrer">
            </form>

            <script>
                CKEDITOR.replace( 'descriptionAM', {
                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
                });
            </script>

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