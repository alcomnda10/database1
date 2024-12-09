<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentID = $_POST['studentID'];
    $courseID = $_POST['courseID'];
    $grade = $_POST['grade'];

    try {
        $sql = "INSERT INTO Grades (StudentID, CourseID, Grade) VALUES (:studentID, :courseID, :grade)";
        $stmt = $con->prepare($sql);
        $stmt->execute([
            ':studentID' => $studentID,
            ':courseID' => $courseID,
            ':grade' => $grade
        ]);
        header("Location: view_grades.php");
    } catch (PDOException $e) {
        echo "فشل الإضافة: " . $e->getMessage();
    }
}
