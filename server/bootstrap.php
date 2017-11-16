<?php
require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'vendor', 'autoload.php']);
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
$entitiesPath = [
    join(DIRECTORY_SEPARATOR, [__DIR__, "lib", "Models"])
// le namespace et le repertoire des entités
];
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
// Connexion à la base de données
$dbParams = [
    'driver' => 'pdo_mysql', // le sgbd
    'host' => 'localhost', // l’adresse ip du serveur bdd
    'charset' => 'utf8',
    'user' => 'root', // login d’accés
    'password' => '', // mdp
    'dbname' => 'lpo', // nom BDD
];

$config = Setup::createAnnotationMetadataConfiguration(
    $entitiesPath,
    $isDevMode,
    $proxyDir,
    $cache,
    $useSimpleAnnotationReader
);
$entityManager = EntityManager::create($dbParams, $config);
return $entityManager;