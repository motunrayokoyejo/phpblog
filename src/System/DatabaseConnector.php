<?php

namespace Src\System;

class DatabaseConnector {

    private $databaseConnection = null;

    public function __construct()
    {
        $host = getenv('DB_HOST');
        $port = getenv('DB_PORT');
        $db = getenv('DB_DATABASE');
        $user = getenv('DB_USERNAME');
        $password = getenv('DB_PASSWORD');

        try {
            $this->databaseConnection = new \PDO(
                "mysql:host = $host; port=$port; charset=utf8mb4; dbname=$db", $user, $password
            );
        } catch (\PDOException $e){
            exit($e->getMessage());
        }
    }

    public function getConnection(){
        return $this->databaseConnection;
    }
}