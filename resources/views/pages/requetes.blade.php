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
        <li>Requêtes et recommandations</li>
    </ol>
    <h1 class="titrePage">Requêtes et recommandations</h1>
    <div class="barreP"></div>
    <p>L’Alliance pour une constituante citoyenne du Québec invite les membres de l’Assemblée nationale à adopter une loi créant une Assemblée constituante citoyenne chargée de rédiger la première constitution de l’histoire du Québec. Une fois ratifiée par voie de référendum, cette constitution deviendra exécutoire. L’Assemblée constituante, non partisane, doit être libre dans ses délibérations et ses conclusions.</p><br>
    <div class="titreArticle">Une Assemblée constituante citoyenne québécoise, pourquoi ?</div>
    <p>Fondamentalement, parce que c’est le peuple qui est le détenteur de la souveraineté nationale. La mise en place de cette Assemblée vise d’abord et avant tout à doter l’État québécois de sa première constitution démocratique afin de rassembler l’ensemble de la population autour d’un nouveau contrat social auquel elle accepte de se lier.</p><br>
    <p>De plus, la population n’a jamais participé ni n’a été consultée quant aux Lois fondamentales qui lui ont été imposées dans le temps. Depuis 1982, tous nos gouvernements refusent de signer la constitution canadienne. Bien que tous les partis politiques représentés à l’Assemblée nationale aient, dans leurs programmes, des demandes de changements majeurs aux relations entre le Canada et le Québec, aucun n’a réussi à faire changer quoi que ce soit à ce régime imposé. En donnant à une Assemblée citoyenne le mandat de rédiger notre première constitution, les député·e·s permettraient au Québec de sortir de l’impasse et de forger des consensus nationaux par-delà les allégeances partisanes.</p><br>
    <p>Même si nous avons travaillé sur un projet de loi de convocation que nous révisons en ce moment, notre association, l'ACCQ, propose ici l'énumération de principes qui devraient, selon nous, assurer que la rédaction de cette Loi fondamentale se réalisera dans un contexte vraiment démocratique.</p><br>

    <div class="titreArticle">1) LE MANDAT DE LA CONSTITUANTE</div>
    <p>Le texte de la constitution devrait permettre :</p><br>
    <ol>
        <li>d’affirmer la prééminence de la souveraineté populaire;</li>
        <li>de définir les caractéristiques de l’État et de la citoyenneté québécoise ainsi que ses relations avec les Premières Nations et la minorité historique;</li>
        <li>d’énumérer les valeurs et les choix de société fondamentaux de la société québécoise dans les divers secteurs de la vie et des ressources collectives;</li>
        <li>de définir les droits humains en matière d’environnement, dont le droit à un environnement sain, l’accès à l’eau potable, le respect des écosystèmes, l’utilisation durable du territoire et de ses ressources;</li>
        <li>de décrire l’organisation des pouvoirs législatif, exécutif et judiciaire et les relations entre eux;</li>
        <li>de préciser les moyens par lesquels les citoyens pourront participer en permanence et de façon contraignante aux décisions qui les concernent, ainsi que les pouvoirs des citoyens au plan territorial;</li>
        <li>d’établir les modalités et le calendrier de l’entrée en vigueur de ces dispositions, y compris, le cas échéant, de celles modifiant les lois provinciales et fédérales;</li>
        <li>de définir une procédure citoyenne d’amendement de la constitution pour les générations futures.</li>
    </ol><br>

    <div class="titreArticle">2) LE CALENDRIER</div>
    <p>Nous suggérons un mandat de deux (2) ans pour rédiger le projet de constitution, suivi d’une période ne dépassant pas six (6) mois pour tenir un référendum exécutoire pour ratification.</p><br>

    <div class="titreArticle">3) LA COMPOSITION DE L’ASSEMBLÉE CONSTITUANTE CITOYENNE</div>
    <ol type="a">
        <li>
            <strong>Sélection par tirage au sort</strong>
            <p>Élection ou tirage au sort des personnes constituantes ? Nous pensons qu’un processus ressemblant à une élection générale nuirait à la recherche de consensus citoyens; les personnes élues auraient trop tendance à prendre position en fonction des lignes de parti. De plus, un processus partisan élimine dans les faits les personnes issues des métiers les plus fréquents. C’est-à-dire, pour les hommes : camionneurs, employés du commerce de détail, gérants de magasin, menuisiers-charpentiers, cuisiniers. Et pour les femmes : secrétaires, vendeuses, caissières, éducatrices, infirmières.</p><br>
            <p>Pour éviter que la Constituante ne représente avant tout que les classes supérieures de la société, l’ACCQ préconise la nomination des personnes constituantes par tirage au sort, comme cela s’est fait pour un des meilleurs exemples internationaux, la rédaction de la constitution de l’Islande en 2011.</p>
        </li><br>
        <li>
            <strong>Parité homme-femme</strong>
            <p>Les mécanismes prévus par le texte de loi devraient garantir la parité homme-femme.</p>
        </li><br>
        <li>
            <strong>Représentation régionale</strong>
            <p>Un tirage au sort universel sans critère régional conduirait à un déséquilibre majeur du fait de la répartition géographique de la population québécoise. En effet, à elles seules, les régions administratives de Montréal, de Laval et de la Montérégie représentent 47,8 % de la population totale. Avec 0,5 % de la population dans le cas du Nord-du-Québec ou 1,1 % chacune dans le cas de la Gaspésie-Iles-de-la-Madeleine et de la Côte-Nord, les régions éloignées n’auraient pratiquement aucune chance d’accéder à la Constituante. L’ACCQ propose donc une pondération régionale selon le principe suivant : en gros, les deux tiers (2/3) des personnes constituantes seraient choisis par tirage au sort à l’échelle de toute la province et le dernier tiers, choisi également par tirage au sort, serait réservé à parts égales à chacune des dix-sept (17) régions administratives du Québec.</p>
        </li><br>
        <li>
            <strong>Nombre de personnes constituantes</strong>
            <p>Pour tenir compte de la diversité de la société québécoise sans tomber dans des effectifs pléthoriques, il nous semble que le chiffre magique devrait être de l’ordre de quelques centaines plutôt que de dizaines de personnes. Pour assurer la parité homme-femme, il faudrait que les délégations de chacune des 17 régions administratives aient un nombre pair de représentants.</p><br>
            <strong>Hypothèses :</strong><br>
            <ul type="circle">
                <li>à 2 représentants par région, cela ferait une délégation régionale de 34 personnes et une délégation nationale de 68, pour un total de 102 personnes;</li>
                <li>à 4 représentants par région, cela ferait une Assemblée constituante de 204 membres (68 pour les régions, 136 pour la délégation nationale).</li>
            </ul>
        </li><br>
        <li>
            <strong>La sélection des personnes constituantes par double tirage au sort</strong>
            <p>Nous proposons que l’Assemblée nationale confie le mandat de la sélection des personnes constituantes au Directeur général des élections du Québec avec un budget adéquat. Le DGEQ procéderait à deux (2) tirages au sort. Le premier servirait à lancer un appel à candidatures par le biais d’un tirage au sort aléatoire à partir de la liste électorale. Il lui faudrait opter pour un échantillon suffisant, par exemple 5000 hommes et 5000 femmes.</p><br>
            <p>Les personnes intéressées pourront alors signifier, dans une réponse au DGEQ, leur candidature avec leur préférence pour la délégation nationale ou pour leur délégation régionale. Dans un deuxième temps, le DGEQ ferait un deuxième tirage au sort à partir des candidatures reçues pour pourvoir le nombre de postes masculins et féminins prévus pour la délégation nationale et pour chacune des dix-sept (17) régions administratives.</p>
        </li><br>
        <li>
            <strong>Critères d’admissibilité des membres de la Constituante</strong>
            <p>Toute personne candidate à la Constituante devrait être citoyenne canadienne, résider au Québec (critère actuel : 183 jours minimum par année), avoir 18 ans ou plus et être inscrite sur la liste électorale. Seraient non admissibles les personnes non pardonnées possédant un casier judiciaire actif. Les personnes constituantes devraient prêter serment au peuple souverain du Québec. « Je (nom et prénom) jure que je serai loyal(e) envers le peuple du Québec et que j’exercerai mes fonctions de membre de l’Assemblée constituante citoyenne avec honnêteté et justice dans le respect du peuple du Québec. »</p>
        </li><br>
        <li>
            <strong>Lutte à l’absentéisme — Sièges vacants</strong>
            <p>Être membre de l’Assemblée constituante citoyenne est une activité à plein temps. La loi doit donc prévoir des procédures contre les personnes qui abuseraient du système. Nous suggérons qu’un comité des présences soit institué et que, sous réserve de ratification de ses décisions par l’Assemblée constituante, ce comité ait le pouvoir de suspendre certains paiements et, dans les cas les plus graves, d’ordonner l’expulsion définitive de la personne.</p><br>
            <p>Un mécanisme devrait également être prévu pour le cas de sièges devenus vacants (expulsion, démission, décès, incapacité permanente) pour que le DGEQ puisse rapidement nommer une personne remplaçante du même sexe et, le cas échéant, de la même région.</p>
        </li><br>
    </ol>

    <div class="titreArticle">4) LE FONCTIONNEMENT DE L’ASSEMBLÉE CONSTITUANTE CITOYENNE</div>
    <ol type="a">
        <li>
            <strong>Procédures — experts</strong>
            <p>Il nous semble essentiel que l’Assemblée constituante reste maîtresse de ses propres procédures et de sa structure de travail, et ce, afin d’assurer son indépendance. Aussi, le rôle de l’Assemblée nationale devrait se limiter à la date de convocation de cette assemblée et à la nomination d’une présidence provisoire pour les premières séances. L’Assemblée constituante citoyenne devrait par la suite se choisir une présidence et préciser ses procédures. Le gouvernement pourrait mettre à la disposition de la Constituante des avis d’experts pour faciliter ses travaux.</p><br>
            <p>Dans l’exercice de ses travaux, l’Assemblée constituante pourrait avoir recours, lorsque la majorité de ses membres le décide, aux conseils de sages ou de témoins experts. Cette consultation ne pourrait pas remettre en cause la souveraineté de l’Assemblée constituante citoyenne.</p>
        </li><br>
        <li>
            <strong>Participation citoyenne</strong>
            <p>L’Assemblée constituante citoyenne devrait tenir des séries d’audiences publiques sur des thèmes de son choix afin de recueillir l’opinion de la population et forger des consensus sur les grands enjeux de la future constitution. Ces séries d’audiences se dérouleraient tant au niveau national que régional. Un rythme minimum de trois (3) séries d’audiences par an nous semble un objectif raisonnable.</p><br>
            <p>Tous les documents validés relatifs aux travaux de la Constituante devraient être disponibles en tout temps.</p>
        </li><br>
        <li>
            <strong>Majorité décisionnelle</strong>
            <p>Une constitution se doit de jouir d’un taux d’approbation incontestable. L’Assemblée constituante citoyenne devrait donc fonctionner le plus possible sur la base du consensus. Toutefois, il est probable que sur certains sujets, il n’y ait pas unanimité. Il ne nous semble pas suffisant que les différends soient tranchés à la majorité simple.</p><br>
            <p>C’est pourquoi nous proposons que chaque article inscrit au projet de constitution recueille l’assentiment des deux tiers (2/3) des membres de l’Assemblée constituante. En cas d’impasse en cours de mandat, l’Assemblée constituante citoyenne demanderait au gouvernement d’organiser un référendum national pour trancher les articles litigieux.</p>
        </li><br>
        <li>
            <strong>Finances</strong>
            <p>La démocratie a un prix. Le projet de loi devrait donc prévoir un budget adéquat pour le fonctionnement de la Constituante. L’Assemblée constituante citoyenne serait responsable de l’utilisation des fonds devant l’Assemblée nationale et ses dépenses devraient être contrôlées périodiquement par le Vérificateur général du Québec.</p>
        </li><br>
        <li>
            <strong>Langue de travail</strong>
            <p>La langue de travail de l’Assemblée constituante citoyenne doit être la langue officielle du Québec. Les délibérations se déroulent dans cette langue et tous les documents soumis à son attention doivent être rédigés en français. Ceci dit, nous ne pensons pas que le projet de loi créant la Constituante doive innover par rapport au statu quo constitutionnel canadien actuel en matière linguistique, car ce serait préjuger des conclusions de ses membres avant même qu’ils ne siègent. C’est pourquoi nous suggérons que les procédures de la Constituante respectent les droits des minorités tels que définis par les lois et la jurisprudence. Cela veut dire que tout membre de l’Assemblée constituante dont le père ou la mère serait citoyen canadien et aurait reçu un enseignement primaire en anglais au Canada pourrait s’exprimer en langue anglaise et aurait droit, après préavis de sa part, à un service d’interprétation simultanée et de traduction des documents dans cette langue. Également, tout membre de l’Assemblée constituante citoyenne membre des Premières Nations ou d’une communauté inuite pourrait s’exprimer dans sa langue autochtone ou en langue anglaise et aurait droit, après préavis de sa part, à un service d’interprétation simultanée et de traduction des documents dans cette langue. En ce qui concerne la traduction en langue autochtone, il est peu probable que la demande soit importante en dehors de certaines déclarations solennelles de principe, les unilingues ne connaissant ni le français ni l’anglais étant peu nombreux dans ces communautés. Les membres de l’Assemblée constituante citoyenne auraient bien évidemment droit à un service d’interprétation simultanée dans la langue officielle du Québec à chaque séance où il serait prévu que d’autres langues soient également utilisées. En outre, l’Assemblée constituante citoyenne devrait fournir un service d’interprétation à ses membres souffrant d’un handicap de communication reconnu.</p>
        </li><br>
    </ol>

    <div class="titreArticle">5) COMPENSATION FINANCIÈRE POUR LES PERSONNES CONSTITUANTES</div>
    <p>Trois principes nous semblent devoir guider cette question :</p><br>
    <ol>
        <li>Égalité entre les personnes constituantes, (un) principe déjà en vigueur pour les membres de l’Assemblée nationale. Ainsi, un médecin spécialiste ne devrait pas être compensé à un tarif dix ou quinze fois supérieur à celui d’une caissière de supermarché sous prétexte que ses revenus personnels sont plus importants.</li>
        <li>Niveau de compensation suffisamment élevé pour permettre à des citoyens à revenu modeste de devenir constituants tout en continuant à pouvoir faire face à leurs responsabilités financières.</li>
        <li>Garantie d’une réinsertion professionnelle sans pénalité à la fin du mandat de la Constituante.</li>
    </ol><br>
    <strong>Explications au sujet de la garantie de réinsertion à l’emploi</strong><br>
    <p>Les personnes constituantes ne devraient pas être pénalisées dans la poursuite de leur carrière du fait de leur dévouement au bien commun pendant la durée de leur mandat. Nous pensons que les personnes constituantes devraient jouir des mêmes protections de base que les jurés, mais avec certaines améliorations. Nous recommandons que lors de sa réintégration au travail, la personne bénéficie des mêmes progressions dans l’échelle salariale, ancienneté et avantages marginaux, que si elle était restée à son emploi pendant la durée des travaux de l’Assemblée constituante. Si la personne bénéficie d’un plan de pension ou d’épargne de l’employeur, l’État devrait, le cas échéant, assumer les contributions de l’employeur pendant la durée de ses fonctions de membre de l’Assemblée constituante.</p><br>

    <div class="titreArticle">6) LES DROITS DES PEUPLES AUTOCHTONES</div>
    <p>Des Inuits et des membres des Premières Nations pourront se porter candidats à l’Assemblée constituante citoyenne à titre individuel, mais cela ne résout pas l’ensemble de la question de la participation des peuples originaires au processus. En effet, ces populations jouissent de droits collectifs reconnus, tant au niveau international que national, droit qui doivent être respectés. C’est pourquoi nous recommandons qu’en conformité avec la Déclaration des Nations Unies sur les droits des peuples autochtones, l’Assemblée constituante citoyenne du Québec soit tenue de respecter, dans son projet de constitution, les droits fondamentaux des peuples autochtones du Québec, notamment leur droit inhérent à l’autodétermination et à l’autonomie gouvernementale ainsi que leurs droits territoriaux, issus ou non de traités.</p><br>
    <p>Ces droits impliquent qu’une fois la Constitution du Québec ratifiée par voie de référendum, le gouvernement du Québec devra engager de bonne foi des négociations de nation à nations avec les peuples autochtones afin de préciser leur place dans l’ordre constitutionnel québécois.</p><br>
    <p>Enfin, les nations et communautés autochtones qui le désireraient devraient pouvoir définir leur propre processus constituant.</p><br>
    <p>En conclusion, nous espérons que les membres de l'Assemblée nationale recevront nos suggestions positivement. Nous demeurons à votre disposition pour préciser les détails de notre soumission et pour participer, si vous le jugez bon, à des échanges sur le contenu précis d'un futur projet de loi créant l'Assemblée constituante citoyenne du Québec.</p><br>
    <p>Nous vous remercions de votre intérêt.</p>


</div>
</div>
@include('includes.footer')
</body>
</html>