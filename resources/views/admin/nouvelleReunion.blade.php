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
            foreach($titresReunN as $titreReunN)
		    {
		?>
    <ol class="ariane">
    <li><a href="{{ url('admin/acrq') }}">Gestion des ACRQ</a></li>
        <li>&nbsp/&nbsp</li>
        <li><a href="{{ route('reunionsA', $titreReunN->id) }}">Réunions (<?= $titreReunN->name ?>)</a></li>
        <li>&nbsp/&nbsp</li>
        <li>Ajouter une réunion</li>
    </ol>
    <h1 class="titrePageA">Ajouter une réunion dans l'ACRQ « <?= $titreReunN->name ?> »</h1>
    <div class="barreP"></div>
    <div class="formC">
            
            
            <form enctype="multipart/form-data" class="form3" method="post" action ="{{ route('ajouterReunion', $titreReunN->id) }}">
            @csrf
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            <?php
                }
            ?>    
            
                <label for="endroitREA">*Endroit</label><br>
                <input class="inputIM" type="text" id="endroitREA" name="endroitREA"><br>
                <label for="adresseREA">*Adresse</label><br>
                <input class="inputIM" type="text" id="adresseREA" name="adresseREA"><br>
                <label for="municipaliteREA">Municipalité</label><br>
                <input class="inputIM" type="text" id="municipaliteREA" name="municipaliteREA"><br>
                <label for="dateREA">Date de la réunion</label><br>
                <input class="inputIM" type="text" id="dateREA" name="dateREA"><br>
                <label for="heureREA">Heure de la réunion</label><br>
                <input class="inputIM" type="text" id="heureREA" name="heureREA"><br>
                <label for="ORREA">Ordre du jour (Fichier .pdf)</label><br>
                <input class="inputIM" type="file" id="ORREA" name="ORREA"><br>
                <label for="CRREA">Compte rendu (Fichier .pdf)</label><br>
                <input class="inputIM" type="file" id="CRREA" name="CRREA"><br>

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