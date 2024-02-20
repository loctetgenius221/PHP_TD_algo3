<?php
// Algorithme Rotation_tableau

// Déclaration des variables
$taille_tab;
$positions;
$tableau_entiers = array();
$tableau_rotated = array();
$indice_rotated;

// Saisie de la taille du tableau
echo "Saisir la taille du tableau : ";
$taille_tab = intval(readline());

// Saisie du nombre de positions de rotation à droite
echo "Saisir le nombre de positions de rotation à droite : ";
$positions = intval(readline());

// Saisie des éléments du tableau
for ($i = 1; $i <= $taille_tab; $i++) {
    echo "Saisir l'élément $i : ";
    $tableau_entiers[$i] = intval(readline());
}

// Rotation du tableau
for ($i = 1; $i <= $taille_tab; $i++) {
    $indice_rotated = ($i + $positions - 1) % $taille_tab + 1;
    $tableau_rotated[$indice_rotated] = $tableau_entiers[$i];
}

// Affichage du tableau après rotation à droite
echo "Le tableau après rotation à droite est : ";
for ($i = 1; $i <= $taille_tab; $i++) {
    echo $tableau_rotated[$i] . " ";
}

// Fin du script
?>
