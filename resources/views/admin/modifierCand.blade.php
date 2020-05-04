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
    <h1 class="titrePageA">Modifier la réponse d'un candidat</h1>
    <div class="barreP"></div>
    <div class="formC">
           
            <?php
		        foreach($modCands as $modCand)
		        {
		    ?>
            <form class="form3" method="post" action ="{{ route('modifierCand1', $modCand->id) }}" >
            @csrf
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            
                <label for="nomC">Nom du candidat</label><br>
                <input class="inputC" type="text" id="nomC" name="nomC" value="<?= $modCand->NomComplet ?>"><br>
                <div class="veuillez">Veuillez commencer à inscrire le nom pour afficher les résultats</div><br>

            <?php
                }
            ?>    
                <label for="reponseCand">*Réponse</label><br>
                <select class="reponsesCand" name="reponsesCand">
                    <option value="0">Refuse de s'y engager</option>
                    <option value="1">S'y engage solenellement</option>
                    <option value="2">Refuse de se prononcer</option>
                    <option value="3">En attente d'une réponse</option>
                </select><br>
                <label for="commentairesCand">Commentaires</label><br>
                <input class="inputCand" type="text" id="commentairesCand" name="commentairesCand"><br>
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