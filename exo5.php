<?php
// Algorithme Trouver_doublon_tableaux

// Déclaration des variables
$taille_tabs;
$tab_entier1 = array();
$tab_entier2 = array();
$element_commun = array();

// Demander la taille des tableaux
echo "Veuillez entrer la taille de vos tableaux : ";
$taille_tabs = intval(readline());

// Initialiser le tableau des éléments communs
$element_commun = array_fill(1, $taille_tabs, 0);

// Saisir les éléments du tableau 1
for ($i = 1; $i <= $taille_tabs; $i++) {
    echo "Veuillez saisir l'élément n°", $i, " du premier tableau : ";
    $tab_entier1[$i] = intval(readline());
}
echo "Voici votre premier tableau : ", implode(", ", $tab_entier1), "\n";

// Saisir les éléments du tableau 2
for ($i = 1; $i <= $taille_tabs; $i++) {
    echo "Veuillez saisir l'élément n°", $i, " du second tableau : ";
    $tab_entier2[$i] = intval(readline());
}
echo "Voici votre second tableau : ", implode(", ", $tab_entier2), "\n";

// Trouver les éléments communs entre les deux tableaux
for ($i = 1; $i <= $taille_tabs; $i++) {
    for ($j = 1; $j <= $taille_tabs; $j++) {
        if ($tab_entier1[$i] == $tab_entier2[$j]) {
            $bool_element_present = false;

            for ($k = 1; $k <= $taille_tabs; $k++) {
                if ($element_commun[$k] == $tab_entier1[$i]) {
                    $bool_element_present = true;
                    break;
                }
            }

            if (!$bool_element_present) {
                $element_commun[$i] = $tab_entier1[$i];
            }
        }
    }
}

// Afficher les éléments communs
echo "Les éléments communs des deux tableaux sont : ";
foreach ($element_commun as $element) {
    if ($element != 0) {
        echo $element, " \n";
    }
}
?>
