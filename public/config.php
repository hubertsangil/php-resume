<?php
$db_host = "ADD_HOST_NAME_HERE";
$db_port = "ADD_PORT_NUMBER_HERE";
$db_name = "resume_site";
$db_user = "ADD_USERNAME_HERE";
$db_pass = "ADD_PASSWORD_HERE";

try {
    $pdo = new PDO("pgsql:host=$db_host;port=$db_port;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
