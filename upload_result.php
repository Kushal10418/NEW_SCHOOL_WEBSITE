<?php
if($_SERVER["REQUEST_METHOD"]=="POST"
&&
isset($_FILES['result_file'])){

    require 'admin_dbcon.php';
    $email = $_POST['student_email'];
    $exam_name = $_POST['exam_name'];
    $date = $_POST['exam_date'];

    $fileName = $_FILES['result_file']['name'];
    $targetPath = "uploads/results/" . basename($fileName);

    if(move_uploaded_file($_FILES['result_file']['tmp_name'], $targetPath)){
        $sql = "INSERT INTO results(student_email, exam_name, result_date, file_path) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if($stmt){
            $stmt->bind_param("ssss", $email, $exam_name, $date, $targetPath);

            if($stmt->execute()){
                // Redirect to student dashboard on success
                header("Location:admin control.php?msg=Result uploaded successfully");
                exit();
            } else {
                echo "<script>
                alert('Database insertion failed.');
                window.location.href = 'admin control.php';
                </script>";
                exit();
            }
        
        } 
    } else {
        echo "<script>
        alert('File upload failed');
        window.location.href = 'admin control.php';
        </script>";
        exit();
    }
    
}
$conn->close();
?>