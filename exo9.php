<?php
// Déclaration de mes variables;
$frequence = array();
$chaine;
$caractere;
$tableauTempon = array();

// On va demander à l'utilisateur de rentrer une chaine de caractère;
echo "Veuillez entrer une chaîne de caractères : ";
$chaine = readline();

// Obtenir la longueur de la chaine pour pouvoir la parcourir avec une boucle;
$longueurChaine = strlen($chaine);

// On va parcourir la chaine avec la boucle for pour obtenir chaque caractère de notre chaine;
for ($i = 0; $i < $longueurChaine; $i++) {
    $caractere = $chaine[$i];

    // Vérifier si le caractère existe dans le tableau des fréquences
    if (isset($frequence[$caractere])) {
        // Si oui, incrémenter le compteur
        $frequence[$caractere]++;
    } else {
        // Sinon, initialiser le compteur à 1
        $frequence[$caractere] = 1;
    }

    // Ajouter le caractère au tableau tempon
    $tableauTempon[] = $caractere;
}

echo "Votre tableau tempon est : \n";
print_r($tableauTempon);

echo "La fréquence de chaque caractère est : \n";
print_r($frequence);
?>
