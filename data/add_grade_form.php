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
    <title>إضافة درجة</title>
</head>

<body>
    <h1 class="text-center">إضافة درجة</h1>

    <div class="container">
        <form action="add_grade.php" class="contact-form" method="POST">
            <div class="mb-3">
                <label for="studentID" class="form-label">رقم الطالب</label>
                <input type="number" class="form-control" placeholder="رقم الطالب" id="studentID" name="studentID" required>
            </div>
            <div class="mb-3">
                <label for="courseID" class="form-label">رقم الدورة</label>
                <input type="number" class="form-control" placeholder="رقم الدورة" id="courseID" name="courseID" required>
            </div>
            <div class="mb-3">
                <label for="grade" class="form-label">الدرجة</label>
                <input type="text" class="form-control" placeholder="درجات الطالب" id="grade" name="grade" maxlength="2" required>
            </div>
            <button type="submit" class="btn btn-primary">إضافة</button>
            <a href="view_grades.php" class="btn btn-primary">اظهار درجات الطلاب</a>
            <a href="view_students.php" class="btn btn-primary">اظهار قائمة الطلاب</a>
            <a href="view_courses.php" class="btn btn-primary">اظهار قائمة الدورة </a>
        </form>
    </div>
</body>

</html>