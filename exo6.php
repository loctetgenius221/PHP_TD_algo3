<?php
// Fonction elementsSansDoublons

function elementsSansDoublons($tableau) {
    // Déclarer un nouveau tableau pour stocker les éléments uniques
    $tableauSansDoublons = array();

    // Déclarer un dictionnaire pour compter les occurrences des éléments
    $compteur = array();

    // Parcourir chaque élément du tableau d'entrée
    foreach ($tableau as $element) {
        // Vérifier si l'élément existe dans le dictionnaire des occurrences
        if (!array_key_exists($element, $compteur)) {
            // Ajouter l'élément comme clé dans le dictionnaire avec une occurrence de 1
            $compteur[$element] = 1;
        } else {
            // Si l'élément existe déjà, incrémenter le compteur d'occurrences
            $compteur[$element]++;
        }
    }

    // Parcourir le dictionnaire des occurrences pour récupérer les éléments uniques
    foreach ($compteur as $cle => $valeur) {
        // Si l'élément a une seule occurrence, l'ajouter au tableauSansDoublons
        if ($valeur == 1) {
            $tableauSansDoublons[] = $cle;
        }
    }

    // Retourner le tableau contenant les éléments uniques
    return $tableauSansDoublons;
}

// Exemple d'utilisation
$tableauTest = [1, 2, 3, 4, 3, 2, 5];
$tableauResultat = elementsSansDoublons($tableauTest);
echo "Les éléments sans doublons sont : ", implode(", ", $tableauResultat), "\n";
?>
