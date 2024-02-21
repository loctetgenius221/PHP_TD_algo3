<?php
// Algorithme

// Déclaration des variables
$n;
$tableau1 = array();

// Saisir la taille du tableau1
echo "Saisir la taille du tableau1 : ";
$n = intval(readline());

// Saisir les éléments du tableau1
for ($i = 1; $i <= $n; $i++) {
    echo "Saisir l'élément ", $i, " : ";
    $tableau1[$i] = intval(readline());
}

// Trier le tableau1 en ordre croissant
for ($i = 1; $i <= $n - 1; $i++) {
    for ($j = 1; $j <= $n - $i; $j++) {
        if ($tableau1[$j] > $tableau1[$j + 1]) {
            $temp = $tableau1[$j];
            $tableau1[$j] = $tableau1[$j + 1];
            $tableau1[$j + 1] = $temp;
        }
    }
}

// Calculer la médiane
if ($n % 2 == 0) {
    $indice1 = $n / 2;
    $indice2 = $indice1 + 1;
    $mediane = ($tableau1[$indice1] + $tableau1[$indice2]) / 2;
} else {
    $indice = ($n + 1) / 2;
    $mediane = $tableau1[$indice];
}

// Afficher la médiane
echo "La médiane du tableau1 est : ", $mediane, "\n";
?>
