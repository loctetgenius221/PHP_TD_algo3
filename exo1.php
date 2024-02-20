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
?>