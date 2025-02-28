<?php

//on include en 1er la classe et ensuite, les classes qui héritent
//On met abris en premier car animal.php dépend d'abris.php (on suit l'inverse des flèches sur le diagramme des classes)
    include './abris.php'; 
    include './animal.php';
    include './chien.php';

    //Créons un chien
    $chien = new Chien("Médor", "grise", 1.20, 5, "courts", 4);

    //on fait un var_dump pour voir l'objet chien
    var_dump($chien);
    echo "<br><br>";
    print_r($chien);
    echo "<br><br>";

    //appel des fonctions avec le chien
    $chien->seMultiplier($chien);
    echo "<br><br>";
    $chien->mettreAuMonde();
    echo "<br><br>";

    //donnons un abris à notre chien
    $chien->setAbris(new Abris ("ma niche"));
    echo "<br><br>";
    var_dump($chien);
    echo "<br><br>";
    print_r($chien);
    echo "<br><br>";

    $chien ->getAbris()->abriter();

?>