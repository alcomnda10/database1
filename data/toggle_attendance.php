<?php
include 'db_connect.php';

if (isset($_GET['id']) && isset($_GET['status'])) {
    $attendanceID = $_GET['id'];
    $newStatus = $_GET['status'];

    try {
        $stmt = $con->prepare("UPDATE Attendance SET Status = :newStatus WHERE AttendanceID = :attendanceID");
        $stmt->execute([
            ':newStatus' => $newStatus,
            ':attendanceID' => $attendanceID
        ]);
        header("Location: view_attendance.php");
        exit();
    } catch (PDOException $e) {
        echo "فشل التحديث: " . $e->getMessage();
    }
}
