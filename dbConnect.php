<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'ticketsystem_buli';


// Create connection
$mysqli = new mysqli($servername, $username, $password, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$mysqli->set_charset('utf8');

$result = '';
?>