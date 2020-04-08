<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.head')
    <body>
    @include('includes.header') 
   <img class="imgBanniere" src="images/banniere.png" alt="banniereACCQ">
   <div class="blocPrincipal">    
        <div class="premierBloc">
        <div class="sondage">
            <div class="titreSondage">SONDAGE EN LIGNE</div>
            <p class="texteSondage">Depuis cinq ans déjà, l'idée d'une constituante citoyenne chemine. 
            L'ACCQ travaille à mettre en place les conditions nécessaires pour réaliser cette avancée remarquable pour le peuple québécois. 
            Votre participation à ce sondage nous aidera à mener à bien notre mission.
            </p>
            <div class="repondre">
                <a href="{{ url('pages/sondage') }}">Répondre au sondage maintenant</a>
            </div>
        </div>
        <div class="constituons">
            <a href="{{ url('pages/constituons') }}">
                <img class="imgConstituons" src="../images/imgConstituons.jpg" alt="image_constituons">
            </a>
        </div>
    </div>
        <div class="deuxiemeBloc">
            <div class="ateliers">
                <a href="{{ url('pages/ateliers') }}">
                    <img class="imgAteliers" src="../images/ateliers.jpg" alt="image_rencontres">
                </a>
            </div>
            <div class="rencontres">
                <a href="{{ url('pages/rencontres') }}">
                    <img class="imgRencontres" src="../images/rencontres.jpg" alt="image_rencontres">
                </a>
            </div>
        </div>
        <div class="troisiemeBloc">
            <div class="videoRS">
                <div class="videoConstituante">
                <iframe width="495" height="315" src="https://www.youtube.com/embed/NvCW1Xat-5s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="texteVideo">Plusieurs autres vidéos sont disponibles dans la <a href="{{ url('pages/mediatheque') }}"> médiathèque</a>!</div>
                <div class="lienManifeste">
                <a href="{{ url('pages/manifeste') }}">
                    <img class="imgManifeste" src="../images/manifeste.png" alt="image_manifeste">
                </a>
            </div>
            <div class="lienDevenirMembre">
                <a href="{{ url('pages/devenir_membre') }}">
                    <img class="imgMembre" src="../images/membre.jpg" alt="image_membre">
                </a>
            </div>
            <div class="texteFB">Aimez notre page Facebook</div>
            </div>
            <div class="regions">
                    <div class="regionsPar3">
                        <div class="region">
                            <a href="{{ url('regions/bas_st_laurent') }}">
                                <img class="imgRegion" src="../images/regions/bas_st_laurent.jpg" alt="image_bas_st_laurent">
                                <div class="texteRegion">01 - Bas-St-Laurent</div>
                            </a>
                        </div>
                        <div class="region">
                            <a href="{{ url('regions/saguenay') }}">
                                <img class="imgRegion" src="../images/regions/saguenay.jpg" alt="image_saguenay">
                                <div class="texteRegion">02 - Saguenay/Lac-St-Jean</div>
                            </a>
                        </div>
                        <div class="region">
                            <a href="{{ url('regions/capitale_nationale') }}">
                                <img class="imgRegion" src="../images/regions/capitale_nationale.jpg" alt="image_capitale_nationale">
                                <div class="texteRegion">03 - Capitale Nationale</div>
                            </a>
                        </div>

                    </div>
                    <div class="regionsPar3">
                    <div class="region">
                            <a href="{{ url('regions/mauricie') }}">
                                <img class="imgRegion" src="../images/regions/mauricie.jpg" alt="image_mauricie">
                                <div class="texteRegion">04 - Mauricie</div>
                            </a>
                        </div>
                        <div class="region">
                            <a href="{{ url('regions/estrie') }}">
                                <img class="imgRegion" src="../images/regions/estrie.jpg" alt="image_estrie">
                                <div class="texteRegion">05 - Estrie</div>
                            </a>
                        </div>
                        <div class="region">
                            <a href="{{ url('regions/montreal') }}">
                                <img class="imgRegion" src="../images/regions/montreal.jpg" alt="image_montreal">
                                <div class="texteRegion">06 - Montréal</div>
                            </a>
                        </div>
                    </div>
                     <div class="regionsPar3">
                    <div class="region">
                            <a href="{{ url('regions/outaouais') }}">
                                <img class="imgRegion" src="../images/regions/outaouais.jpg" alt="image_outaouais">
                                <div class="texteRegion">07 - Outaouais</div>
                            </a>
                        </div>
                        <div class="region">
                            <a href="{{ url('regions/abitibi') }}">
                                <img class="imgRegion" src="../images/regions/abitibi.jpg" alt="image_abitibi">
                                <div class="texteRegion">08 - Abitibi-Témiscamingue</div>
                            </a>
                        </div>
                        <div class="region">
                            <a href="{{ url('regions/cote_nord') }}">
                                <img class="imgRegion" src="../images/regions/cote_nord.jpg" alt="image_cote_nord">
                                <div class="texteRegion">09 - Côte-Nord</div>
                            </a>
                        </div>
                    </div>
                    <div class="regionsPar3">
                    <div class="region">
                            <a href="{{ url('regions/nord_du_quebec') }}">
                                <img class="imgRegion" src="../images/regions/nord_du_quebec.jpg" alt="image_nord_du_quebec">
                                <div class="texteRegion">10 - Nord-du-Québec</div>
                            </a>
                        </div>
                        <div class="region">
                            <a href="{{ url('regions/gaspesie') }}">
                                <img class="imgRegion" src="../images/regions/gaspesie.jpg" alt="image_gaspesie">
                                <div class="texteRegion">11 - Gaspésie/Îles-de-la-Madeleine</div>
                            </a>
                        </div>
                        <div class="region">
                            <a href="{{ url('regions/chaudiere_appalaches') }}">
                                <img class="imgRegion" src="../images/regions/chaudiere_appalaches.jpg" alt="image_chaudiere_appalaches">
                                <div class="texteRegion">12 - Chaudière-Appalaches</div>
                            </a>
                        </div>
                    </div>
                    <div class="regionsPar3">
                    <div class="region">
                            <a href="{{ url('regions/laval') }}">
                                <img class="imgRegion" src="../images/regions/laval.jpg" alt="image_laval">
                                <div class="texteRegion">13 - Laval</div>
                            </a>
                        </div>
                        <div class="region">
                            <a href="{{ url('regions/lanaudiere') }}">
                                <img class="imgRegion" src="../images/regions/lanaudiere.jpg" alt="image_lanaudiere">
                                <div class="texteRegion">14 - Lanaudière</div>
                            </a>
                        </div>
                        <div class="region">
                            <a href="{{ url('regions/laurentides') }}">
                                <img class="imgRegion" src="../images/regions/laurentides.jpg" alt="image_laurentides">
                                <div class="texteRegion">15 - Laurentides</div>
                            </a>
                        </div>
                    </div>
                    <div class="regionsPar2">
                    <div class="region">
                            <a href="{{ url('regions/monteregie') }}">
                                <img class="imgRegion" src="../images/regions/monteregie.jpg" alt="image_monteregie">
                                <div class="texteRegion">16 - Montérégie</div>
                            </a>
                        </div>
                        <div class="region">
                            <a href="{{ url('regions/centre_du_quebec') }}">
                                <img class="imgRegion" src="../images/regions/centre_du_quebec.jpg" alt="image_centre_du_quebec">
                                <div class="texteRegion">17 - Centre-du-Québec</div>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
   @include('includes.footer') 
    </body>
   
</html>
