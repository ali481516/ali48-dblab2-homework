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
$nickname = $_POST['nickname'];
$password = $_POST['password'];
$email = $_POST['email'];
$sql = "INSERT INTO user (nickname, password, email)
VALUES('{$nickname}', '{$password}', '{$email}')";
$result = $dbc->query($sql);
if ($result) {
    echo "Insert query executed successfully<br>";
} else {
    echo "Error:" . $sql . "<br>" . $dbc->error;
}


$dbc->close();
?>
