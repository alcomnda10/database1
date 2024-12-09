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
    <title>إضافة مدرس</title>
</head>

<body>
    <h1 class="text-center">إضافة مدرس جديد</h1>

    <div class="container ">
        <form action="add_teacher.php" class="contact-form" method="POST">
            <div class="mb-3">
                <label>الاسم الأول:</label>
                <input type="text" name="first_name" placeholder="الاسم الاول" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>الاسم الأخير:</label>
                <input type="text" name="last_name" class="form-control"placeholder="الاسم الاخير" required>
            </div>
            <div>
                <label>المادة</label>
                <input type="text" name="subject" class="form-control" placeholder="اسم المادة" required>
            </div>

            <div class="mb-3">
                <label>البريد الإلكتروني:</label>
                <input type="email" name="email" class="form-control" placeholder="البريد" required>
                <i class="fa fa-envelope fa-fw" aria-hidden="true"></i>
            </div>
            <div class="mb-3">
                <label>رقم الهاتف:</label>
                <input type="text" name="phoneNumber" class="form-control" placeholder="رقم الهاتف" required>
                <i class="fa fa-phone fa-fw" aria-hidden="true"></i>

            </div>


            <button type="submit" class="btn btn-success">إضافة</button>
            <a href="view_teachers.php" class="btn btn-primary">اظهار القائمة</a>

        </form>
    </div>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>