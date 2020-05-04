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
        <li>Nos organisations régionales</li>
    </ol>
    <h1 class="titrePage">Liste des organisations Régionales (ACRQ)</h1>
    <div class="barreP"></div>
    <ul>
    <?php
		foreach($titresOR as $titreOR)
		{
    ?>
        <li><a href="{{ route('regionU', $titreOR->id) }}"><?= $titreOR->name ?></a></li>
    <?php
        }
    ?>
        <!--<li><a href="{{ url('regions/saguenay') }}">02 - Saguenay/Lac-St-Jean</a></li>
        <li><a href="{{ url('regions/capitale_nationale') }}">03 - Capitale-Nationale</a></li>
        <li><a href="{{ url('regions/mauricie') }}">04 - Mauricie</a></li>
        <li><a href="{{ url('regions/estrie') }}">05 - Estrie</a></li>
        <li><a href="{{ url('regions/montreal') }}">06 - Montréal</a></li>
        <li><a href="{{ url('regions/outaouais') }}">07 - Outaouais</a></li>
        <li><a href="{{ url('regions/abitibi') }}">08 - Abitibi-Temiscamingue</a></li>
        <li><a href="{{ url('regions/cote_nord') }}">09 - Côte-Nord</a></li>
        <li><a href="{{ url('regions/nord_du_quebec') }}">10 - Nord-du-Québec</a></li>
        <li><a href="{{ url('regions/gaspesie') }}">11 - Gaspésie/Îles-de-la-Madeleine</a></li>
        <li><a href="{{ url('regions/chaudiere_appalaches') }}">12 - Chaudière-Appalaches</a></li>
        <li><a href="{{ url('regions/laval') }}">13 - Laval</a></li>
        <li><a href="{{ url('regions/lanaudiere') }}">14 - Lanaudière</a></li>
        <li><a href="{{ url('regions/laurentides') }}">15 - Laurentides</a></li>
        <li><a href="{{ url('regions/monteregie') }}">16 - Montérégie</a></li>
        <li><a href="{{ url('regions/centre_du_quebec') }}">17 - Centre-du-Québec</a></li>-->
    </ul>

</div>
</div>

@include('includes.footer')
</body>
</html>