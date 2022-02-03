<?php
$servername=getenv('HOSTNAME');
$username=getenv('USER');
$password=getenv('PASS');

try {
    // initiate connection
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // create database
    $sql = "CREATE DATABASE IF NOT EXISTS DATABASE_NAME";
    $conn->exec($sql);
    $sql = "use products";
    $conn->exec($sql);

    // TABLES
    $sql = "CREATE TABLE IF NOT EXISTS TABLE (
                id int AUTO_INCREMENT PRIMARY KEY)";
    $conn->exec($sql);

    // success message
    echo "migration successful";
}
// error message
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
