<?php

declare(strict_types = 1);

//Database connection

function connect(): PDO{
    
    $pdo = new PDO("sqlite:" . DB_DIR . "/db.sqlite");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
}

function loadSchema(PDO $pdo, string $schemaFile): void{
    $sql = file_get_contents($schemaFile);

    if(!$sql){
        die("Failed to load schema file from database");
    } 

    $pdo->exec($sql);

    echo "Schema File was successfully uploaded!";
}

function insertTask(PDO $pdo, $string $task): bool{
    $sql = "INSERT INTO ";
}
//InsertTask function
//Delete Task function
//Check Task function and delete later
//Update Task function