<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "t1";

$dbc = new mysqli($serverName, $userName, $password);

//Select Database
$dbc->select_db("{$dbname}");
if ($dbc->connect_error) {
    die("Connection failed:" . $dbc->connect_error);
}

//Query
$email = $_GET['email'];
$sql = "DELETE FROM user
        WHERE email = '{$email}'";
$result = $dbc->query($sql);
if ($result) {
    echo "query executed successfully<br>";
} else {
    echo "Error:" . $sql . "<br>" . $dbc->error;
}


$dbc->close();
?>