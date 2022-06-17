<?php

// Inclusion des dépendances
include 'database_utilities.php';
include 'customer_model.php';

// On vérifie que le paramètre 'action' existe bien dans la chaîne de requête
if(!array_key_exists('action', $_GET)) {
    echo false;
    exit;
}

// Le code à exécuter dépend du paramètre 'action' de l'URL de la requête
switch($_GET['action']) {

    // Recherche d'un client
    case 'search-customer':

        if(!array_key_exists('search', $_GET)) {
            echo false;
            exit;
        }

        // On récupère les résultats de recherche
        $customers = searchCustomers($_GET['search']);

        // Réponse envoyée au client
        echo json_encode($customers);
        exit;

    // Récupération de la fiche détaillée d'un client
    case 'get-customer-details':

        if(!array_key_exists('customerNumber', $_GET)) {
            echo false;
            exit;
        }

        // On récupère les résultats de recherche
        $customer = getCustomerById($_GET['customerNumber']);

        // Inclusion du template
        include 'customer_details.phtml';
        exit;

    // Modification d'un client
    case 'edit-customer':
        echo updateCustomer($_POST['data']);
        exit;

    default:
        echo false;
        exit;
}
//////////////////////////////////
if(!array_key_exists('customerNumber', $_GET)) {
    echo false;
    exit;
}

