<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $courseID = $_GET['id'];

    try {
        $stmt = $con->prepare("DELETE FROM Courses WHERE CourseID = :courseID");
        $stmt->bindParam(':courseID', $courseID);
        $stmt->execute();
        header("Location: view_courses.php");  // إعادة التوجيه بعد الحذف
        exit();
    } catch (PDOException $e) {
        echo "فشل الحذف: " . $e->getMessage();
    }
}
?>
