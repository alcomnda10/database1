<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $enrollment_date = $_POST['subject'];
    $email = $_POST['email'];
    $phone = $_POST['phoneNumber'];

    try {
        $stmt = $con->prepare("UPDATE Teachers 
                               SET FirstName = :first_name, LastName = :last_name, Department = :subject, Email = :email, PhoneNumber = :phoneNumber
                               WHERE TeacherID = :id");
        $stmt->execute([
            ':id' => $id,
            ':first_name' => $first_name,
            ':last_name' => $last_name,
            ':subject' => $enrollment_date,
            ':email' => $email,
            ':phoneNumber' => $phone,

        ]);
        header("Location: view_teachers.php");
    } catch (PDOException $e) {
        die("فشل التحديث: " . $e->getMessage());
    }
}
