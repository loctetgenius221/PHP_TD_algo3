<?php
// Algorithme tableau_sans_doublons

// Déclaration des variables
$tableauSansDoublons = array(" ");
$n;
$tableau1 = array();
$tri = array();

// Saisir la taille du tableau
echo "Saisir la taille du tableau : ";
$n = intval(readline());

// Saisir les éléments du tableau1
for ($i = 1; $i <= $n; $i++) {
    echo "Saisir l'élément ", $i, " : ";
    $tableau1[$i] = readline();
}

// Initialiser le tableau $tri à 0
for ($i = 1; $i <= $n; $i++) {
    $tri[$i] = 0;
}

// Parcourir le tableau1 pour trouver les éléments sans doublons
for ($i = 1; $i <= $n; $i++) {
    if ($tri[$i] == 0) {
        $tableauSansDoublons[] = $tableau1[$i];

        // Marquer les doublons dans le tableau1
        for ($j = 1; $j <= $n; $j++) {
            if ($tableau1[$i] == $tableau1[$j]) {
                $tri[$j] = 1;
            }
        }
    }
}

// Afficher le tableauSansDoublons
echo "Le tableau sans doublons est : ", implode(", ", $tableauSansDoublons), "\n";
?>
