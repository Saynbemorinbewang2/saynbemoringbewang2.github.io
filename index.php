<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $pers = $_GET['perso'] ?? 'costy';
        $image = 'img'. DIRECTORY_SEPARATOR . $pers . ".jpg";

        $naiss_costy = 1997; 
        $naiss_solo = 2022;
        $naiss_soup = 2001;

        $today = new DateTime();

        $ans_costy = $today->format('Y') - $naiss_costy;
        $ans_solo = $today->format('Y') - $naiss_solo;
        $ans_soup = $today->format('Y') - $naiss_soup;

        $bio_costy_1 = "Née le 06 mars 1997 à Ngaoundéré. COSTA SENGUEL a obtenu son premier diplôme cep (Certificat d’étude Primaire) a l’école SAINT joseph de Bamyanga Marza en 2010.";
        $bio_costy_2 = "Il poursuit ces études au lycée de Beka Horere ou sort en 2014 nanti de son BEPC (brevet d’étude du premier cycle) et continu au lycée classique ou il obtiendra successivement son Probatoire et son baccalauréat série TI en 2018 et 2019. Il continue ces études actuellement en filière informatique a l’université de Ngaoundéré.";

        $bio_solo_1 = "Né le 04 octobre 1999 a Ngaoundere, <br>MO RINGBE SAYNBE a reçu son releve de note Licence 2 en  Technologie de l’information de l’universite de ngaoundere et etudie actuellement en licence 3 dans la meme université.";
        $bio_solo_2 = " Un ardent défenseur du travaille acharné,  il fait participer ses camarades à des projets prometeur. Ses intérêts académiques se concentrent sur l’elaboration d’un logiciel revolutionnaire de simplification des titres foncier au Cameroun , et ses projets en cours comprennent l’elaboration d’un logiciel d’archivage et l’apprentisage d’un logiciel de statistique. Fort de caractère avec une voix imposante, Blagueur très souvent avec ses amis et camarades, il est l’exemple parfait d’un mélange de rire et de travaille. Ses loisirs se résume au Tennis, Football à la télé , jeu vidéo et quelque fois des apéritifs avec ces amis intime. ";

        $bio_soup_1 = "Né le 02 janvier 2001 a la maternité du Centre de santé intégré de Bagodo, <br>SOUAPIEBE EDMOND-PROSPER a fait ses études maternelles de 2004-2006 à l'école maternelle de Galim.";
        $bio_soup_2 = "Ses études primaires ont été couronées par le CEP en 2012 toujours dans la meme ville,
        il continue ses études secondaires tour a tour au Lycée bilingue de Galim où il obtient son BEPC, au Lycée classique de Ngaoundéré où il obtient tour à tour son diplome de PROBATOIRE et son BACCALAUREAT respectivement en 2018 et en 2019.
        Il poursuit ses études à l'université de Ngaoundéré en informatique et actuellement est en licence 3 dans la meme université.";

        $error = "Cet etudiant n'existe pas dans nos archives...";

    ?>    


    <header>
        <h1 align="center">UNIVERSITE DE NGAOUNDERE</h1>

        <nav>
            <ul id="">
                <li><a href="index.php?perso=costy"><p>19B369FS</p></a></li>
                <li><a href="index.php?perso=solo"><p>19B059FS</p></a></li>
                <li><a href="index.php?perso=soup"><p>19B057FS</p></a></li>
            </ul>
        </nav>
    </header>


    <div class="container">
        <div class="part1">

            <img src="<?=$image?>" alt="<?=$pers?>">
            <div class="bio1">
                <?php 
                    if($pers == 'costy')
                        echo $bio_costy_1;
                    elseif($pers == 'solo')
                        echo $bio_solo_1;
                    elseif($pers == 'soup')
                        echo $bio_soup_1;
                    else
                        echo $error;
                 ?>
            </div>
            <div class="bio2">
                <?php 
                    if($pers == 'costy')
                        echo $bio_costy_2;
                    elseif($pers == 'solo')
                        echo $bio_solo_2;
                    elseif($pers == 'soup')
                        echo $bio_soup_2;
                 ?>
            </div>
        </div>    
    </div>

    <div class="div-gauche">

    </div>

    <footer>
    </footer>

</body>
</html>