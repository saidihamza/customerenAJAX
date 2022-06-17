'use strict';

/**
 * Callback - Recherche client
 * Affiche la liste des résultats de la recherche
 * @param customers - La réponse du serveur, les clients correspondants à la recherche
 */
function onAjaxSearchCustomer(customers)
{
    $('#results').empty();

    // On parcours le tableau de résultats customers récupéré en paramètre de la fonction onAjaxGetCustomers
    customers.forEach(function(customer) {

        // Pour chaque résultat on crée un élément <li>...
        const $li = $('<li>');

        // ... dans lequel on insère un élément <a> avec le nom du client, pour chaque client (chaque résultat)
        $('<a>')
            .text(customer.customerName)
            .data('customerNumber', customer.customerNumber)
            .attr('href', '#')
            .appendTo($li);

        // Enfin on insère le <li> dans la liste <ul>
        $('#results').append($li);
    });
}

/**
 * Callback - Détails client
 * Affiche le bloc de détails d'un client
 * @param customer - Les informations du client récupérées du serveur
 */
function onAjaxGetCustomerDetails(customer)
{
    $('#customer-details').html(customer).fadeIn();
}

/**
 * Callback - Modification d'un client
 * Affiche le client après modification
 * @param customerNumber - Le numéro de client du client mis à jour
 */
function onAjaxEditCustomer(customerNumber)
{
    if (customerNumber != false) {
        showCustomerDetails(customerNumber);
    }
}