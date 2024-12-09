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
    <title>إضافة الحضور</title>
</head>

<body>
    <h1 class="text-center">إضافة الحضور</h1>
    <div class="container ">

        <form action="add_attendance.php" class="contact-form" method="POST">
            <div class="mb-3">
                <label for="studentID" class="form-label">رقم الطالب</label>
                <input type="number" class="form-control" placeholder="رقم الطالب" id="studentID" name="studentID" required>
            </div>
            <div class="mb-3">
                <label for="courseID" class="form-label">رقم الدورة</label>
                <input type="number" class="form-control" placeholder="رقم الدورة" id="courseID" name="courseID" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">التاريخ</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">الحالة</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="Present">حاضر</option>
                    <option value="Absent">غائب</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">إضافة</button>
            <a href="view_attendance.php" class="btn btn-primary">اظهار القائمة</a>
            <a href="view_students.php" class="btn btn-primary">اظهار قائمة الطلاب</a>
            <a href="view_courses.php" class="btn btn-primary">اظهار قائمة الدورة </a>

        </form>
    </div>
</body>

</html>