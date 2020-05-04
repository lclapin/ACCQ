<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
   
<body>
@include('includes.header')

@include('includes.banniere')
<div class="containerPage">
<div class="page">
    <ol class="ariane">
        <li><a href="{{ url('/') }}">Accueil</a></li>
        <li>&nbsp/&nbsp</li>
        <li>L'APPEL POUR UN QUÉBEC CITOYEN</li>
    </ol>
    <h1 class="titrePage">L'APPEL POUR UN QUÉBEC CITOYEN</h1>
    <div class="barreP"></div>
    <div class="AF">
        <div class="appelQuebec">
            <div class="titreAQ">Vous êtes cordialement invité.e à vous joindre à nous pour signer l’Appel ci-dessous. Cet Appel vise à exiger la convocation d’une Assemblée constituante citoyenne chargée de rédiger la première constitution de l’histoire du Québec.
            </div>
            <div class="titreAQ2">En 2018, votons pour une Assemblée constituante par et pour le peuple!</div>
            <p>Nous sommes un collectif de citoyennes et de citoyens qui, constatant le déficit démocratique de nos institutions, estiment que l'État québécois doit être réformé. Selon nous, la solution réside dans le respect de la source légitime du pouvoir, le peuple lui-même.</p><br><br>
            <p>Le peuple québécois vit en ce moment une anomalie historique. Il n’a jamais consenti au régime politique désuet qui le régit, une monarchie constitutionnelle dont les rouages et le fonctionnement lui échappent.</p><br><br>
            <p>Les signataires du présent appel demandent aux personnes candidates aux élections générales d’octobre 2018 de s’engager solennellement à adopter, dans la première année de leur mandat, une Loi créant une Assemblée constituante citoyenne souveraine et totalement libre dans ses délibérations. Le mandat de cette Constituante est de rédiger la première constitution de l'État québécois. Issue d'une large consultation publique, cette constitution est ensuite soumise à la population pour ratification afin d'assurer que sa volonté soit effective et exécutoire.</p><br><br>
            <p>La création d’une Assemblée constituante est basée sur le droit universel et inaliénable des peuples à disposer d’eux-mêmes, le droit à l’autodétermination. Afin que cette Assemblée exprime la volonté de tout le peuple, sans carcan partisan, et reflète la réalité de nos valeurs communes, nous estimons que ses membres doivent être choisis par tirage au sort parmi des volontaires, dans le respect de la parité hommes-femmes, du poids démographique des composantes de la société québécoise et selon des critères de fonctionnement faisant consensus.</p><br><br>
            <p>Pour reprendre la formule célèbre du premier ministre Robert Bourassa : «Quoi qu’on dise et quoi qu’on fasse, le Québec est, aujourd’hui et pour toujours, une société distincte, libre et capable d’assumer son destin et son développement.» (22 juin 1990)</p>
            <div class="CPI"><a href="{{ url('pages/constitution2') }}">Une Constitution, un vieux papier inutile? Rien n’est plus faux!</a></div>
            <p>Joignez-vous à nous pour promouvoir, préparer et provoquer la convocation d'une Assemblée constituante citoyenne!</p><br>
            <div class="signez"><a onclick="accesAppel()" href="#">Signez l'appel maintenant!</a></div>
        </div>
    
        <div class="FormLiens">
            <div class="titreSA">Signez l'appel ici</div>
            <div class="barreSA"></div>
            <div class="texteSA">Notez que seuls vos noms et prénoms seront rendus publics. <a href="{{ url('pages/signatures_appel') }}">Voir les <?= $countSignsA ?> signatures</a>.</div>
            <form class="form2" id="form2" method="post" action = "/createSA">
                @csrf
                <div class="nomComplet">
                <div class="prenom">
                <label for="prenomA">* Prénom</label><br>
                <input type="text" id="prenomA" name="prenomA"><br>
                </div>
                <div class="nom">
                <label for="nomA">* Nom</label><br>
                <input type="text" id="nomA" name="nomA"><br>
                </div>
                </div>
                <label for="courrielA">* Adresse de courriel</label><br>
                <input type="text" id="courrielA" name="courrielA"><br>
                <label for="telephoneA">Numéro de téléphone</label><br>
                <input type="text" id="telephoneA" name="telephoneA"><br>
                <label for="municipaliteA">Municipalité</label><br>
                <input type="text" id="municipaliteA" name="municipaliteA"><br>
                <label for="code_postalA">* Code postal</label><br>
                <input type="text" id="code_postalA" name="code_postalA"><br>
                <input type="submit" value="Soumettre">
            </form>
            
            <div class="NE">NOTRE ENGAGEMENT : Vos informations personnelles (courriel, téléphone et code postal) demeureront confidentielles et ne seront jamais transmises à qui que ce soit sans votre consentement explicite.</div>
            <div class="titreSA">À voir aussi</div>
            <div class="barreSA"></div>
            <div class="liens">
            <ul>
                <li><a href="{{ url('pages/devenir') }}">Devenir partenaire actif</a></li>
                <li><a href="{{ url('pages/constitution2') }}">Une Constitution, un vieux papier inutile? Rien n’est plus faux!</a></li>
                <li><a href="{{ url('pages/engagement') }}">Engagement solennel des personnes candidates aux élections d'octobre 2018</a></li>
                <li><a href="{{ url('pages/manifeste') }}">Signez le manifeste de l'ACCQ</a></li>
            </ul>
            </div>
        </div>
        </div>
</div>
</div>

<script>
    function accesAppel() {
        document.getElementById("form2").classList.toggle("BR");
    }


</script>

@include('includes.footer')
</body>
</html>