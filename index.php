<?php
session_start();

if (!isset($_REQUEST['uc']))
    $uc = 'accueil';
else
    $uc = $_REQUEST['uc'];

switch ($uc) {
    case 'accueil':
        include("vues/acceuil.php"); // Inclure la page d'accueil ici
        // Autres actions spécifiques à la page d'accueil
        break;

    case 'prestations':
        // Traitement de la page "prestations"
        break;

    case 'produits':
        // Traitement de la page "produits"
        break;

    case 'login':
        include("vues/login.php"); // Inclure la page de login
        // Autres actions spécifiques à la page de login
        break;

    case 'devis':
        include("vues/v_devis.php");
        // Autres actions spécifiques à la page "devis"
        break;
}
?>
