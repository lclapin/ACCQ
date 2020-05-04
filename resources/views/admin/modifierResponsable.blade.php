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
        <li><a href="{{ url('admin/acrq') }}">Gestion des ACRQ</a></li>
        <li>&nbsp/&nbsp</li>
        <li><a href="">Responsables ()</a></li>
        <li>&nbsp/&nbsp</li>
        <li>Modifier un responsable</li>
    </ol>
    <h1 class="titrePageA">Modifier un responsable dans l'ACRQ «  »</h1>
    <div class="barreP"></div>
    <div class="formC">
               
            <?php
		        foreach($modResponsables as $modResponsable)
		        {
		    ?>
            <form class="form3" method="post" action ="{{ route('modifierResponsable',['id'=>$modResponsable->id , 'idH'=>$modResponsable->hive_id]) }}" >
            @csrf
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            
                <label for="nomIM">Nom</label><br>
                <input class="inputIM" type="text" id="nomRM" name="nomRM" value="<?= $modResponsable->full_name ?>"><br>
                <label for="courrielRM">Courriel</label><br>
                <input class="inputIM" type="text" id="courrielRM" name="courrielRM" value="<?= $modResponsable->email ?>"><br>
                <label for="telephoneRM">Téléphone</label><br>
                <input class="inputIM" type="text" id="telephoneRM" name="telephoneRM" value="<?= $modResponsable->phone ?>"><br>
                <label for="facebookRM">Page Facebook</label><br>
                <input class="inputIM" type="text" id="facebookRM" name="facebookRM" value="<?= $modResponsable->fb_page ?>"><br>

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