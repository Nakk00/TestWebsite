<?php
$dsn = "pgsql:host=ep-shrill-mode-a5919pzh-pooler.us-east-2.aws.neon.tech;port=5432;dbname=Gallery_DB";
$dbusername = "Gallery_DB_owner";
$dbpassword = "npg_4aUZdMYWRj1N";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>