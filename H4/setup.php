<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "t1";

$dbc = new mysqli($serverName, $userName, $password);

//Query 1
$sql = "CREATE DATABASE IF NOT EXISTS {$dbname}";
$result = $dbc->query($sql);
if ($result) {
    echo "Create database query executed successfully<br>";
} else {
    echo "Error:" . $sql . "<br>" . $dbc->error;
}

//Select Database
$dbc->select_db("{$dbname}");
if ($dbc->connect_error) {
    die("Connection failed:" . $dbc->connect_error);
}

//Query 2
$sql = "CREATE TABLE user( 
    `u#` INT NOT NULL AUTO_INCREMENT,
    `nickname` VARCHAR(50)  NOT NULL, 
    `password` VARCHAR(100)  NOT NULL, 
    `email` VARCHAR(100)  NOT NULL,
    `isAdmin` BOOLEAN,
    PRIMARY KEY(`u#`),
    UNIQUE(`email`)
)";
$result = $dbc->query($sql);
if ($result) {
    echo "Create table query executed successfully<br>";
} else {
    echo "Error:" . $sql . "<br>" . $dbc->error;
}

$dbc->close();

?>
