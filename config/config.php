<?php
$db_host = 'localhost';
$db_port = '5432';
$db_name = 'resume_site';
$db_user = 'hubert';
$db_pass = 'xcd2_baconpancakes00';

try {
    $pdo = new PDO("pgsql:host=$db_host;port=$db_port;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
