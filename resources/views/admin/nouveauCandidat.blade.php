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
    <h1 class="titrePageA">Nouvelle réponse d'un candidat</h1>
    <div class="barreP"></div>
    <div class="formC">
           
            <form class="form3" method="post" action ="/ajoutCandidat" >
            @csrf
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            
                <label for="prenomCand">*Prénom</label><br>
                <input class="inputC" type="text" id="prenomCand" name="prenomCand"><br>
                <label for="nomCand">*Nom de famille</label><br>
                <input class="inputC" type="text" id="nomCand" name="nomCand"><br>
                <label for="deuxiemenomCand">Deuxième nom (middlename)</label><br>
                <input class="inputC" type="text" id="deuxiemenomCand" name="deuxiemenomCand"><br>

               

                <label for="circonsCand">*Circonscription</label><br>
                <select class="circonsCand" name="circonsCand">
                <?php
		            foreach($circonscriptions as $circonscription)
		            {
		        ?>
                    <option value="<?= $circonscription->id ?>"><?= $circonscription->name ?></option>
                <?php
                    }
                ?>
                </select><br>
               
                <label for="partiCand">*Parti</label><br>
                <select class="partiCand" name="partiCand">
                <?php
		            foreach($partis as $parti)
		            {
		        ?>
                    <option value="<?= $parti->id ?>"><?= $parti->name ?></option>
                <?php
                    }
		        ?>
                </select><br>

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