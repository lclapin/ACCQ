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
        <li>Organigramme</li>
    </ol>
    <h1 class="titrePage">Organigramme</h1>
    <div class="barreP"></div>
    <div class="OL">
        <div class="org">
            <img class="imgSOG" src="../images/structure_organisationnelle_globale.jpg" alt="imgSOG">
            <p>L’Alliance pour une constituante citoyenne du Québec vous remercie de prendre le temps nécessaire pour bien comprendre les fondements de notre organisation. Nous tenons à préciser que la structure de notre organisation est horizontale.</p><br>
            <p>Bien que tous les postes occupés par les constituant.e.s nécessitent des talents et des compétences particulières, aucun des responsables n’a autorité sur les autres. Les constituant.e.s impliqués sont des personnes de confiance qui travaillent avec enthousiasme et détermination à la poursuite de notre objectif commun, soit :</p><br>
            <div class="libre">
                <div class="barreO"></div><div class="citO">La convocation d’une Assemblée constituante, totalement libre dans ses délibérations!</div>
            </div>
            <p>Pour ce faire, seul un nombre imposant de Québécois et Québécoises comprenant bien le sens de notre démarche permettra de changer cette culture de démocratie représentative qui est, selon nous, la source de nombreux abus de pouvoir que nous subissons collectivement.</p><br>
            <p>Voilà pourquoi nous nous engageons à tout mettre en œuvre pour mobiliser, le plus rapidement possible, un minimum de 1000 personnes par circonscription comprenant bien le sens d’une démarche constituante libre dans ses délibérations.</p><br>
            <div class="volonte">
                <div class="barreO"></div><div class="citO">Pour le moment, nous faisons le pari que nos représentants élus respecteront notre volonté.</div>
            </div>
            <div id="SR" class="titreStructures">Nos structures régionales</div>
            <img class="imgACRQ" src="../images/acrq.jpg" alt="imgACRQ">
            <p>Les <a href="{{ url('pages/listeOR') }}">ACRQ</a> sont nos structures régionales. Chacune d’entre elles est établie en fonction des régions administratives du Québec. Notre prochain objectif est de mettre sur pied, le plus rapidement possible, des structures locales dans chacune de nos ACRQ. Des réunions régionales se tiennent actuellement dans plusieurs ACRQ. Merci d’y assister!</p>
            <div id="#NC" class="sousTitreO">NOUS, constituant.e.s</div>
            <div class="ligneO"></div>
            <div class="sousTitreNous">Qui sommes-nous?</div>
            <img class="imgNous" src="../images/nous.jpg" alt="imgNous">
            <p>« Nous, Constituant.e.s, nous nous engageons à promouvoir, à préparer et à exiger la convocation d'une Assemblée constituante non partisane, libre dans ses délibérations, et à tout mettre en œuvre pour obtenir que soit respectée la volonté du peuple. »</p><br>
            <p>Tel est l’objectif des Québécois et des Québécoises qui s’engagent avec nous. Affirmer être Constituant.e.s et vouloir exercer ce pouvoir ne nécessite aucun prérequis ou compétence particulière. Exercer son pouvoir constituant est pour nous un geste citoyen responsable. Ce geste permet de comprendre le mode de fonctionnement d’une Assemblée constituante vraiment démocratique.</p><br>
            <p>La maitrise de ce processus constituant permettra de mieux informer nos réseaux respectifs et mènera à la rédaction d’une première constitution vraiment démocratique une fois que l’Assemblée constituante aura été convoquée. Il n’en tient qu’à NOUS pour qu’elle le soit.</p><br>
            <p>Tout être humain partageant un territoire et désirant participer à définir son organisation sociale et la façon dont il entend se gouverner est, selon nous, en droit de le faire. L’ouverture d’esprit, l’écoute et le respect des autres sont des ingrédients essentiels pour ceux et celles qui aspirent à occuper des postes de responsabilité.</p><br>
            <div class="ensemble">
                <div class="barreO"></div><div class="citO">ENSEMBLE, tout est possible!</div>
            </div>
            <div class="SM"><a href="{{ url('pages/manifeste') }}">Merci de signer notre manifeste</a></div>
            <div id="NRR" class="sousTitreO">Nos responsables régionaux</div>
            <div class="ligneO"></div>
            <img class="imgRR" src="../images/responsables_regionaux.jpg" alt="imgRR">
            <div id="RAM" class="sousTitreRR">Responsable de l’accueil et de la mobilisation (RAM)</div>
            <div class="ligneO"></div>
            <p>Le rôle de ce responsable est d'une très grande importance afin de permettre aux nouveaux constituant.e.s de bien comprendre le sens de notre démarche et de prendre connaissance le plus rapidement possible des développements passés et en cours. Les tâches suivantes incombent au responsable de l'accueil et de la mobilisation des membres (RAM) :</p><br>
            <ul>
                <li>Accueille sur la page Facebook de son ACRQ les personnes intéressées à nous rejoindre et les informe dans les plus brefs délais possible des activités et des développements dans sa région; avant d'ajouter un membre, s'assure que la personne est vraiment de sa région, sinon, l'invite à se joindre son ACRQ. Il prend aussi le temps de jeter un coup d'œil au profil du nouveau membre;</li>
                <li>Contacte d'abord la personne par messagerie Facebook pour lui souhaiter la bienvenue et lui demander si elle accepte de s'entretenir au téléphone avec lui, les communications de vive voix étant fortement recommandées pour établir un lien personnalisé;</li>
                <li>S'assure que le nouveau ou la nouvelle a pris connaissance du manifeste et des énoncés de mission et sinon, l'encourage à le faire et à signer notre manifeste (ne pas oublier de mentionner que nous prendrons soin de respecter la confidentialité des informations personnelles); </li>
                <li>Encourage le nouveau membre à visionner les vidéos disponibles dans la médiathèque de notre site Internet. Trois vidéos sont fortement recommandées : "Sommes-nous en démocratie?", "Vers la vraie démocratie" et "Chercher la cause des causes" d'Étienne Chouard; LIENS URL</li>
                <li>Invite les constituant.e.s à utiliser les outils promotionnels mis à sa disposition pour nous faire connaître;</li>
                <li>Recrute des constituant.e.s pour nous accompagner et faire de la mobilisation;</li>
                <li>S’acquitte des différents mandats qui lui sont confiés ou dont il a pris la responsabilité; </li>
                <li>S’assure de l’exactitude et de la conformité de tous les rapports inhérents aux différents mandats dont il a la responsabilité et présente ceux-ci au Comité organisateur national dans les délais demandés; </li>
                <li>Surveille les conflits d’intérêts et s’abstient de se trouver dans cette situation;</li>
                <li>Accomplit toute autre tâche jugée pertinente.</li>
            </ul>
            <div id="RSR" class="sousTitreRR">Responsable des services en région (RSR)</div>
            <div class="ligneO"></div>
            <p>Le responsable des services en région est le représentant officiel de sa région et il est responsable de la surveillance générale des affaires en cours de son ACRQ. Il est le lien de sa région avec les autres régions, lors des Tables nationales. Il a également la responsabilité de prendre les mesures nécessaires pour assurer le bon fonctionnement des rencontres régionales de sa région. Les tâches suivantes incombent au RSR et s’ajoutent à ses tâches de responsabilité :</p><br>
            <ul>
                <li>En collaboration avec les autres responsables de sa région, établit les objectifs et les priorités visant à satisfaire les besoins de son ACRQ; </li>
                <li>Fixe, conjointement avec les autres responsables, le calendrier des réunions et des séances informatives dans son ACRQ; </li>
                <li>Procède à tous les préparatifs nécessaires pour la tenue de toute rencontre (réservation de salle, équipements, etc.); </li>
                <li>Coordonne l’ensemble des activités de son ACRQ et s’assure du suivi des dossiers; </li>
                <li>Assure le bon fonctionnement de son ACRQ en suivant les politiques générales élaborées; </li>
                <li>Retransmet les propositions entérinées par les autres régions aux membres de son ACRQ, lors des assemblées régionales;</li>
                <li>S’acquitte des différents mandats qui lui sont confiés ou dont il a pris la responsabilité; </li>
                <li>S’assure de l’exactitude et de la conformité de tous les rapports inhérents aux différents mandats dont il a la responsabilité et présente ceux-ci au Comité organisateur national dans les délais prescrits; </li>
                <li>Surveille les conflits d’intérêts et s’abstient de se trouver dans cette situation.</li>
                <li>Accomplit toute autre tâche jugée pertinente.</li>
            </ul>
            <div id="SE" class="sousTitreRR">Secrétaire</div>
            <div class="ligneO"></div>
            <p>Les tâches suivantes incombent au secrétaire et s’ajoutent à ses tâches de responsabilité :</p><br>
            <ul>
                <li>De concert avec les autres responsables régionaux, détermine et prépare l’ordre du jour des réunions;</li>
                <li>Convoque les rencontres; </li>
                <li>Rédige les procès-verbaux de toutes les réunions;</li>
                <li>S’assure de l’exactitude des procès-verbaux des réunions et les achemine au Comité de secrétariat national;</li>
                <li>Conserve les procès-verbaux et les dossiers de toutes les réunions et en envoie une copie au national; </li>
                <li>Assume la responsabilité du contenu, de la mise à jour et de la publication des documents officiels de son ACRQ et y appose sa signature; </li>
                <li>Contribue, sur demande des autres officiers en région, à la rédaction ou à la révision de lettres, de documents et de correspondances officielles;</li>
                <li>S’acquitte des différents mandats qui lui sont confiés ou dont il a pris la responsabilité; </li>
                <li>S’assure de l’exactitude et de la conformité de tous les rapports inhérents aux différents mandats dont il a la responsabilité et présente ceux-ci au Comité organisateur national dans les délais prescrits; </li>
                <li>Surveille les conflits d’intérêts et évite de se trouver dans cette situation;</li>
                <li>Accomplit toute autre tâche jugée pertinente.</li>
            </ul>
            <div id="TR" class="sousTitreRR">Trésorier</div>
            <div class="ligneO"></div>
            <p>Les tâches suivantes incombent au trésorier et s’ajoutent à ses tâches de responsabilité :</p><br>
            <ul>
                <li>Voit à la garde des biens de son ACRQ, qu'il administre en collaboration avec les autres officiers régionaux et tient les livres de comptabilité; </li>
                <li>Présente un compte rendu financier à chaque réunion mensuelle de sa région et un bilan complet à l'assemblée annuelle, conformes aux bonnes pratiques comptables; </li>
                <li>Assume la responsabilité de la saine gestion des affaires financières et de la présentation d’états financiers conformes aux bonnes pratiques comptables; </li>
                <li>Approuve les dépenses de son ACRQ et émet les chèques; </li>
                <li>Signe les documents financiers pertinents de sa région; </li>
                <li>En fonction des décisions prises dans sa région, s'assure qu’une portion des profits générés seront remis au Comité organisateur national; </li>
                <li>S’acquitte des différents mandats qui lui sont confiés ou dont il a pris la responsabilité;</li>
                <li>S’assure de l’exactitude et de la conformité de tous les rapports inhérents aux différents mandats dont il a la responsabilité et présente ceux-ci au Comité organisateur national dans les délais prescrits; </li>
                <li>Surveille les conflits d’intérêts et s’abstient de se trouver dans cette situation;</li>
                <li>Accomplit toute autre tâche jugée pertinente.</li>
            </ul>
            <div id="PP" class="sousTitreRR">Porte-parole</div>
            <div class="ligneO"></div>
            <p>Les tâches suivantes incombent au porte-parole et s’ajoutent à ses tâches de responsabilité :</p><br>
            <ul>
                <li>Développe des stratégies pour établir et maintenir des liens entre son ACRQ et le public à l’aide des divers médias de sa région;</li>
                <li>Donne un visage à son ACRQ dans les événements publics;</li>
                <li>Permet aux opinions véhiculées par son ACRQ d'être connues;</li>
                <li>Est un point central de contact avec les médias;</li>
                <li>Augmente la visibilité de son ACRQ et améliore la perception de celle-ci par le public;</li>
                <li>Est présent lors des conférences de presse et des événements médiatisés;</li>
                <li>Donne des interviews aux journalistes dans le cadre d'une campagne de relations de presse;</li>
                <li>Fait connaître publiquement son implication auprès de son ACRQ;</li>
                <li>Développe un réseau de contacts qui puissent être éventuellement utiles;</li>
                <li>Orchestre les campagnes d'information publique et les séances informatives en collaboration avec le comité communications;</li>
                <li>Donne des conférences sur des sujets connexes aux activités de son ACRQ, ce qui le positionne en tant qu’expert en son domaine;</li>
                <li>S’acquitte de toutes les tâches ou tous les mandats qui lui sont confiés ou dont il a pris la responsabilité; </li>
                <li>S’assure de l’exactitude et de la conformité de tous les rapports inhérents aux différents mandats dont il a la responsabilité et présente ceux-ci au Comité organisateur national dans les délais prescrits;</li>
                <li>Surveille les conflits d’intérêts et s’abstient de se trouver dans cette situation; </li>
                <li>Accomplit toute autre tâche jugée pertinente.</li>    
            </ul>
            <div id="SN" class="titreNous">Notre structure nationale</div>
            <div id="TN" class="sousTitreSN">Tables nationales</div>
            <div class="ligneO"></div>
            <img class="imgTN" src="../images/tables_nationales.jpg" alt="imgTN">
            <p>Les Tables nationales sont le lieu où toutes les résolutions entérinées par les régions sont transmises et celles proposées par le Comité organisateur (COOR) sont déposées. Bien qu’elles soient des Assemblées souveraines, chacune des décisions adoptées par les constituant.e.s qui y participent doit ensuite être entérinée dans chacune des régions. Le COOR est le responsable de l’organisation de ces Tables nationales.</p><br>
            <p>Les Tables nationales se tiendront mensuellement, la dernière fin de semaine complète de chaque mois, suite aux réunions des ACRQ, à compter de janvier 2016.</p><br>
            <p>Ces réunions auront lieu à tour de rôle dans chacune des dix-sept ACRQ et seront bien sûr ouvertes à tous. Ceci permettra de mieux promouvoir notre démarche.</p><br>
            <p>Lors de la deuxième rencontre nationale à Lévis, nous suggérons de tirer au sort les endroits où se tiendront nos dix-sept Tables nationales. Merci d’être des nôtres…</p>
            <div id="COOR" class="sousTitreSN">Comité organisateur (COOR)</div>
            <div class="ligneO"></div>
            <img class="imgCoor" src="../images/coor.jpg" alt="imgCoor">
            <p>Le comité organisateur (COOR) est formé du Conseil des opérations (C.O.), d’un membre des différents comités nationaux (A-mobilisation, B-financement et trésorerie, C-communications, D-éducation, E-web, F-secrétariat et régistrariat, G-résolution de problèmes) et des dix-sept responsables des services en région (RSR). Il a comme mandat d’offrir des services à l’ensemble des Alliances constituantes régionales québécoises (ACRQ).</p><br>
            <p>De plus, le rôle du COOR est de tout mettre en œuvre pour offrir toutes les ressources possibles aux différentes composantes de l’Alliance pour une constituante citoyenne du Québec afin d’assurer l’harmonisation de notre démarche et l’atteinte de nos objectifs.</p><br>
            <p>Les réunions du COOR se tiendront chaque semaine à compter de janvier 2016 par l’entremise des médias sociaux. En collaboration avec les constituant.e.s de la région concernée, c’est lui qui organise les Tables nationales auxquelles il assiste.</p>
            <div id="CDO" class="sousTitreCoor">Conseil des opérations (C.O.)</div>
            <div class="ligneO"></div>
            <img class="imgCO" src="../images/conseil_des_operations.jpg" alt="imgCO">
            <p>Le Conseil des opérations (C.O.) se veut le cœur de la structure horizontale de l’Alliance pour une constituante citoyenne du Québec. Toutes ses décisions sont prises en collégialité. C’est lui qui voit au bon fonctionnement et à l’harmonisation de nos structures. Son mandat est d’assurer l’unité de toutes les entités actuellement formées et à venir. Ses membres doivent être choisis avec beaucoup de vigilance puisque c’est l’épine dorsale de notre structure et le fer de lance de notre démarche. L’engagement des membres qui en feront partie doit être basé sur une intégrité à toute épreuve pour ne servir aucun autre intérêt que celui du peuple.</p><br>
            <p>Le C.O. est l'instance qui fait le lien entre les régions et assure la libre circulation des informations. Il s’assure que toutes les décisions entérinées par la majorité absolue des membres d’une ACRQ soient acheminées dans les autres régions pour que celles-ci les entérinent à leur tour.</p><br>
            <p>Le Conseil des opérations supervise le travail des comités et assure leur bon fonctionnement. Il a la responsabilité d’établir les grandes lignes d’orientation avec les responsables des services en région. Il a le pouvoir de prendre les décisions nécessaires pour assurer le bon fonctionnement des groupes et des événements promotionnels. Il n’a cependant aucun pouvoir exécutif sur les orientations sans d’abord avoir reçu l’assentiment d’une majorité absolue des dix-sept ACRQ.</p><br>
            <ul>
                <li>Propose les statuts et règlements qui devront être entérinés par les régions;</li>
                <li>Dispose des rapports financiers;</li>
                <li>Propose lors des Tables nationales, les programmes trimestriels, les principales activités, les priorités et les orientations;</li>
                <li>Propose la création de comités de travail parallèles (comités ad hoc);</li>
                <li>Structure et propose le plan d'action en vue de réaliser nos énoncés de mission;</li>
                <li>Administre et assure, en compagnie du comité financement et trésorerie, la saine gestion des argents perçus.</li>  
            </ul>
            <div class="COO"><a href="mailto:coi@accq.quebec">coi@accq.quebec</a></div>
            <div id="CN" class="sousTitreCoor">Nos comités nationaux</div>
            <div class="ligneO"></div>
            <img class="imgCN" src="../images/comites_nationaux.jpg" alt="imgCN">
            <div id="MOB" class="sousTitreCN">Mobilisation</div>
            <div class="ligneO"></div>
            <ul>
                <li>Répertorie les événements où nous pourrions informer les gens et les rallier à notre démarche;</li>
                <li>Bâtit des ponts avec la société civile (organismes communautaires, regroupements de citoyens, syndicats, etc.;</li>
                <li>Répertorie et développe des outils de promotion;</li>
                <li>Vulgarise le message en collaboration avec les comités communications et éducation;</li>
                <li>Répertorie des associations qui pourraient collaborer avec l'ACCQ;</li>
                <li>Distribue les outils de promotion aux constituant.e.s dans les ACRQ;</li>
                <li>Accomplit toute autre tâche jugée pertinente.</li><br>
            </ul>
            <div class="joindre">Pour vous joindre à ce comité:<a href="mailto:mobilisation@accq.quebec"> mobilisation@accq.quebec</a></div>
            <div id="FIN" class="sousTitreCN">Financement</div>
            <div class="ligneO"></div>
            <ul>
                <li>Fait les démarches relatives à notre structure corporative (OSBL);</li>
                <li>Gère le budget de l’Alliance pour une constituante citoyenne du Québec avec l’OSBL;</li>
                <li>Recherche du financement;</li>
                <li>S’occupe du financement des événements;</li>
                <li>Fait le suivi pour la production des outils promotionnels (macarons, t-shirts, tracts, savons, etc.);</li>
                <li>Répertorie des programmes (subventions) de financement;</li>
                <li>Assure la saine gestion de l’ACCQ (vérification comptable);</li>
                <li>Organise des campagnes de souscription (financement participatif);</li>
                <li>Évalue la possible campagne de financement « picbadge »;</li>
                <li>Accomplit toute autre tâche jugée pertinente.</li><br>
            </ul>
            <div class="joindre">Pour vous joindre à ce comité:<a href="mailto:financement@accq.quebec"> financement@accq.quebec</a></div>
            <div id="COM" class="sousTitreCN">Communication</div>
            <div class="ligneO"></div>
            <p>Ce comité est la pierre angulaire de notre démarche. Nous suggérons qu’il soit divisé en quatre sous-comités: Infographie, Information publique, Médias et Événements.</p><br>
            <ul>
                <li>Prépare le matériel nécessaire pour les rencontres informatives (Powerpoint et vidéos);</li>
                <li>Produit les pochettes publicitaires;</li>
                <li>Produit les documents officiels de l'Alliance pour une constituante citoyenne du Québec;</li>
                <li>Établit les listes de diffusion;</li>
                <li>Établit les contacts avec les médias (journaux, télés, radios);</li>
                <li>Produit les communiqués de presse;</li>
                <li>Assure l’uniformité du visuel et des outils promotionnels;</li>
                <li>Accomplit toute autre tâche jugée pertinente.</li><br>
            </ul>
            <div class="joindre">Pour vous joindre à ce comité:<a href="mailto:communication@accq.quebec"> communication@accq.quebec</a></div>
            <div id="EC" class="sousTitreCN">Éducation citoyenne</div>
            <div class="ligneO"></div>
            <ul>
                <li>Prépare et organise les ateliers constituants dans les régions;</li>
                <li>Assure la gestion des comptes rendus de ces ateliers constituants;</li>
                <li>Assure la gestion de la section « Éducation » de notre site WEB;</li>
                <li>Répertorie des exemples de constitutions dans le monde et au Québec;</li>
                <li>Accomplit toute autre tâche jugée pertinente.</li><br>
            </ul>
            <div class="joindre">Pour vous joindre à ce comité:<a href="mailto:education@accq.quebec"> education@accq.quebec</a></div>
            <div id="TI" class="sousTitreCN">Multimédia (TI)</div>
            <div class="ligneO"></div>
            <ul>
                <li>Veille à la gestion de notre site Web et aux mises à jour;</li>
                <li>Crée les pages de réseaux sociaux et assure l’uniformité des informations;</li>
                <li>Crée les pages événements pour nos activités;</li>
                <li>Veille au contenu de nos pages Facebook et agit comme modérateur lorsque nécessaire;</li>
                <li>Accomplit toute autre tâche jugée pertinente.</li><br>
            </ul>
            <div class="joindre">Pour vous joindre à ce comité:<a href="mailto:web@accq.quebec"> web@accq.quebec</a></div>
            <div id="SER" class="sousTitreCN">Secrétariat-registrariat</div>
            <div class="ligneO"></div>
            <ul>
                <li>Assure que tous les documents officiels produits par l’Alliance pour une constituante citoyenne du Québec sont rédigés dans un français impeccable;</li>
                <li>Vérifie et révise tous les documents;</li>
                <li>Voit à la mise à jour des données personnelles de tous les contituant.e.s au Québec et en assure la confidentialité;</li>
                <li>Transmet aux responsables régionaux la liste de leurs constituant.e.s;</li>
                <li>Répertorie tous les procès-verbaux des ACRQ et autres documents de l’ACCQ;</li>
                <li>Accomplit toute autre tâche jugée pertinente.</li><br>
            </ul>
            <div class="joindre">Pour vous joindre à ce comité:<a href="mailto:secretariat@accq.quebec"> secretariat@accq.quebec</a></div>
            <div id="ETH" class="sousTitreCN">Éthique</div>
            <div class="ligneO"></div>
            <div class="sousTitreEthique">1. Définition du problème</div>
            <p>Avant de tenter de régler un problème, il importe de bien le définir. Parfois, cette seule étape permet d'en arriver à modifier certaines perceptions et à régler une bonne part du problème qui nous préoccupe. Trouver des solutions à une difficulté qui demeure vague et confuse ou à plusieurs problèmes à la fois peut sembler décourageant. Assurez-vous de séparer les problèmes s'il y en a plusieurs. Afin de préciser la nature de la difficulté, posez-vous les questions suivantes :</p><br>
            <ul>
                <li>Qu'est-ce qui vous dérange?</li>
                <li>Quelle est la situation que vous voulez faire cesser?</li>
                <li>Dans quel contexte ce problème apparaît-il? (quand? où? comment? avec qui?)</li>
                <li>Que ressentez-vous?</li>
                <li>Est-ce bien votre problème ? Questionnez-vous aussi sur le but que vous souhaitez atteindre au terme de ce processus. Quelle sera la situation, une fois ce problème résolu?</li><br>
            </ul>
            <div class="sousTitreEthique">2. Générez des solutions</div>
            <p>Cette étape consiste à dresser un inventaire, le plus large possible, des solutions au problème que vous avez identifié, sans en juger pour l'instant la valeur ou le réalisme. Souvent, la solution se trouve dans une action que vous n'avez peut-être pas envisagée. Un autre risque est de porter un jugement trop rapide sur les idées qui vous viennent en tête et de rejeter des solutions originales, pouvant être constructives.</p><br>
            <div class="sousTitreEthique">3. Choisissez une solution</div>
            <p>Après avoir formulé toutes vos idées, il est temps de passer à la prise de décision. Souvent, la solution réside dans une combinaison de plusieurs éléments de solution. Pesez le pour et le contre des options et la faisabilité de celles-ci. Procédez par élimination.</p>
            <p>Le processus de résolution de problèmes peut parfois être stoppé à cette étape : plutôt que de courir le risque de vous tromper, il peut être tentant de préférer ne rien choisir. Assurez-vous également de pouvoir mettre vous-même en œuvre la solution choisie et de ne pas compter uniquement sur les autres.</p><br>
            <div class="sousTitreEthique">4. Appliquez la solution choisie</div>
            <p>Décidez des étapes à accomplir afin d'appliquer votre solution et... passez à l'action! Il n'est pas nécessaire d'être certain, certaine qu'il s'agit de LA bonne solution avant de l'essayer. Les meilleures solutions du monde ne régleront rien si vous ne les appliquez pas!</p>
            <p>Certains comportements ou certaines craintes (ex. : remise à plus tard, peur du jugement ou des critiques) peuvent vous faire hésiter à mettre en application la solution choisie. Il est important d'en prendre conscience. Prendre une décision entraîne certaines conséquences, mais il est souvent possible de les évaluer en bonne partie. Surtout, n'oubliez pas que passer à l'action amène souvent un sentiment de satisfaction et augmente votre confiance en vous.</p><br>
            <div class="sousTitreEthique">5. Évaluez les solutions appliquées</div>
            <p>Laissez-vous un peu de temps pour voir si le problème est vraiment réglé. Vous sentez-vous soulagé, soulagée? Votre objectif est-il atteint? Prenez une minute pour identifier ce que vous en retenez. Si, au contraire, le problème persiste après quelque temps, reprenez chacune des étapes de la résolution de problèmes. Certains éléments peuvent vous apparaître sous un jour nouveau.</p><br>
            <div class="joindre">Pour vous joindre à ce comité:<a href="mailto:mediation@accq.quebec"> mediation@accq.quebec</a></div>
            <div id="EVE" class="sousTitreCN">Événements</div>
            <div class="ligneO"></div>
            <p>Le comité Événements s'occupe principalement d'organiser les rencontres nationales mais aussi tout autre événement majeur de mobilisation. Il doit travailler en collaboration avec les autres comités pour planifier les rencontres nationales de façon à tenir compte des travaux réalisés par ceux-ci.</p><br>
            <div id="RESR" class="sousTitreCoor">Responsables des services en région (RSR)</div>
            <div class="ligneO"></div>
            <img class="imgRSR" src="../images/rsr.jpg" alt="imgRSR">
            <p>Le responsable des services en région (RSR) est le représentant officiel de son ACRQ et il assure la surveillance générale de ses affaires. Il est le lien de sa région avec les autres régions lors des réunions du COOR et assiste aux Tables nationales. Il a également la responsabilité de prendre les mesures nécessaires pour assurer le bon fonctionnement des rencontres de sa région. Les tâches suivantes incombent au RSR et s’ajoutent à ses tâches de responsabilité :</p><br>
            <ul>
                <li>En collaboration avec les autres responsables de sa région, établit les objectifs et les priorités visant à satisfaire les besoins de son ACRQ; </li>
                <li>Établit, conjointement avec les autres responsables, le calendrier des réunions et des séances informatives dans son ACRQ; </li>
                <li>Procède à tous les préparatifs nécessaires pour la tenue de toute rencontre (réservation de salle, équipements, etc.); </li>
                <li>Coordonne l’ensemble des activités de son ACRQ et s’assure du suivi des dossiers; </li>
                <li>Assure le bon fonctionnement de son ACRQ en suivant les politiques générales élaborées; </li>
                <li>Retransmet les propositions entérinées par les autres régions aux membres de son ACRQ, lors des assemblées régionales;</li>
                <li>S’acquitte des différents mandats qui lui sont confiés ou dont il a pris la responsabilité; </li>
                <li>S’assure de l’exactitude et de la conformité de tous les rapports inhérents aux différents mandats dont il a la responsabilité et présente ceux-ci au Comité organisateur national dans les délais prescrits; </li>
                <li>Surveille les conflits d’intérêts et s’abstient de se trouver dans cette situation;</li>
                <li>Accomplit toute autre tâche jugée pertinente.</li>
            </ul>   
        </div>
        <div id="ORL" class="ORL">
        <div id="liste2" class="liste2">
            <div id="SL" class="SL">
            <div class="SR"><a href="#SR">Nos structures régionales</a></div>
            <ul type="circle">
                <li><a href="#NC">Nous, constituants</a></li>
                <li><a href="#NRR">Nos responsables régionaux</a></li>
                <ul type="disc">
                    <li><a href="#RAM">Responsable de l'accueil et de la mobilisation</a></li>
                    <li><a href="#RSR">Responsable des services en région</a></li>
                    <li><a href="#SE">Secrétaire</a></li>
                <li><a href="#TR">Trésorier</a></li>
                    <li><a href="#PP">Porte-parole</a></li>
                </ul>
            </ul>
            <div class="SN"><a href="#SN">Notre structure nationale</a></div>
            <ul type="circle">
                <li><a href="#TN">Tables nationales</a></li>
                <li><a href="#COOR">Comité organisateur (COOR)</a></li>
                <ul type="disc">
                    <li><a href="#CDO">Conseil des opérations</a></li>
                    <li><a href="#CN">Comités nationaux</a></li>
                    <ul>
                        <li><a href="#MOB">Mobilisation</a></li>
                        <li><a href="#FIN">Financement</a></li>
                        <li><a href="#COM">Communication</a></li>
                        <li><a href="#EC">Éducation citoyenne</a></li>
                        <li><a href="#TI">Multimedia (TI)</a></li>
                        <li><a href="#SER">Secrétariat-registrariat</a></li>
                        <li><a href="#ETH">Éthique</a></li>
                        <li><a href="#EVE">Événements</a></li>
                    </ul>
                    <li><a href="#RESR">Responsables des services en régions</a></li>
               
                </ul>
            </ul>
        </div>
</div>
</div>

    </div>
</div>
</div>
<script>
var co = document.getElementById("co")
window.onscroll = function() {myFunction()};

var header = document.getElementById("liste2");
console.log(header);
var sticky = header.offsetTop;
console.log(sticky);
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

$(document).ready(function () {
      $(window).scroll(function () {
          $('#SL').width($('#liste2').width());
      });
  
    
    $("#SL ul li a").click(function() {
      $("#SL ul").children().removeClass();
      $(this).parent().addClass('active1');
    })
  
    $('a[href^="#"]').click(function() {
        var target = $(this.hash);
        var hash = this.hash;
        if (target.length == 0) target = $('a[name="' + this.hash.substr(1) + '"]');
        if (target.length == 0) target = $('html');
        $('html, body').animate({ scrollTop: target.offset().top }, 500, function (){
            location.hash = hash;
        });
        return false;
    });
  
  });


</script>

@include('includes.footer')
</body>
</html>