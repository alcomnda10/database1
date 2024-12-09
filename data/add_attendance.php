<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentID = $_POST['studentID'];
    $courseID = $_POST['courseID'];
    $date = $_POST['date'];
    $status = $_POST['status'];

    try {
        $sql = "INSERT INTO Attendance (StudentID, CourseID, Date, Status) VALUES (:studentID, :courseID, :date, :status)";
        $stmt = $con->prepare($sql);
        $stmt->execute([
            ':studentID' => $studentID,
            ':courseID' => $courseID,
            ':date' => $date,
            ':status' => $status
        ]);
        header("Location: view_attendance.php");
    } catch (PDOException $e) {
        echo "فشل الإضافة: " . $e->getMessage();
    }
}
?>