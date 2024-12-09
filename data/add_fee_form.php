<?php
include 'db_connect.php'; // الاتصال بقاعدة البيانات
?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style11.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>إضافة مصروف جديد</title>
</head>

<body>
    <h1 class="text-center">إضافة مصروف جديد</h1>

    <div class="container">
        <form action="add_fee.php" class="contact-form" method="POST">
            <div class="form-group">
                <label for="StudentID" class="form-label">رقم الطالب</label>
                <input type="number" class="form-control" id="StudentID" name="StudentID" placeholder="أدخل رقم الطالب" required>
            </div>
            <div class="form-group">
                <label for="Amount" class="form-label">المبلغ</label>
                <input type="number" class="form-control" id="Amount" name="Amount" placeholder="أدخل المبلغ" required>
            </div>
            <div class="form-group">
                <label for="DueDate" class="form-label">تاريخ الدفع</label>
                <input type="date" class="form-control" id="DueDate" name="DueDate" required>
            </div>
            <div class="form-group">
                <label for="PaymentStatus" class="form-label">الحالة</label>
                <select class="form-control" id="PaymentStatus" name="Status" required>
                    <option value="مدفوعة">مدفوعة</option>
                    <option value="غير مدفوعة">غير مدفوعة</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary send-icon">إضافة</button>
            <a href="view_fees.php" class="btn btn-info ">إلغاء</a>
            <a href="view_fees.php" class="btn btn-primary view">اظهار القائمة</a>

        </form>
    </div>
</body>

</html>