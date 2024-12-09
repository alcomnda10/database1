<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enrollment_date = $_POST['enrollment_date'];

    try {
        $stmt = $con->prepare("UPDATE Students 
                               SET FirstName = :first_name, LastName = :last_name, DOB = :dob, Email = :email, PhoneNumber = :phone, EnrollmentDate = :enrollment_date
                               WHERE StudentID = :id");
        $stmt->execute([
            ':id' => $id,
            ':first_name' => $first_name,
            ':last_name' => $last_name,
            ':dob' => $dob,
            ':email' => $email,
            ':phone' => $phone,
            ':enrollment_date' => $enrollment_date,
        ]);
        header("Location: view_students.php");
    } catch (PDOException $e) {
        die("فشل التحديث: " . $e->getMessage());
    }
}
