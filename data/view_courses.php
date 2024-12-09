<?php
include 'db_connect.php';

try {
    $stmt = $con->prepare("SELECT * FROM Courses");
    $stmt->execute();
    $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<!DOCTYPE html>";
    echo "<html lang='ar'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>إدارة الدورات</title>";
    echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' />";
    echo "</head>";
    echo "<body dir='rtl' class='bg-light'>"; // لضبط اتجاه النص إلى اليمين
    echo "<div class='container my-4'>";
    echo "<h2 class='text-center mb-4'>الدورات المسجلة</h2>";
    echo "<a href='add_course_form.php' class='btn btn-success mb-3'>إضافة دورة جديدة</a>"; // زر إضافة دورة جديدة
    echo "<table class='table table-bordered'>
            <thead class='table-dark'>
                <tr>
                    <th>رقم الدورة</th>
                    <th>اسم الدورة</th>
                    <th>رمز الدورة</th>
                    <th>الجدول الزمني</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>";
    foreach ($courses as $course) {
        echo "<tr>
                <td>{$course['CourseID']}</td>
                <td>{$course['CourseName']}</td>
                <td>{$course['CourseCode']}</td>
                <td>{$course['Schedule']}</td>
                <td>
                    <a href='edit_course.php?id={$course['CourseID']}' class='btn btn-warning btn-sm'>تعديل</a>
                    <a href='delete_course.php?id={$course['CourseID']}' class='btn btn-danger btn-sm' onclick='return confirm(\"هل أنت متأكد من حذف هذه الدورة؟\");'>حذف</a>
                </td>
            </tr>";
    }
    echo "</tbody></table>";
    echo "</div>"; // container
    echo "<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'></script>";
    echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js'></script>";
    echo "</body>";
    echo "</html>";
} catch (PDOException $e) {
    echo "فشل في استرجاع البيانات: " . $e->getMessage();
}
