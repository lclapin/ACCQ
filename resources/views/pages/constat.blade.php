<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
   
<body>
@include('includes.header')

@include('includes.banniere')

<div class="containerConstat">
<div class="constat">
    <div class="titreConstat">Constat</div>
    <div class="barreCit">
    <div class="barre"></div>
    <div class="citation">« Un État constitué par et pour le peuple est un outil favorisant l'épanouissement individuel et collectif »</div>
    </div>
    <p>Ce regroupement de Québécois et de Québécoises est né d'un double constat :</p><br>
    <ol>
        <li>Les principes de notre démocratie représentative permettent le contrôle par les partis politiques et les puissances économiques qui détournent le pouvoir à leur profit, à tel point que la population n'a pratiquement aucune prise sur les décisions qui la concernent. Cet état de fait met en péril notre avenir et l'avenir du monde.</li>
        <li>Afin de surmonter notre impuissance, nous croyons qu'il est essentiel de nous rassembler et d'instituer un pouvoir populaire. Il appartient au peuple d'exercer sa souveraineté par son Assemblée constituante citoyenne. De ce fait, nous exigeons la convocation d'une Constituante citoyenne, non partisane, libre dans ses délibérations, qui est, selon nous, le meilleur moyen pacifique d'incarner la souveraineté du peuple.</li>
    </ol>
    <br>
    <p>Considérant que la population québécoise ne s’est jamais prononcée sur sa Loi fondamentale, NOUS, le peuple, sommes en droit de définir la façon dont nous voulons nous gouverner et dicter les lignes directrices que doit suivre l’État.</p><br>
    <p>Pour devenir Constituant.e.s avec NOUS, rejoignez maintenant votre <a href="{{ route('listeOR') }}">organisation régionale</a> (ACRQ).</p>
</div>
</div>

@include('includes.footer')
</body>
</html>