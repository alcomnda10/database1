<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>إدارة البيانات</title>
    <style>
        body {
            background-color: #dbdee3;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #495057;
            height: 100%;
            margin: 0;
        }

        .container {
            max-width: 900px;
            margin-top: 60px;
        }

        h1 {
            font-size: 3rem;
            color: #343a40;
            font-weight: 700;
            text-align: center;
            margin-bottom: 40px;
            text-transform: uppercase;
        }

        .section-title {
            font-size: 1.6rem;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 25px;
            text-align: center;
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
            margin-top: 30px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .card-body {
            padding: 30px;
            text-align: center;
        }

        .btn {
            font-size: 1.1rem;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn-success {
            background: linear-gradient(45deg, #28a745, #218838);
            border: none;
            color: white;
        }

        .btn-success:hover {
            background: linear-gradient(45deg, #218838, #28a745);
            transform: translateY(-4px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background: linear-gradient(45deg, #007bff, #0056b3);
            border: none;
            color: white;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #0056b3, #007bff);
            transform: translateY(-4px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .btn-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-icon i {
            font-size: 1.3rem;
        }

        @media (max-width: 768px) {
            .container {
                margin-top: 30px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>إدارة البيانات</h1>

        <!-- قسم الأزرار للإضافة -->
        <div class="section-title">إضافة بيانات</div>
        <div class="btn-container">
            <div class="card">
                <div class="card-body">
                    <a href="add_teacher_form.php" class="btn btn-success btn-icon">
                        <i class="bi bi-person-plus"></i> إضافة مدرس جديد
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="add_student_form.php" class="btn btn-success btn-icon">
                        <i class="bi bi-person-add"></i> إضافة طالب جديد
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="add_course_form.php" class="btn btn-success btn-icon">
                        <i class="bi bi-book-plus"></i> إضافة دورة جديدة
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="add_attendance_form.php" class="btn btn-success btn-icon">
                        <i class="bi bi-calendar-plus"></i> إضافة الحضور
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="add_grade_form.php" class="btn btn-success btn-icon">
                        <i class="bi bi-star"></i> إضافة درجة
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="add_fee_form.php" class="btn btn-success btn-icon">
                        <i class="bi bi-cash"></i> إضافة مصروف جديد
                    </a>
                </div>
            </div>
        </div>

        <!-- قسم الأزرار لعرض البيانات -->
        <div class="section-title">عرض البيانات</div>
        <div class="btn-container">
            <div class="card">
                <div class="card-body">
                    <a href="view_teachers.php" class="btn btn-primary btn-icon">
                        <i class="bi bi-person-lines-fill"></i> عرض قائمة المدرسين
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="view_students.php" class="btn btn-primary btn-icon">
                        <i class="bi bi-person-bounding-box"></i> عرض قائمة الطلاب
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="view_courses.php" class="btn btn-primary btn-icon">
                        <i class="bi bi-book-fill"></i> عرض قائمة الدورات
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="view_attendance.php" class="btn btn-primary btn-icon">
                        <i class="bi bi-calendar-check"></i> عرض قائمة الحضور
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="view_grades.php" class="btn btn-primary btn-icon">
                        <i class="bi bi-trophy"></i> عرض قائمة الدرجات
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="view_fees.php" class="btn btn-primary btn-icon">
                        <i class="bi bi-wallet2"></i> عرض قائمة المصاريف
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>

</html>