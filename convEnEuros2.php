<?php
function obtenirTauxChange($devise) {
    switch (strtoupper($devise)) {
        case "USD":
            return 0.883;
        case "CAD":
            return 0.686;
        case "GBP":
            return 1.154;
        case "RUB":
            return 0.013;
        default:
            return 0;
    }
}

echo "Saisir la devise : ";
$devise = rtrim(fgets(STDIN));
$tauxChange = obtenirTauxChange($devise);

if ($tauxChange == 0) {
    echo "Devise inconnue.\n";
} else {
    echo "Saisir le prix en ", $devise, " : ";
    $prix = rtrim(fgets(STDIN));

    if (is_numeric($prix)) {
        $prixEuros = $prix * $tauxChange;
        echo "Prix en euros : ", $prixEuros, " €.\n";
    } else {
        echo "La valeur saisie ne correspond pas à un prix.\n";
    }
}
?>
