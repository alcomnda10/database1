<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>عرض الطلاب</title>
</head>

<body dir='rtl' class='bg-light'>

    <div class="container mt-5">
        <h2 class="text-center mb-4">قائمة الطلاب</h2>
        <a href="add_student_form.php" class='btn btn-success mb-3'>إضافة طالب جديد</a>
        <table class="table table-bordered">
            <thead class='table-dark'>
                <tr>
                    <th>رقم الطالب</th>
                    <th>الاسم الأول</th>
                    <th>الاسم الأخير</th>
                    <th>تاريخ الميلاد</th>
                    <th>البريد الإلكتروني</th>
                    <th>رقم الهاتف</th>
                    <th>تاريخ التسجيل</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    $stmt = $con->prepare("SELECT * FROM Students");
                    $stmt->execute();
                    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($students as $student) {
                        echo "<tr>
                            <td>{$student['StudentID']}</td>
                            <td>{$student['FirstName']}</td>
                            <td>{$student['LastName']}</td>
                            <td>{$student['DOB']}</td>
                            <td>{$student['Email']}</td>
                            <td>{$student['PhoneNumber']}</td>
                            <td>{$student['EnrollmentDate']}</td>
                            <td>
                                <a href='update_student_form.php?id={$student['StudentID']}' class='btn btn-primary btn-sm'>تحديث</a>
                                <a href='delete_student.php?id={$student['StudentID']}' class='btn btn-danger btn-sm' onclick='return confirm(\"هل أنت متأكد من حذف هذا الطالب؟\");'>حذف</a>
                            </td>
                        </tr>";
                    }
                } catch (PDOException $e) {
                    echo "<tr><td colspan='8'>حدث خطأ: " . $e->getMessage() . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>