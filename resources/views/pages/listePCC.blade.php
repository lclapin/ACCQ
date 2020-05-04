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
        <li><a href="{{ url('pages/engagement') }}">Engagement solonnel</a></li>
        <li>&nbsp/&nbsp</li>
        <li>Liste des circonscriptions</li>
    </ol>
    <h1 class="titrePage">Liste des personnes candidates par circonscription</h1>
    <div class="barreP"></div>
    <div class="titreDec">DÉCLARATION D'ENGAGEMENT DES CANDIDATS</div><br>
    <div class="texteDec">Afin d’éclairer le choix des électrices et des électeurs de votre circonscription, l’ACCQ publie ici, tout au long de la campagne électorale, la liste des personnes candidates ayant accepté de s’engager à partager le pouvoir avec le peuple en convoquant, dans la première année de leur mandat, une Assemblée constituante citoyenne ouverte et totalement libre dans ses délibérations et ses conclusions</div>
    <?php
	foreach($hives as $hive)
	{
	?>
        <div class="nomRegion"><?= $hive->nomComplet ?></div>
        <ul>
        <?php
		    foreach($regionsD as $regionD)
		    {
            if($hive->name == $regionD->nameHive){
        ?>
        <li><a href="{{ route('pageCandidats', $regionD->idD) }}"><?= $regionD->nameC ?></a></li>
        <?php
            }
            }
        ?>
        </ul>

    <?php
        }
    ?>
    
    <!--foreach($hives as $hive){
            
            echo "<br>";
            //var_dump($test);
           //var_dump($regionsD[0]->nomComplet);
            echo "<br>";
            //var_dump($unique_hive);
            var_dump($hive);
            
            foreach($regionsD as $regionD){
                if($hive->name == $regionD->nameHive){
                    echo "<br>";
                    var_dump($regionD->nameC);
                }
            }

        }-->


</div>
</div>
@include('includes.footer')
</body>
</html>
