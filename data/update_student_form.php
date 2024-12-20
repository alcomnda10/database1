<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $stmt = $con->prepare("SELECT * FROM Students WHERE StudentID = :id");
        $stmt->execute([':id' => $id]);
        $student = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("حدث خطأ: " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>تحديث طالب</title>
</head>

<body>
    <div class="container mt-5">
        <h2>تحديث بيانات الطالب</h2>
        <form action="update_student.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $student['StudentID']; ?>">
            <div class="mb-3">
                <label>الاسم الأول:</label>
                <input type="text" name="first_name" value="<?php echo $student['FirstName']; ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>الاسم الأخير:</label>
                <input type="text" name="last_name" value="<?php echo $student['LastName']; ?>" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label>تاريخ الميلاد:</label>
                <input type="date" name="dob" value="<?php echo $student['DOB']; ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>البريد الإلكتروني:</label>
                <input type="email" name="email" value="<?php echo $student['Email']; ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>رقم الهاتف:</label>
                <input type="text" name="phone" value="<?php echo $student['PhoneNumber']; ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>تاريخ التسجيل:</label>
                <input type="date" name="enrollment_date" value="<?php echo $student['EnrollmentDate']; ?>" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">تحديث</button>
        </form>
    </div>
</body>

</html>