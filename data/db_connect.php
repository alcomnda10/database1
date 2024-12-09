<?php
$dsn = 'mysql:host=localhost;dbname=SchoolManagement';
$user = 'root';
$pass = '';

try {
    $con = new PDO($dsn, $user, $pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "فشل الاتصال: " . $e->getMessage();
}
