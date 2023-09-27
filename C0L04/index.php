<?php
/**
 * Server variabelen
 * SERVER
 * GET
 * POST
 */

$App = require 'private.php';
$dbconn = $App['database'];

$routes = [
    "/C0L04/" => "controllers/index.php",
    "/C0L04/about" => "controllers/about.php",
    "/C0L04/contact" => "controllers/contact.php",
    "/C0L04/details" => "controllers/details.php",
    "/C0L04/skills" => "controllers/skills.php",
];

if (array_key_exists($_SERVER['REQUEST_URI'], $routes)) {
    require $routes[$_SERVER['REQUEST_URI']];
} else {
    echo "you absolute baffoon.";
}

/**
 * Routing
 * Waar in de applicatie ben je?
 *
 * Voor het gebruik gaan we er gebruik van maken van de volgende opbouw
 * - index(home)
 * - contact
 * - details
 *      - profiel
 *      - cijfers
 *      - ervaringen
 *      - hobby
 * - about
 */




/**
 * PDO - connect to database
 *
 */

try {
    $conn = new PDO("mysql:host=$dbconn[servername];dbname=$dbconn[dbname]",
    $dbconn['username'], $dbconn['hinoxio']);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
