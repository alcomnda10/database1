<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $attendanceID = $_GET['id'];

    try {
        $stmt = $con->prepare("DELETE FROM Attendance WHERE AttendanceID = :attendanceID");
        $stmt->execute([':attendanceID' => $attendanceID]);
        header("Location: view_attendance.php");
        exit();
    } catch (PDOException $e) {
        echo "فشل الحذف: " . $e->getMessage();
    }
}
