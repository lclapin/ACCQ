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
            foreach($titresReunM as $titreReunM)
		    {
		?>
    <ol class="ariane">
    <li>&nbsp/&nbsp</li>
        <li><a href="{{ url('admin/acrq') }}">Gestion des ACRQ</a></li>
        <li>&nbsp/&nbsp</li>
        <li><a href="{{ route('reunionsA', $titreReunM->id) }}">Réunions (<?= $titreReunM->name ?>)</a></li>
        <li>&nbsp/&nbsp</li>
        <li>Modifier une réunion</li>
    </ol>
    <h1 class="titrePageA">Modifier une réunion dans l'ACRQ « <?= $titreReunM->name ?> »</h1>
    <div class="barreP"></div>
    <div class="formC">
            <?php
                }
            ?>    
            <?php
		        foreach($modReunions as $modReunion)
		        {
		    ?>
            <form enctype="multipart/form-data" class="form3" method="post" action ="{{ route('modifierReunion',['id'=>$modReunion->id , 'idH'=>$modReunion->hive_id]) }}">
            @csrf
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            
                <label for="endroitREM">*Endroit</label><br>
                <input class="inputIM" type="text" id="endroitREM" name="endroitREM" value="<?= $modReunion->location ?>"><br>
                <label for="adresseREM">*Adresse</label><br>
                <input class="inputIM" type="text" id="adresseREM" name="adresseREM" value="<?= $modReunion->address ?>"><br>
                <label for="municipaliteREM">Municipalité</label><br>
                <input class="inputIM" type="text" id="municipaliteREM" name="municipaliteREM" value="<?= $modReunion->city ?>"><br>
                <label for="dateREM">Date de la réunion</label><br>
                <input class="inputIM" type="text" id="dateREM" name="dateREM" value="<?= $modReunion->meeting_date ?>"><br>
                <label for="heureREM">Heure de la réunion</label><br>
                <input class="inputIM" type="text" id="heureREM" name="heureREM" value="<?= $modReunion->meeting_time ?>"><br>
                <label for="ORREM">Ordre du jour (Fichier .pdf)</label><br>
                <input class="inputIM" type="file" id="ORREM" name="ORREM"><br>
                <label for="CRREM">Compte rendu (Fichier .pdf)</label><br>
                <input class="inputIM" type="file" id="CRREM" name="CRREM"><br>

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