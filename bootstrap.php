<?php

use Src\System\DatabaseConnector;

require 'vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$dbConnection = (new DatabaseConnector())->getConnection();