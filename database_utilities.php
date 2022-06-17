<?php

/**
 * Crée une connexion PDO à la base de données
 * @return PDO
 */
function getPDOConnection()
{

    /*
     * Construction d'un objet PDO représentant la connexion à la base de données.
     *
     * Le premier argument est un Data Source Name (DSN) représentant où est-ce qu'il
     * faut se connecter. Une adresse IP ou un nom de domaine peut être spécifié.
     *
     * /!\ Tout le DSN doit être écrit en minuscules et sans espaces.
     *
     */
    $pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    // Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
    $pdo->exec('SET NAMES UTF8');

    return $pdo;
}

/**
 * Exécute une requête SQL et retourne l'objet PDOStatement
 * @param string $sql La requête SQL à exécuter
 * @param array $params Un tableau de valeurs à injecter dans la requête SQL en remplacement des placeholders
 * @return bool|PDOStatement
 */
function executeQuery(string $sql, array $params = [])
{
	// Création de la connexion à la BDD
	$pdo = getPDOConnection();

	/*
     * Préparation de la requête SQL, PDO renvoie un objet de la classe PDOStatement
     * http://www.php.net/manual/fr/class.pdostatement.php
     *
     * On peut dire que cet objet représente la requête SQL, on appelle donc la
     * variable $query.
     */
    $query = $pdo->prepare($sql);


    // Demande à PDO d'envoyer la requête à MySQL pour exécution.
    $query->execute($params);

    return $query;
}
