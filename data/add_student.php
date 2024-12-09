<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enrollment_date = $_POST['enrollment_date'];

    try {
        $stmt = $con->prepare("INSERT INTO Students (FirstName, LastName, Email, PhoneNumber, EnrollmentDate)
                               VALUES (:first_name, :last_name, :email, :phone, :enrollment_date)");
        $stmt->execute([
            ':first_name' => $first_name,
            ':last_name' => $last_name,
            ':email' => $email,
            ':phone' => $phone,
            ':enrollment_date' => $enrollment_date,
        ]);
        header("Location: view_students.php");
    } catch (PDOException $e) {
        die("فشل الإضافة: " . $e->getMessage());
    }
}
