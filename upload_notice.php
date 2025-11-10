<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" &&
isset($_FILES['notice_file'])) {
    require 'admin_dbcon.php';

    $sl_no = $_POST['sl_no'];
    $notice_title = $_POST['notice_title'];
    $date = $_POST['exam_date'];
    $fileName = $_FILES['notice_file']['name'];

    $targetPath = "uploads/notices/" . basename($fileName);

    if (move_uploaded_file($_FILES['notice_file']['tmp_name'], $targetPath)) {
        $sql = "INSERT INTO notices(sl_no, notice_date, notice_title, file_path) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $sl_no, $date, $notice_title, $targetPath);

        if ($stmt->execute()) {
            // Successful upload redirects to student dashboard
            header("Location:admin control.php?msg=Notice uploaded successfully");
            exit();
        } else {
            // If DB insertion fails, alert and redirect to admin control
            echo "<script>
                alert('Database insertion failed.');
                window.location.href = 'admin control.php';
                </script>";
            exit();
        }
        
    } else {
        // If file upload fails, alert and redirect to admin control
        echo "<script>
            alert('File upload failed.');
            window.location.href = 'admin control.php';
            </script>";
        exit();
    }
}
$conn->close();
?>