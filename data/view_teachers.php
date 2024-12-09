<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>عرض المدرسين</title>
</head>

<body dir='rtl' class='bg-light'>
    <div class="container mt-5">
        <h2 class="text-center mb-4">قائمة المدرسين</h2>
        <a href="add_teacher_form.php" class="btn btn-success mb-3">إضافة مدرس جديد</a>
        <table class="table table-bordered">
            <thead class='table-dark'>
                <tr>
                    <th>رقم المدرس</th>
                    <th>الاسم الأول</th>
                    <th>الاسم الأخير</th>
                    <th>البريد الإلكتروني</th>
                    <th>رقم الهاتف</th>
                    <th>المادة</th>
                    <th>الاجراءات</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    $stmt = $con->prepare("SELECT * FROM Teachers");
                    $stmt->execute();
                    $teachers = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($teachers as $teacher) {
                        echo "<tr>
                            <td>{$teacher['TeacherID']}</td>
                            <td>{$teacher['FirstName']}</td>
                            <td>{$teacher['LastName']}</td>
                            <td>{$teacher['Email']}</td>
                            <td>{$teacher['PhoneNumber']}</td>
                            <td>{$teacher['Department']}</td>
                            <td>
                                <a href='update_teachers_form.php?id={$teacher['TeacherID']}' class='btn btn-primary btn-sm'>تحديث</a>
                                <a href='delete_teachers.php?id={$teacher['TeacherID']}' class='btn btn-danger btn-sm' onclick='return confirm(\"هل أنت متأكد من حذف هذا المدرس؟\");'>حذف</a>
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