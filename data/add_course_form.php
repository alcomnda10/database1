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
    <title>إضافة دورة جديدة</title>
</head>

<body>
    <h1 class="text-center">إضافة دورة جديدة</h1>

    <div class="container">
        <form action="add_course.php" class="contact-form" method="POST">
            <div class="mb-3">
                <label for="courseName" class="form-label">اسم الدورة</label>
                <input type="text" class="form-control" placeholder="اسم الدورة" id="courseName" name="courseName" required>
            </div>
            <div class="mb-3">
                <label for="courseCode" class="form-label">رمز الدورة</label>
                <input type="text" class="form-control" placeholder="رمز الدورة" id="courseCode" name="courseCode" required>
            </div>
            <div class="mb-3">
                <label for="schedule" class="form-label">الجدول الزمني</label>
                <input type="text" class="form-control" placeholder="الجدول الزمني" id="schedule" name="schedule" required>
            </div>
            <button type="submit" class="btn btn-primary">إضافة الدورة</button>
            <a href="view_courses.php" class="btn btn-primary">اظهار الدورات</a>
        </form>
    </div>
</body>

</html>