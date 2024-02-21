<?php
// Algorithme Tableau_en_chaine

// Déclaration des variables
$taille_tab;
$tab_caract = array();

// Demander la taille du tableau
echo "Quelle est la taille de votre tableau ? ";
$taille_tab = intval(readline());

// Saisir les chaînes de caractères dans le tableau
for ($i = 1; $i <= $taille_tab; $i++) {
    echo "Veuillez entrer votre chaîne de caractère n°", $i, " : ";
    $tab_caract[$i] = readline();
}
echo "Votre premier tableau est : ", implode(", ", $tab_caract), "\n";

// Afficher la nouvelle chaîne formée par les chaînes du tableau
echo "Votre nouvelle chaîne est : ", implode("", $tab_caract), "\n";
?>
