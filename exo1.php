<?php    
    // Déclaration des variables
    $tableau;
    $taille_tab;
    $produit;

    // Lecture de la taille du tableau
    echo "veuiller donner le nombre de colonne de votre tableau ";
    $taille_tab = intval(readline());
    $produit = 1;

    // Boucle pour la lecture des éléments et calcul du produit
    for ($i = 1; $i <= $taille_tab; $i++) {
        echo "Donner la colonne n° " . $i . ": ";
        $tableau[$i] = intval(readline());  
        $produit = $produit * $tableau[$i];
    }

    // Affichage du produit des éléments du tableau
    echo "Le produit des éléments de votre tableau donne : $produit\n";

    //  intval() permet de convertir une valeur en entier && readline() permet d'interagir avec l'utilisateur en lui demandant de saisir des données à partir du clavier;
    /* Ici j'ai dabord déclaré les variables dont j'aurai besoin à savoir (tableau, taille_tableau, produit),
        j'ai demandé à l'utilisateur d'entrer la taille du tableau soit le nombre de colonne qu'il contient et
        j'ai initialisé $produit = à 1.
        Ensuite j'ai utilisé la boucle for pour demandé dabord à l'utilisateur de rentré ses données et enfin de faire 
        leur produit puis de le stocké dans la variable produit.
        Enfin affiché le resultat avec echo. 
    */  
?>

