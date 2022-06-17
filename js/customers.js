'use strict';

/**
 * Affiche les informations détaillées d'un client à partir de son numéro
 * @param customerNumber - Le numéro du client dont on souhaite affciher les informations détaillées
 */
function showCustomerDetails(customerNumber)
{
    // Envoi d'une requête Ajax en GET avec la fonction jQuery $.get
    $.get(
        'ajax.php', // URL cible de la requête Ajax
        {action: 'get-customer-details', customerNumber: customerNumber},
         // Données transmises dans la requête
        onAjaxGetCustomerDetails
         // fonction de callback qui sera appelée
         // automatiquement lors de la réception de la réponse
    );
}

