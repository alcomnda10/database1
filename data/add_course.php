<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $courseName = $_POST['courseName'];
    $courseCode = $_POST['courseCode'];
    $schedule = $_POST['schedule'];

    try {
        $sql = "INSERT INTO Courses (CourseName, CourseCode, Schedule) 
                VALUES (:courseName, :courseCode, :schedule)";
        $stmt = $con->prepare($sql);
        $stmt->execute([
            ':courseName' => $courseName,
            ':courseCode' => $courseCode,
            ':schedule' => $schedule
        ]);
        header("Location: view_courses.php");
    } catch (PDOException $e) {
        echo "فشل الإضافة: " . $e->getMessage();
    }
}
