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
        <li>Projet de loi (version 1)</li>
    </ol>
    <h1 class="titrePage">Projet de loi de convocation d'une Assemblée constituante citoyenne québécoise en vue d'établir une constitution pour le Québec.</h1>
    <div class="barreP"></div>
    <div class="titrePreambule">PRÉAMBULE</div>
    <p>La présente loi a pour objet d’instituer une Assemblée constituante citoyenne du Québec ayant pour mandat de rédiger la première Constitution de l’État québécois. La création de cette Assemblée constituante citoyenne est basée sur le droit universel et inaliénable des peuples à disposer d’eux-mêmes, le droit à l’autodétermination. L’Assemblée nationale du Québec soumettra à ratification la constitution résultant des travaux de l’Assemblée constituante lors d’un référendum exécutoire convoqué dans le cadre de la Loi sur la consultation populaire.</p><br>
    <div class="titreArticle">ARTICLE 1 : COMPOSITION</div>
    <p><b>1.1</b> L’Assemblée constituante citoyenne est composée de cent cinquante (150) personnes constituantes, dont soixante-quinze (75) femmes et soixante-quinze (75) hommes.</p><br>
    <ul>
        <li><p><b>1.1.1 </b>Les personnes constituantes se répartissent en deux délégations, une délégation nationale de quatre-vingt-dix-neuf (99) membres, dont cinquante femmes (50) et quarante-neuf (49) hommes, et une délégation régionale représentant les dix-sept (17) régions administratives du Québec, composée de cinquante et un (51) membres, dont vingt-cinq (25) femmes et vingt-six (26) hommes.</p></li><br>
        <li><p><b>1.1.2 </b>Chaque région administrative du Québec dispose de trois (3) membres dans la délégation régionale. Afin d’assurer la parité entre les hommes et les femmes, les membres de la délégation régionale se répartissent comme suit : régions avec une délégation composée d’un (1) homme et de deux (2) femmes, Saguenay–Lac-Saint-Jean, Mauricie, Outaouais, Abitibi-Témiscamingue, Nord-du-Québec, Chaudière-Appalaches, Laurentides, Montérégie; régions avec une délégation composée de deux (2) hommes et d'une (1) femme, Bas-Saint-Laurent, Capitale-Nationale, Estrie, Montréal, Côte-Nord, Gaspésie-Iles-de-la-Madeleine, Laval, Lanaudière, Centre-du-Québec.</p></li><br>
        <li><p><b>1.1.3 </b>Les membres de l’Assemblée constituante sont désignés lors d’une procédure de double tirage au sort. Dans un premier temps, le Directeur général des élections du Québec sélectionne, lors d’un tri aléatoire à partir de la liste électorale, cinq mille (5000) femmes et cinq mille (5000) hommes, pour un total de dix mille (10000) personnes. Le Directeur général des élections du Québec communique avec ces personnes pour leur demander si elles veulent poser, dans un délai d’un mois, leur candidature à l’Assemblée constituante citoyenne. Les personnes candidates doivent déclarer si elles préfèrent faire partie de la délégation nationale ou de la délégation de leur région administrative. Une fois le délai d’un mois écoulé, le Directeur général des élections du Québec sélectionne, lors d’un deuxième tri aléatoire parmi les candidatures reçues, les membres des délégations nationale et régionale. Le Directeur général des élections du Québec proclame alors les personnes ainsi choisies membres de l’Assemblée constituante.</p></li><br>
        <li><p><b>1.1.4 </b>Lors du deuxième tri aléatoire, le Directeur général des élections du Québec attribue les postes de la délégation nationale à partir des candidatures présentées pour cette délégation. Il tire ensuite au sort les candidatures régionales pour chacune des dix-sept (17) régions administratives du Québec et pourvoit les postes en fonction des critères de l’article 1.1.2. Au cas où une délégation, nationale ou régionale, n’atteindrait pas le nombre requis de candidatures, le Directeur général des élections du Québec peut combler la délégation déficitaire en utilisant des candidatures non retenues dans l’autre délégation.</p></li><br>
        <li><p><b>1.1.5 </b>Dans le cas où le nombre de candidatures déposées n’atteint pas les chiffres nécessaires à la nomination des membres des délégations nationale et régionale, le Directeur général des élections du Québec répète l’opération en fixant lui-même le nombre de personnes sélectionnées à partir de la liste électorale pour combler les délégations.</p></li><br>
    </ul>
    <p><b>1.2</b> L’Assemblée constituante est convoquée par une citoyenne ou un citoyen désigné par l’Assemblée nationale. Une fois réunie, l’Assemblée constituante se choisit une présidence en son sein et décide de sa procédure et de sa structure de travail.</p><br> 
    <div class="titreArticle">ARTICLE 2 : MANDAT</div>
    <p><b>2.1 </b>L'Assemblée constituante aura deux (2) ans pour proposer un projet de constitution québécoise que l'Assemblée nationale devra, dans les six (6) mois suivant son dépôt, soumettre au référendum.</p><br>
    <p><b>2.2 </b>Le texte de la constitution doit permettre :</p><br>
    <ul>
        <li>d’affirmer la prééminence de la souveraineté populaire;</li>
        <li>de définir les caractéristiques de l'État et de la citoyenneté québécoise ainsi que ses relations avec les Premières Nations et les minorités historiques;</li>
        <li>d’énumérer les valeurs et les choix de société fondamentaux de la société québécoise dans les divers secteurs de la vie et des ressources collectives;</li>
        <li>de définir les droits humains en matière d’environnement, dont le droit à un environnement sain, l’accès à l’eau potable, le respect des écosystèmes, l’utilisation durable du territoire et de ses ressources;</li>
        <li>de décrire l'organisation des pouvoirs législatif, exécutif et judiciaire et les relations entre eux;</li>
        <li>de préciser les moyens par lesquels les citoyens pourront participer en permanence et de façon contraignante aux décisions qui les concernent, ainsi que les pouvoirs des citoyens au plan territorial;</li>
        <li>d’établir les modalités et le calendrier de l’entrée en vigueur de ces dispositions, y compris, le cas échéant, de celles modifiant les lois ou l’ordre constitutionnel du Canada;</li>
        <li>de définir une procédure citoyenne d’amendement de la constitution pour les générations futures.</li>
    </ul><br>
    <div class="titreArticle">ARTICLE 3 : FONCTIONNEMENT</div>
    <p><b>3.1 </b> L'Assemblée constituante agit en toute liberté et indépendance face à l'Assemblée nationale du Québec, face aux partis politiques du Québec et du Canada, et face à toute espèce de groupe de pression.</p><br>
    <ul>
        <li><p><b>3.1.1 </b>Pour assurer son indépendance et son efficacité, l'Assemblée constituante s'appuie, pour son financement et son administration, sur les services du Directeur général des élections. Celui-ci devra fournir à l'Assemblée constituante les ressources financières, humaines et techniques appropriées pour que l'exercice constituant se fonde sur un travail éclairé des constituants et une large information et participation de l'ensemble des citoyens.</p></li>
        <li><p><b>3.1.2 </b>Dans l'exercice de ses travaux, l'Assemblée constituante peut avoir recours, lorsque la majorité de ses membres le décide, aux conseils de sages ou témoins experts. Cette consultation ne peut remettre en cause la souveraineté de l'Assemblée constituante citoyenne.</p></li>
    </ul><br>
    <p><b>3.2 </b>L'Assemblée constituante aura deux (2) ans pour accomplir son mandat. Elle devra compléter la formation de ses membres, la préparation de son calendrier de travail et la définition de ses règles de procédure à l’intérieur des six (6) premiers mois de ce mandat; elle procédera ensuite durant une (1) année complète à une consultation intensive de la population, dans chaque région, de façon à dégager l'expression de la volonté générale de la société québécoise; si sa réflexion lui semble achevée, elle pourra approuver à tout moment certains éléments de son projet de constitution; enfin, les derniers six (6) mois serviront à fixer le projet de texte de la constitution québécoise qui sera soumis à un référendum exécutoire conformément à la Loi sur la consultation populaire.</p><br>
    <p><b>3.3 </b>Dans le cadre de ses travaux, l’Assemblée constituante citoyenne tiendra des séries d’audiences publiques sur des thèmes de son choix afin de recueillir l’opinion de la population et forger des consensus sur les grands enjeux de la future constitution. Ces séries d'audiences devront se dérouler tant au niveau national que régional, au rythme minimum de trois (3) par an.</p><br>
    <p><b>3.4 </b>En cours de mandat, l'Assemblée constituante pourra, si elle le juge à propos, demander au gouvernement de déclencher un référendum comme moyen de consultation pour s'assurer d'une bonne compréhension de la volonté populaire.</p><br>
    <p><b>3.5 </b>Les délibérations se tiennent à l’extérieur de l’Assemblée nationale en raison des activités de lobby qui s’y déroulent. Les séances de l'Assemblée constituante seront télédiffusées sur les réseaux publics.</p><br>
    <p><b>3.6 </b>Les débats et interventions sur le processus constituant organisés par des groupes privés ou de la société civile devront être autorisés par l'Assemblée constituante et respecter des règles de transparence et d'équité de l'information édictées et surveillées par celle-ci.</p><br>
    <p><b>3.7 </b>Les constituants ne seront pas autorisés à présenter leur candidature dans les nouvelles institutions politiques lors des élections qui suivront l'adoption de la nouvelle constitution.</p><br>
    
    <div class="titreArticle">ARTICLE 4 : LANGUE DE TRAVAIL DE L'ASSEMBLÉE CONSTITUANTE</div>
    <p><b>4.1 </b>La langue de travail de l’Assemblée constituante citoyenne est la langue officielle du Québec. Les délibérations se déroulent dans cette langue et tous les documents soumis à son attention doivent être rédigés en français.</p><br>
    <p><b>4.2 </b>Chaque membre de l’Assemblée constituante citoyenne doit se déclarer capable de suivre les délibérations en français, sauf s’il appartient à une minorité linguistique telle que définie aux articles 4.3. et 4.4.</p><br>
    <p><b>4.3 </b>Tout membre de l’Assemblée constituante citoyenne dont le père ou la mère sont citoyens canadiens et ont reçu un enseignement primaire en anglais au Canada peut s’exprimer en langue anglaise et a droit, après préavis de sa part, à un service d’interprétation simultanée et de traduction des documents dans cette langue.</p><br>
    <p><b>4.4 </b>Tout membre de l’Assemblée constituante citoyenne membre des Premières Nations ou d’une communauté Inuite peut s’exprimer dans sa langue autochtone ou en langue anglaise et a droit, après préavis de sa part, à un service d’interprétation simultanée et de traduction des documents dans cette langue.</p><br>
    <p><b>4.5 </b>Les membres de l’Assemblée constituante citoyenne ont droit à un service d’interprétation simultanée dans la langue officielle du Québec à chaque séance où il est prévu que d’autres langues seront également utilisées.</p><br>
    <p><b>4.6 </b>Le cas échéant, l’Assemblée constituante citoyenne doit fournir un service d’interprétation à ses membres souffrant d’un handicap de communication reconnu.</p><br>

    <div class="titreArticle">ARTICLE 5 : ADMISSIBILITÉ DES MEMBRES DE LA CONSTITUANTE</div>
    <p><b>5.1 </b>La personne doit être citoyenne canadienne, résider au Québec (183 jours minimum par année), avoir 18 ans ou plus et être inscrite sur la liste électorale.</p><br>
    <p><b>5.2 </b>La personne ne peut avoir un casier judiciaire actif et doit déclarer toutes procédures juridiques formelles en cours contre elle, ainsi que toute situation de déjudiciarisation. Une personne ayant reçu son pardon avant le début des travaux de l'Assemblée constituante est éligible.</p><br>
    <p><b>5.3 </b>La personne ayant déjà siégé à l’Assemblée nationale, au Sénat ou à la Chambre des communes n’est pas admissible, ainsi que les lobbyistes. Sont considérées comme lobbyistes les personnes reconnues comme telles à l'article 3 de la Loi sur la transparence et l'éthique en matière de « lobbyisme ».</p><br>
    <p><b>5.4 </b>La personne visée par des accusations de corruption ou de malversations auprès d'un tribunal n'est pas admissible.</p><br>
    
    <div class="titreArticle">ARTICLE 6 : SERMENT</div>
    <p><b>6 </b>Les citoyens désignés pour siéger à l’Assemblée constituante prêtent serment au peuple souverain du Québec. « Je (nom et prénom) jure que je serai loyal(e) envers le peuple du Québec et que j’exercerai mes fonctions de membre de l'Assemblée constituante citoyenne avec honnêteté et justice dans le respect du peuple du Québec. » (Serment proposé dans le projet de Constitution de 1995)</p><br>

    <div class="titreArticle">ARTICLE 7 : PRISE DE DÉCISIONS</div>
    <p><b>7.1 </b>L'Assemblée constituante citoyenne doit s'efforcer, dans le déroulement de ses travaux, de forger des consensus nationaux. À défaut, chaque article inscrit au projet de constitution doit recueillir l'assentiment des deux tiers (2/3) des membres de l'Assemblée constituante. En cas d'impasse, l'Assemblée constituante citoyenne demande un référendum national tel que stipulé dans l'article 3.4.</p><br>
    <p><b>7.2 </b>L'Assemblée constituante doit s'assurer que tous les documents validés relatifs à ses travaux sont disponibles en tout temps.</p><br>

    <div class="titreArticle">ARTICLE 8 : DROITS ET ALLOCATIONS DES PERSONNES CONSTITUANTES</div>
    <p><b>8.1 </b>Tout membre de l’Assemblée constituante citoyenne a droit à la même protection d'emploi que les candidats jurés convoqués à un procès. Lors de sa réintégration au travail, il bénéficie des mêmes progressions dans l’échelle salariale, ancienneté et bénéfices marginaux que s’il était resté à son emploi pendant la durée des travaux de l’Assemblée constituante. Si la personne bénéficie d’un plan de pension ou d’épargne de l’employeur, le ministère des Finances du Québec assumera, le cas échéant, les contributions de l’employeur pendant la durée de ses fonctions de membre de l’Assemblée constituante.</p><br>
    <p><b>8.2 </b>Tout membre de l’Assemblée constituante citoyenne a droit à une indemnité annuelle, à une allocation annuelle de dépenses et à des allocations de déplacement équivalentes à celles d’un député de l’Assemblée nationale en vertu de la Loi sur les conditions de travail et le régime de retraite des membres de l’Assemblée nationale. (note : allocation de base 95 704$ au 1er avril 2018,allocation de dépenses 17 304$, allocation de déplacement 8 200$ à 20 500$ selon la région). Les membres qui résident dans les circonscriptions électorales de Berthier, de Duplessis et d’Ungava ont droit à la même allocation additionnelle que les membres de l’Assemblée nationale de ces circonscriptions. (note : respectivement 1 500$, 15 300$ et 24 200$)</p><br>
    <p><b>8.3 </b>Tout membre de l’Assemblée constituante citoyenne a droit à un remboursement de ses frais de déplacement et de logement selon les mêmes règles et les mêmes barèmes que les membres de l’Assemblée nationale.</p><br>
    <p><b>8.4 </b>Les membres de l’Assemblée constituante citoyenne choisissent trois (3) membres en leur sein pour constituer un Comité des présences. Ce comité a pour mandat d’enregistrer les présences lors des travaux de l’Assemblée, d’intervenir en cas d’absences injustifiées et de déclencher le processus de comblement des sièges éventuellement vacants.</p><br>
    <p><b>8.5 </b> Les membres de l’Assemblée constituante qui s’absentent des travaux de l’Assemblée doivent signaler leur absence au Comité des présences et en déclarer la raison.</p><br>
    <p><b>8.6 </b>Lorsque le Comité des présences constate l’absence d’un membre pendant plus de cinq (5) jours et estime que cette absence n’est pas motivée par des raisons justes et suffisantes, il soumet un rapport à l’Assemblée constituante avec des recommandations de sanctions. Ces sanctions peuvent inclure une suspension des allocations prévues aux articles 8.2 et 8.3 pendant une période déterminée ou l’expulsion définitive du membre des rangs de l’Assemblée. Pour être applicables, ces sanctions doivent être approuvées par une majorité des deux tiers (2/3) des membres de l’Assemblée constituante. La décision de l’Assemblée est alors définitive et sans appel.</p><br>
    <p><b>8.7 </b>Lorsque le Comité des présences constate qu’un siège de l’Assemblée constituante citoyenne est devenu vacant du fait du décès, de la démission, de l’expulsion ou d’une incapacité permanente de la personne qui l’occupait, il doit prévenir dans les huit (8) jours le Directeur général des élections du Québec de la vacance.</p><br>
    <p><b>8.8 </b>Sur réception de l’avis de vacance d’un siège que lui a fait parvenir le Comité des présences, le Directeur général des élections du Québec choisit par tirage au sort un membre remplaçant parmi les personnes dont la candidature n’a pas été retenue dans le cadre de l’article 1 et qui confirment leur candidature pour le siège vacant. Le nouveau membre de l’Assemblée constituante citoyenne doit être du sexe de la personne à remplacer et, dans le cas d’une vacance dans la délégation régionale, de la même région administrative. Le Directeur général des élections doit s’efforcer de combler le siège vacant dans le mois suivant la réception de l’avis de vacance.</p><br>

    <div class="titreArticle">ARTICLE. 9 : RELATIONS AVEC LES PEUPLES ET NATIONS AUTOCHTONES</div>
    <p><b>9.1 </b>En conformité avec la Déclaration des Nations Unies sur les droits des peuples autochtones, l’Assemblée constituante citoyenne du Québec doit respecter, dans son projet de constitution, les droits fondamentaux des peuples autochtones du Québec, notamment leur droit inhérent à l’autodétermination et à l’autonomie gouvernementale ainsi que leurs droits territoriaux, issus ou non de traités.</p><br>
    <p><b>9.2 </b>Une fois la Constitution du Québec ratifiée par voie de référendum, le gouvernement du Québec doit engager de bonne foi des négociations de nation à nations avec les peuples autochtones afin de préciser leur place dans l’ordre constitutionnel québécois.</p><br>
    <p><b>9.3 </b>Les nations et communautés autochtones qui le désirent peuvent définir leur propre processus constituant.</p><br>


    <div class="unissons">Unissons nos voix pour exiger la convocation d'une Assemblée constituante citoyenne!</div><br>
    <ul>
        <li><a href="{{ url('pages/engagement') }}">Engagement solonnel</a></li>
        <li><a href="{{ url('pages/listePCC') }}">Liste des personnes candidates par circonscription</a></li>
        <li><a href="{{ url('pages/appel') }}">L'appel</a></li>
        <li><a href="{{ url('pages/promouvoir') }}">Imprimez nos outils de promotion maintenant</a></li>
    </ul>
</div>
</div>    

@include('includes.footer')
</body>
</html>