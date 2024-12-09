<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $stmt = $con->prepare("DELETE FROM Fees WHERE FeeID = :id");
        $stmt->execute([':id' => $id]);
        header("Location: view_fees.php");
    } catch (PDOException $e) {
        die("فشل الحذف: " . $e->getMessage());
    }
}
