    //Déclaration de variables
    // $tab_caracteres;
    // $compteur_voyelles;
    // $chaines;
    // $taille_tab;

    // //Saisie des caractères du taleau
    // echo "Veuillez donner la taille de votre tableau: ";
    // $taille_tab = readline();

    // for ($i = 1; $i <= $taille_tab; $i++) {
    //     echo "Veuillez saisir le caractère $i: ";
    //     $tab_caracteres[$i] = readline();
    // }

// Algorithme Tableau_Chaine_Caractere

// Déclaration du tableau de chaînes de caractères
// $tab_caracteres = ["OUMY", "ASTOU", "APSATOU", "MAREME"];

// // Parcourir le tableau de chaînes de caractères
// for ($i = 0; $i < count($tab_caracteres); $i++) {
//     // Initialiser le compteur de voyelles
//     $compteur_voyelles = 0;

//     // Convertir la chaîne de caractères actuelle en minuscules
//     $chainee = strtolower($tab_caracteres[$i]);

//     // Parcourir chaque caractère de la chaîne
//     for ($j = 0; $j < strlen($chainee); $j++) {
//         // Vérifier si le caractère est une voyelle
//         if (in_array($chainee[$j], ['a', 'e', 'i', 'o', 'u', 'y'])) {
//             $compteur_voyelles++;
//         }
//     }

//     // Affichage du nombre de voyelles dans la chaîne actuelle
//     echo "Nombre de voyelles dans '", $tab_caracteres[$i], "' : ", $compteur_voyelles, "\n";
// }

<?php
    // Algorithme Tableau_Chaine_Caractere

    // Demander à l'utilisateur de saisir la taille du tableau
    echo "Veuillez saisir la taille du tableau : ";
    $taille_tab = intval(readline());

    // Initialiser le tableau de chaînes de caractères
    $tab_caracteres = array();

    // Remplir le tableau avec les saisies de l'utilisateur
    for ($i = 0; $i < $taille_tab; $i++) {
        echo "Veuillez saisir la chaîne de caractères ", $i + 1, " : ";
        $tab_caracteres[] = readline();
    }

    // Parcourir le tableau de chaînes de caractères
    for ($i = 0; $i < count($tab_caracteres); $i++) {
        // Initialiser le compteur de voyelles
        $compteur_voyelles = 0;

        // Convertir la chaîne de caractères actuelle en minuscules
        $chainee = strtolower($tab_caracteres[$i]);

        // Parcourir chaque caractère de la chaîne
        for ($j = 0; $j < strlen($chainee); $j++) {
            // Vérifier si le caractère est une voyelle
            if (in_array($chainee[$j], ['a', 'e', 'i', 'o', 'u', 'y'])) {
                $compteur_voyelles++;
            }
        }

        // Affichage du nombre de voyelles dans la chaîne actuelle
        echo "Nombre de voyelles dans '", $tab_caracteres[$i], "' : ", $compteur_voyelles, "\n";
    }

?>