<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>عرض الدرجات</title>
</head>

<body dir='rtl' class='bg-light'>
    <div class="container mt-5">
        <h2 class="text-center mb-4">قائمة الدرجات</h2>
        <a href="add_grade_form.php" class="btn btn-success mb-3">إضافة درجة جديدة</a>
        <table class="table table-bordered">
            <thead class='table-dark'>
                <tr>
                    <th>رقم الدرجة</th>
                    <th>رقم الطالب</th>
                    <th>رقم الدورة</th>
                    <th>الدرجة</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    $stmt = $con->prepare("SELECT * FROM Grades");
                    $stmt->execute();
                    $grades = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($grades as $grade) {
                        echo "<tr>
                                <td>{$grade['GradeID']}</td>
                                <td>{$grade['StudentID']}</td>
                                <td>{$grade['CourseID']}</td>
                                <td>{$grade['Grade']}</td>
                                <td>
                                    <a href='edit_grade.php?id={$grade['GradeID']}' class='btn btn-warning btn-sm'>تعديل</a>
                                    <a href='delete_grade.php?id={$grade['GradeID']}' class='btn btn-danger btn-sm' onclick='return confirm(\"هل أنت متأكد من حذف هذه الدرجة؟\");'>حذف</a>
                                </td>
                            </tr>";
                    }
                } catch (PDOException $e) {
                    echo "<tr><td colspan='5'>حدث خطأ: " . $e->getMessage() . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>