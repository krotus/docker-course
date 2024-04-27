<?php

use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;

require_once __DIR__ . '/vendor/autoload.php';

$dbOptions = [
    'dbname' => getenv('MYSQL_DATABASE'),
    'user' => getenv('MYSQL_USER'),
    'password' => getenv('MYSQL_PASSWORD'),
    'host' => getenv('MYSQL_HOST'),
    'driver' => 'pdo_mysql',
];

$config = new Configuration();
$connection = DriverManager::getConnection($dbOptions, $config);
$queryBuilder = $connection->createQueryBuilder();
$qb = $queryBuilder->select('*')->from('users');
$users = $qb->executeQuery()->fetchAllAssociative();

var_dump($users);
