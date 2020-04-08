<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
   
<body>
@include('includes.header')

@include('includes.banniere')

<div class="containerAG">
<div class="AG">
    <div class="titreAG">Invitation à l'Assemblée générale de fondation de l'ACCQ, le 30 novembre 2019, à Saint-Hyacinthe</div>
    <div class="texteAG">
        <p>Comme vous le savez certainement, l’Alliance pour une constituante citoyenne du Québec a été constituée auprès du Registraire des entreprises du Québec le 5 février 2016 en tant qu’organisme à but non lucratif (OBNL).</p><br>
        <p>Vous êtes dès maintenant invité.e à l'<a href="../pdf/invitation_fondation_accq.pdf">Assemblée générale de fondation</a>, visant à formaliser notre organisation. Tous les signataires du <a href="{{ url('pages/manifeste') }}">manifeste</a> sont invités à devenir membres en règle de façon à pouvoir participer, lors de cette assemblée, à l'élection de notre conseil d'administration.</p><br>
        <p>Nos bénévoles ont rédigé les <a href="{{ url('pages/statuts_reglements') }}">statuts et règlements</a> de l'OBNL que nous vous invitons à lire puisqu'ils devront être entérinés lors de cette rencontre.</p><br>
        <p>Au plaisir de nous voir tous rassemblés et de nous donner les moyens d'accomplir la <a href="{{ url('pages/mission') }}">mission</a> que se donne l'ACCQ.</p>
    </div>
   
        <a class="accederPDFAG" href="../pdf/invitation_fondation_accq.pdf">Consulter le PDF pour de plus amples informations</a>
    
</div>
</div>

@include('includes.footer')
</body>
</html>