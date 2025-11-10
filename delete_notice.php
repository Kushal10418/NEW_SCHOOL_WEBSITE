<?php
include 'admin_dbcon.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $notice_title = $_POST['notice_title'];
    $notice_date = $_POST['notice_date'];

    $stmt = $conn->prepare("DELETE FROM notices WHERE notice_title = ? AND notice_date = ?");
    $stmt->bind_param("ss", $notice_title, $notice_date);

    if ($stmt->execute()) {
        echo "<script>alert('Notice deleted successfully!'); window.location.href='admin control.php';</script>";
    } else {
        echo "<script>alert('Failed to delete notice. Please try again.'); window.location.href='admin control.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
