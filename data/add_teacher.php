<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $enrollment_date = $_POST['subject'];
    $email = $_POST['email'];
    $phone = $_POST['phoneNumber'];

    try {
        $stmt = $con->prepare("INSERT INTO Teachers (FirstName, LastName, Department, Email, PhoneNumber)
                               VALUES (:first_name, :last_name, :subject, :email, :phoneNumber)");
        $stmt->execute([
            ':first_name' => $first_name,
            ':last_name' => $last_name,
            ':subject' => $enrollment_date,
            ':email' => $email,
            ':phoneNumber' => $phone,

        ]);
        header("Location: view_teachers.php");
    } catch (PDOException $e) {
        die("فشل الإضافة: " . $e->getMessage());
    }
}
