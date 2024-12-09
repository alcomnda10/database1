<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>عرض المصاريف</title>
</head>

<body dir='rtl' class='bg-light'>
    <div class="container mt-5">
        <h2 class="text-center">قائمة المصاريف</h2>
        <a href="add_fee_form.php" class="btn btn-success mb-3">إضافة مصروف جديد</a>
        <table class="table table-bordered">
            <thead class='table-dark'>

                <tr>
                    <th>رقم المصروف</th>
                    <th>رقم الطالب</th>
                    <th>المبلغ</th>
                    <th>تاريخ الدفع</th>
                    <th>حالة الدفع</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    $stmt = $con->prepare("SELECT * FROM Fees");
                    $stmt->execute();
                    $fees = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($fees as $fee) {
                        $newStatus = $fee['PaymentStatus'] === 'مدفوعة' ? 'غير مدفوعة' : 'مدفوعة';
                        echo "<tr>
                            <td>{$fee['FeeID']}</td>
                            <td>{$fee['StudentID']}</td>
                            <td>{$fee['Amount']}</td>
                            <td>{$fee['DueDate']}</td>
                            <td>{$fee['PaymentStatus']}</td>
                            <td>
                                <a href='toggle_fee_status.php?id={$fee['FeeID']}&status=$newStatus' class='btn btn-warning btn-sm'>تغيير إلى $newStatus</a>
                                <a href='delete_fee.php?id={$fee['FeeID']}' class='btn btn-danger btn-sm' onclick='return confirm(\"هل أنت متأكد من حذف هذا المصروف؟\");'>حذف</a>
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