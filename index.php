<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>tpe</title>
    <link rel="stylesheet" type="text/css" href="site_.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

</head>

<body id="body">
    <header>
        <ul id="menu">
            <li >
                <a class="choix" href="C:\Users\thomas\Desktop\site tpe\site_credit">
                    Accueil
                </a>
            </li>
            <li >
                <a class="choix" href="C:\Users\thomas\Desktop\site tpe">
                    Experience
                </a>
            </li>
            <li >
                <a class="choix" href="C:\Users\thomas\Desktop\site tpe">
                    Crédit
                </a>
            </li>
        </ul>
    </header>
    <div>
    <div id="pgrh1">
        <marquee behavior="slide" direction="right" scrollamount="10" style="font-size:25px ;" loop=999999 >
        / Texte à entrer / M'att Hisse
        </marquee>

            <div>
                <ul id="sommaire">
                    <li class="titsommaireans">
            I.système de stockage
                    </li>
            carte perforée
                    <li class="sommaireans">
            bande magnétique
                    </li>
                    <li class="sommaireans">
            cassette audio
                    </li>
                    <li class="sommaireans">
            vinyl
                    </li>
                    <li class="sommaireans">
            disquette
                    </li>
                    <li class="sommaireans">
            DVD
                    </li>
                    <li class="sommaireans">
            mémoire flash
                    </li>
                    <li class="titsommaireans">
            II.trasnfert d'informations
                    </li>
                    <li class="sommaireans">
            cablé
                    </li>
                    <li class="sommaireans">
            fibré
                    </li>
                    <li class="sommaireans">
            fréquence radio
                    </li>
                    <li class="sommaireans">
            cellulaire
                    </li>
                    <li class="sommaireans">
            wifi
                    </li>
                    <li class="sommaireans">
            serveur
                    </li>
                    <li class="sommaireans">
            internet
                    </li>
                    <li class="sommaireans">
            block chain
                    </li>
                </ul>
            </div> 

    </div>   
    </div>
    <div id="next">
        <a id="next_button">Suivant</a>
    </div>

    <div>
<?php
    $dir = opendir('.');
    while (($file = readdir($dir)) !== false) {
        echo "File: {$file}</br>\n";
    }
?>            
    </div>
</body>
</html>


