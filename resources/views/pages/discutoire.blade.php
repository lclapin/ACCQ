<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
   
<body>
@include('includes.header')

@include('includes.banniere')

<div class="containerDiscutoire">
<div class="discutoire">
    <div class="titreDiscutoire">Bienvenue aux amies et amis de Constituons!</div>
    <div class="BM">
    <div class="bienvenue">
        <div class="texteEntete">L’ACCQ collabore à l’expérience en cours d’Assemblée constituante établie sous l’égide de <a href="https://inm.qc.ca/">l’Institut du Nouveau Monde</a> en vous offrant de vous inscrire à nos forums constituants virtuels.</div><br>
        <p>Nous mettons ici à votre disposition un outil libre et gratuit qui vous permettra de participer à la rédaction d’une constitution par et pour le peuple. Avec un ordinateur (idéalement), une tablette ou un téléphone intelligent, un micro (et/ou un casque d’écoute) et une connexion internet, vous serez en mesure de vous joindre à nos délibérations citoyennes.</p><br>
        <p>En concordance avec les commissions établies par Constituons!, nos ateliers constituants s’insèrent sous six thèmes:</p><br>
        <ul>
            <li>Préambule, valeurs et principes, symboles nationaux</li>
            <li>Droits et devoirs fondamentaux</li>
            <li>Institutions et pouvoirs (législatif, exécutif et judiciaire)</li>
            <li>Organisation territoriale et attribution des compétences régionales et municipales</li>
            <li>Partenariats autochtones, affaires canadiennes et relations internationales</li>
            <li>Procédures de révision et participation citoyenne.</li>
        </ul>
        <div class="titreConseil">CONSEILS PERSONNALISÉS POUR L’INSTALLATION DE MUMBLE</div>
        <p>Si vous n’êtes pas très à l’aise avec l’électronique, il nous fera plaisir de vous aider pas à pas lors de l'installation de notre outil d’audioconférence « Mumble » et de vous permettre de vous familiariser avec notre outil de rédaction collaborative « Framapad ». Il vous suffit de nous écrire à secretariat@accq.quebec en nous indiquant votre numéro de téléphone pour prendre un rendez-vous. Vous pouvez aussi communiquer directement avec Alain (418) 931-3230 ou Jean (514) 284-1379 qui vous accompagneront avec plaisir.</p>
        <div class="titreInstaller">SI VOUS INSTALLEZ MUMBLE VOUS-MÊME</div>
        <div class="installation">1) Installation</div><br>
        <p>Pour nous rejoindre, il vous suffit de télécharger le logiciel sous licence libre à l’adresse suivante : https://www.mumble.com et de suivre les étapes d’installation IMPORTANT : En ouvrant le lien «Mumble » ci-dessus, ne cliquez pas sur le bouton « Create » mais bien sur l’icône de votre logiciel d’exploitation soit Windows, Apple ou Linux (voir le cercle rouge dans l’image ci-dessous).</p>
        <img class="imgMumble" src="../images/download_mumble.jpg" alt="mumble">
        <div class="son">2) Réglage du son</div><br>
        <p>Une fois ce logiciel installé dans vos programmes, lorsque vous l’ouvrirez pour la première fois, Mumble vous dirige généralement vers l’assistant audio.</p><br>
        <p><strong>IMPORTANT:</strong> Bien installer la fonction «appuyer pour parler» qui se trouve sur la page « Détection de l’Activité Vocale ». Également, à la page suivante, « Qualité et notifications », il est important de désactiver la fonction « synthèse vocale ». Pour vous aider sur ce point, veuillez consulter le lien suivant :</p>
        <p><a href="https://www.mumble.com/support/mumble-server-push-to-talk.php">https://www.mumble.com/support/mumble-server-push-to-talk.php</a></p><br>
        <div class="rejoindre">3) Rejoindre la discussion</div><br>
        <p>Une fois installé, il vous suffit de l’ouvrir et de vous connecter à notre serveur avec les informations ci-dessous et en suivant les étapes décrites ici :</p>
        <p><a href="https://www.mumble.com/support/how-to-connect-to-a-mumble-server.php">https://www.mumble.com/support/how-to-connect-to-a-mumble-server.php</a></p><br>
        <p>Nom: A.C.C.Q. (vous pouvez mettre ce que vous voulez, ce champ vous permet de vous rappeler de quel serveur il s’agit).</p>
        <p>Adresse: accq.mumble.com</p>
        <p>Port: 64082</p>
        <p>Nom d’utilisateur: Votre pseudo (doit permettre de vous identifier)</p>
    </div>
    <div class="mumble">

    </div>
    </div>
</div>
</div>
@include('includes.footer')
</body>
</html>