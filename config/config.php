<?php
$db_host = // add credentials;
$db_port = // add credentials;
$db_name = // add credentials;
$db_user = // add credentials;
$db_pass = // add credentials;

try {
    $pdo = new PDO("pgsql:host=$db_host;port=$db_port;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
