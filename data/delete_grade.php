<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $gradeID = $_GET['id'];

    try {
        $stmt = $con->prepare("DELETE FROM Grades WHERE GradeID = :gradeID");
        $stmt->execute([':gradeID' => $gradeID]);
        header("Location: view_grades.php");
        exit();
    } catch (PDOException $e) {
        echo "فشل الحذف: " . $e->getMessage();
    }
}
