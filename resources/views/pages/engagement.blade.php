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
        <li><a href="{{ url('pages/realisations') }}">Réalisations</a></li>
        <li>&nbsp/&nbsp</li>
        <li>Engagement solennel</li>
    </ol>
    <h1 class="titrePage">Engagement solennel des personnes candidates aux élections d'octobre 2018</h1>
    <div class="barreP"></div>
    <p>L’ACCQ, organisation non partisane, demande aux personnes candidates aux élections générales québécoises de s’engager solennellement, si élues, à œuvrer à l’adoption, dans la première année de leur mandat, d’une Loi créant une Assemblée constituante citoyenne du Québec, ouverte et totalement libre dans ses délibérations et ses conclusions. Cette demande inclut une <a href="{{ url('pages/requetes') }}">proposition de projet de Loi</a> soumise par l’ACCQ.</p><br>
    <p>L’ACCQ a soigneusement évité tout ce qui, dans le projet de loi, pourrait limiter les choix des personnes constituantes quant au contenu de la première constitution de l’histoire du Québec. Nous ne voulons pas toutefois que la question soit, comme par le passé, repoussée aux calendes grecques. Pour que la souveraineté du Peuple québécois soit véritablement effective, nous avons prévu que l’exercice soit bouclé à l’intérieur du prochain mandat électoral de quatre ans, de la création de la Constituante citoyenne à la ratification de la Constitution par un référendum exécutoire.</p><br>
    <p>De plus, avant d’adopter la loi créant la Constituante, nous souhaitons que l’Assemblée nationale tienne une série de consultations publiques dans tout le Québec afin d’impliquer, dès le départ, l’ensemble de la population dans le processus.</p><br>
    <p>Tout au long de la campagne, dans la <a href="{{ url('pages/listePCC') }}">liste des personnes candidates aux prochaines élections par circonscription</a> que vous trouverez sur notre site Internet, nous identifierons les personnes qui auront accepté de s'engager à la convocation d'une Assemblée constituante citoyenne. Vous pourrez ainsi vérifier régulièrement si le candidat de votre choix a déjà signifié son engagement, auquel cas contraire, nous vous invitons à faire pression auprès de cette personne afin qu'elle le fasse le plus tôt possible.</p><br>
    <p>Si vous avez des informations pertinentes à nous transmettre à ce sujet, n'hésitez pas à nous écrire : <a href="mailto:secretariat@accq.quebec">secretariat@accq.quebec</a></p><br>
    <div class="unissons">Unissons nos voix pour exiger la convocation d'une Assemblée constituante citoyenne!</div><br>
    <ul>
        <li><a href="{{ url('pages/requetes') }}">Requêtes et recommandations</a></li>
        <li><a href="{{ url('pages/listePCC') }}">Liste des personnes candidates par circonscription</a></li>
        <li><a href="{{ url('pages/appel') }}">Pour signer l'APPEL</a></li>
        <li><a href="{{ url('pages/promouvoir') }}">Imprimez nos outils de promotion maintenant</a></li>
    </ul>
</div>
</div>    
@include('includes.footer')
</body>
</html>