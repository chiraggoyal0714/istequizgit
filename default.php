<?php
getDB();
function getDB() {
    $dbHost = 'localhost';
    $db     = 'iste';
    $dbUser = 'root';
    $db = new PDO("mysql:host=$dbHost;dbname=$db;charset=utf8mb4", $dbUser, "netcamp1");
    return $db;
}
?>
