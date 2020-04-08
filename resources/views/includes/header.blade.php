<header>
            
                <div class="logo"><a href="{{ url('/') }}"><img class="imgLogo" src="../images/logo_ACCQ.png" alt="logoACCQ"></a></div>
                <nav>
                    <ul class="navPrinc">
                        <li><a class="elementNav" href="{{ url('/') }}">Accueil</a></li>
                        <li class="deroulant"><a class="elementNav" class="org">Notre organisation<img class="fleche" src="../images/down-arrow.png" alt="fleche"></a>
                            <ul class="sous">
                                <li><a href="{{ route('obnl') }}">OBNL</a></li>
                                <li class="petit"><a href="{{ route('statuts_reglements') }}">Statuts et réglements</a></li>
                            </ul>
                        </li>
                        <li><a class="elementNav" href="{{ url('pages/manifeste') }}">Manifeste</a></li>
                        <li><a class="elementNav" href="{{ url('pages/projet_de_loi') }}">Projet de loi</a></li>
                        <li class="deroulant"><a class="elementNav" class="org">Éducation<img class="fleche" src="../images/down-arrow.png" alt="fleche"></a>
                            <ul class="sous">
                                <li><a href="{{ route('constat') }}">Constat</a></li>
                                <li><a href="{{ route('mission') }}">Mission</a></li>
                                <li><a href="{{ route('bibliotheque') }}">Bibliothèque</a></li>
                                <li><a href="{{ route('mediatheque') }}">Médiathèque</a></li>
                                <li><a href="{{ route('promouvoir') }}">Promouvoir</a></li>
                                <li><a href="{{ route('sondage') }}">Sondage</a></li>
                            </ul>
                        </li>
                        <li><a class="elementNav" href="{{ url('pages/discutoire') }}">Discutoire</a></li>
                        <li><a class="elementNav" href="{{ url('pages/medias') }}">Médias</a></li>
                        <li><a class="elementNav" href="{{ url('pages/realisations') }}">Réalisations</a></li>
                        <li><a class="elementNav" href="{{ url('pages/nous_joindre') }}">Nous joindre</a></li>
                    </ul>
                </nav>
            
   </header>