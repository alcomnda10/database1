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
    <title>إضافة طالب</title>
</head>

<body>


    <h1 class="text-center">إضافة طالب جديد</h1>

    <div class="container">
        <form action="add_student.php" class="contact-form" method="POST">
            <div class="form-group">
                <label>الاسم الأول:</label>
                <input type="text" name="first_name" placeholder="ادخل الاسم الاول" class="form-control" required>
            </div>
            <div class="form-group">
                <label>الاسم الأخير:</label>
                <input type="text" name="last_name" class="form-control" placeholder="ادخل الاسم الاخير" required>
            </div>
            <div class="form-group">
                <label>تاريخ الميلاد:</label>
                <input type="date" name="dob" class="form-control" required>
            </div>
            <div class="form-group">
                <label>البريد الإلكتروني:</label>
                <input type="email" name="email" class="form-control" placeholder="البريد" required>
                <i class="fa fa-envelope fa-fw" aria-hidden="true"></i>

            </div>
            <div class="form-group">
                <label>رقم الهاتف:</label>
                <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف" required>
                <i class="fa fa-phone fa-fw" aria-hidden="true"></i>

            </div>
            <div class="form-group">
                <label>تاريخ التسجيل:</label>
                <input type="date" name="enrollment_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">إضافة</button>
            <a href="view_students.php" class="btn btn-primary">اظهار القائمة</a>

        </form>
    </div>
</body>

</html>