<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $courseID = $_GET['id'];

    // جلب البيانات الخاصة بالدورة
    try {
        $stmt = $con->prepare("SELECT * FROM Courses WHERE CourseID = :courseID");
        $stmt->bindParam(':courseID', $courseID);
        $stmt->execute();
        $course = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "فشل في جلب البيانات: " . $e->getMessage();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $courseName = $_POST['courseName'];
    $courseCode = $_POST['courseCode'];
    $schedule = $_POST['schedule'];

    try {
        $sql = "UPDATE Courses SET CourseName = :courseName, CourseCode = :courseCode, Schedule = :schedule WHERE CourseID = :courseID";
        $stmt = $con->prepare($sql);
        $stmt->execute([
            ':courseName' => $courseName,
            ':courseCode' => $courseCode,
            ':schedule' => $schedule,
            ':courseID' => $courseID
        ]);
        echo "تم تعديل الدورة بنجاح!";
    } catch (PDOException $e) {
        echo "فشل في التعديل: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>تعديل الدورة</title>
</head>

<body>
    <div class="container mt-5">
        <h2>تعديل الدورة</h2>
        <form action="edit_course.php?id=<?php echo $course['CourseID']; ?>" method="POST">
            <div class="mb-3">
                <label for="courseName" class="form-label">اسم الدورة</label>
                <input type="text" class="form-control" id="courseName" name="courseName" value="<?php echo $course['CourseName']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="courseCode" class="form-label">رمز الدورة</label>
                <input type="text" class="form-control" id="courseCode" name="courseCode" value="<?php echo $course['CourseCode']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="schedule" class="form-label">الجدول الزمني</label>
                <input type="text" class="form-control" id="schedule" name="schedule" value="<?php echo $course['Schedule']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">تعديل الدورة</button>
        </form>
    </div>
</body>

</html>
