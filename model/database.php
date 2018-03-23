<?php

require_once 'config/parameters.php';

$connection = new PDO("mysql:host="  . $db_host . ";dbname="  . $db_name, $db_user, $db_pass, [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8', lc_time_names = 'fr_FR';",
    PDO::ATTR_ERRMODE => pdo::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
]);

function getAllPhotos(): array {
    global $connection;
    
    $query = "SELECT
                id,
                img,
                title,
                nb_like,
                date_creation,
                DATE_FORMAT(date_creation, '%e %M %Y') AS 'date_creation_format'
            FROM photo
            ORDER BY date_creation DESC
            LIMIT 3;";
    
    $stmt = $connection->prepare($query);
    $stmt->execute();
    
    return $stmt->fetchAll();  
}

function getPhoto(int $id): array {
    global $connection;
    
    $query = "SELECT
                id,
                img,
                title,
                nb_like,
                date_creation,
                DATE_FORMAT(date_creation, '%e %M %Y') AS 'date_creation_format',
                description
            FROM photo
            WHERE id = :id;";
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    
    return $stmt->fetch();
} 