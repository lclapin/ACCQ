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
                <a href="{{ route('sondage') }}">Répondre au sondage maintenant</a>
            </div>
        </div>
        <div class="constituons">
            <a href="{{ route('constituons') }}">
                <img class="imgConstituons" src="../images/imgConstituons.jpg" alt="image_constituons">
            </a>
        </div>
    </div>
        <div class="deuxiemeBloc">
            <div class="ateliers">
                <a href="{{ route('ateliers') }}">
                    <img class="imgAteliers" src="../images/ateliers.jpg" alt="image_rencontres">
                </a>
            </div>
            <div class="rencontres">
                <a href="{{ route('rencontres') }}">
                    <img class="imgRencontres" src="../images/rencontres.jpg" alt="image_rencontres">
                </a>
            </div>
        </div>
    </div>
   @include('includes.footer') 
    </body>
   
</html>
