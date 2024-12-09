<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $gradeID = $_GET['id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $grade = $_POST['grade'];

        try {
            $stmt = $con->prepare("UPDATE Grades SET Grade = :grade WHERE GradeID = :gradeID");
            $stmt->execute([
                ':grade' => $grade,
                ':gradeID' => $gradeID
            ]);
            header("Location: view_grades.php");
            exit();
        } catch (PDOException $e) {
            echo "فشل التحديث: " . $e->getMessage();
        }
    }

    try {
        $stmt = $con->prepare("SELECT * FROM Grades WHERE GradeID = :gradeID");
        $stmt->execute([':gradeID' => $gradeID]);
        $grade = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "فشل استرجاع البيانات: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>تعديل الدرجة</title>
</head>

<body>
    <div class="container mt-5">
        <h2>تعديل الدرجة</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="grade" class="form-label">الدرجة</label>
                <input type="text" class="form-control" id="grade" name="grade" value="<?php echo $grade['Grade']; ?>" maxlength="2" required>
            </div>
            <button type="submit" class="btn btn-primary">تحديث</button>
        </form>
    </div>
</body>

</html>