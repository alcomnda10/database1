<?php
include 'db_connect.php';

if (isset($_GET['id']) && isset($_GET['status'])) {
    $feeID = $_GET['id'];
    $newStatus = $_GET['status'];

    try {
        $sql = "UPDATE Fees SET PaymentStatus = :newStatus WHERE FeeID = :feeID";
        $stmt = $con->prepare($sql);
        $stmt->execute([
            ':newStatus' => $newStatus,
            ':feeID' => $feeID,
        ]);
        header("Location: view_fees.php");
    } catch (PDOException $e) {
        echo "فشل التحديث: " . $e->getMessage();
    }
} else {
    echo "بيانات غير صحيحة.";
}
