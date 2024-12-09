<?php
include 'db_connect.php'; // الاتصال بقاعدة البيانات

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $studentID = $_POST['StudentID'];
    $amount = $_POST['Amount'];
    $dueDate = $_POST['DueDate'];
    $status = $_POST['Status'];

    try {
        $sql = "INSERT INTO Fees (StudentID, Amount, DueDate, PaymentStatus)
                VALUES (:StudentID, :Amount, :DueDate, :Status)";
        $stmt = $con->prepare($sql);
        $stmt->execute([
            ':StudentID' => $studentID,
            ':Amount' => $amount,
            ':DueDate' => $dueDate,
            ':Status' => $status,
        ]);
        echo "تمت إضافة المصروف بنجاح!";
        echo '<a href="view_fees.php" class="btn btn-link">العودة إلى قائمة المصاريف</a>';
    } catch (PDOException $e) {
        echo "فشل الإضافة: " . $e->getMessage();
    }
}
