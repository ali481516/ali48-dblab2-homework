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
    echo "query executed successfully<br>";
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
    `nickname` VARCHAR(50), 
    `password` VARCHAR(100), 
    `email` VARCHAR(100),
    `isAdmin` BOOLEAN,
    PRIMARY KEY(`u#`),
    UNIQUE(`email`)
)";
$result = $dbc->query($sql);
if ($result) {
    echo "query executed successfully<br>";
} else {
    echo "Error:" . $sql . "<br>" . $dbc->error;
}

$dbc->close();

?>