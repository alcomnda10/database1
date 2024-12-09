<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>عرض الحضور</title>
</head>

<body dir='rtl' class='bg-light'>
    <div class="container mt-5">
        <h2 class="text-center">قائمة الحضور</h2>
        <a href="add_attendance_form.php" class="btn btn-success mb-3">إضافة سجل جديد</a>
        <table class="table table-bordered">
            <thead class='table-dark'>
                <tr>
                    <th>رقم الحضور</th>
                    <th>رقم الطالب</th>
                    <th>رقم الدورة</th>
                    <th>التاريخ</th>
                    <th>الحالة</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    $stmt = $con->prepare("SELECT * FROM Attendance");
                    $stmt->execute();
                    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($records as $record) {
                        $newStatus = $record['Status'] === 'Present' ? 'Absent' : 'Present';
                        echo "<tr>
                                <td>{$record['AttendanceID']}</td>
                                <td>{$record['StudentID']}</td>
                                <td>{$record['CourseID']}</td>
                                <td>{$record['Date']}</td>
                                <td>{$record['Status']}</td>
                                <td>
                                    <a href='toggle_attendance.php?id={$record['AttendanceID']}&status=$newStatus' class='btn btn-warning btn-sm'>تغيير إلى $newStatus</a>
                                    <a href='delete_attendance.php?id={$record['AttendanceID']}' class='btn btn-danger btn-sm' onclick='return confirm(\"هل أنت متأكد من حذف هذا السجل؟\");'>حذف</a>
                                </td>
                            </tr>";
                    }
                } catch (PDOException $e) {
                    echo "<tr><td colspan='6'>حدث خطأ: " . $e->getMessage() . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>