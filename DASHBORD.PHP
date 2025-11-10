<?php
session_start();
if(!isset($_SESSION['username'])){
    // Redirect to login if not logged in
    header('Location: Login.php');
    exit();
}
require 'admin_dbcon.php';
$username = $_SESSION['username'];
$email = $_SESSION['email'] ;
$course = $_SESSION['course'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard - KULPI ITI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f3f6fb; }
        .dashboard-container {
            max-width: 1000px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            padding: 32px 24px;
        }
        .user-info {
            background: #e3eafc;
            border-radius: 8px;
            padding: 18px 24px;
            margin-bottom: 24px;
        }
        .dropdown-menu.show {
            min-width: 200px;
        }
        .section-content {
            display: none;
            margin-top: 24px;
        }
        .section-content.active {
            display: block;
        }
        .badge { font-size: 0.95em; }
        .down-btn {
            display: inline-block;
            text-decoration: none;
            padding: 6px 16px;
            background: #2d8cff;
            color: #fff;
            border-radius: 5px;
            font-weight: 500;
            transition: background 0.2s, transform 0.2s;
        }
        .down-btn:hover {
            background: #1857b1;
            transform: translateY(-2px) scale(1.06);
        }
        @media(max-width: 600px){
            .dashboard-container { padding: 12px 4px; }
        }
    </style>
</head>
<body>
<div class="dashboard-container">
    <h2 class="text-center mb-4">👨‍🎓 Student Dashboard</h2>
    <div class="user-info mb-4">
        <strong>Name:</strong> <?=htmlspecialchars($username)?> &nbsp; 
        <strong>Email:</strong> <?=htmlspecialchars($email)?> &nbsp; 
        <strong>Course:</strong> <?=htmlspecialchars($course)?>
        <a href="wepage.php" class="btn btn-danger btn-sm float-end">Logout</a>
    </div>
    <!-- Dropdown for Sections -->
    <div class="mb-4">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="sectionDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Select Section
            </button>
            <ul class="dropdown-menu" aria-labelledby="sectionDropdown">
                <li><a class="dropdown-item section-link" href="#" data-section="notice">Student Notice Board</a></li>
                <li><a class="dropdown-item section-link" href="#" data-section="results">Exam Results</a></li>
            </ul>
        </div>
    </div>
    <!-- Section: Notice Board -->
    <div id="section-notice" class="section-content active">
        <h4>📢 Student Notice Board</h4>
        <table class="table table-bordered table-striped mt-3">
            <thead class="table-primary">
                <tr>
                    <th>SL NO</th>
                    <th>DATE</th>
                    <th>NOTICE</th>
                    <th>DOWNLOAD</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $notice_sql="SELECT sl_no,notice_date,notice_title,file_path FROM notices ORDER BY notice_date DESC";
                $notice_result=$conn->query($notice_sql);
                $notice_sl=1;
                if($notice_result && $notice_result->num_rows>0){
                    while($notice=$notice_result->fetch_assoc()){
                        echo"<tr>";
                        echo"<td>".$notice_sl++."</td>";

                        echo"<td>".htmlspecialchars(date('d-m-y',strtotime($notice['notice_date'])))."</td>";
                        
                        echo"<td>".htmlspecialchars($notice['notice_title'])."</td>";

                        echo"<td><a href=' ".htmlspecialchars($notice['file_path'])." 'class='down-btn' download>Download</a></td>";
                        echo"</tr>";
                    }
                }else{
                    echo"<tr><td colspan='4'>No notice found.</td></tr>";
                }

                ?>
            
            </tbody>
        </table>
    </div>
    <!-- Section: Exam Results -->
    <div id="section-results" class="section-content">
        <h4>🎓 Exam Results</h4>
        <table class="table table-bordered table-striped mt-3">
            <thead class="table-warning">
                <tr>
                   <th>SL NO</th>
                    <th>EXAM</th>
                    <th>DATE</th>
                    <th>DOWNLOAD</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $stmt=$conn->prepare("SELECT exam_name,result_date,file_path FROM results WHERE student_email=? ORDER BY result_date DESC");
                $stmt->bind_param("s",$email);
                $stmt->execute();
                $res=$stmt->get_result();
                $result_sl=1;
                if($res && $res->num_rows>0){
                    while($row=$res->fetch_assoc()){
                        echo"<tr>";
                        echo"<td>".$result_sl++."</td>";

                        echo"<td>".htmlspecialchars($row['exam_name'])."</td>";

                        echo"<td>".htmlspecialchars(date('d-m-y',strtotime($row['result_date'])))."</td>";

                        echo"<td><a href=' ".htmlspecialchars($row['file_path'])." ' class='down-btn' download>Download</a></td>";
                        echo"</tr>";
                    }
                }else{
                    echo"<tr><td colspan='4'>No results found for you.</td></tr>";
                }
                $stmt->close();
                ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Dropdown section switcher
    document.querySelectorAll('.section-link').forEach(function(link){
        link.addEventListener('click', function(e){
            e.preventDefault();
            var section = this.getAttribute('data-section');
            document.querySelectorAll('.section-content').forEach(function(sec){
                sec.classList.remove('active');
            });
            document.getElementById('section-' + section).classList.add('active');
        });
    });
</script>
</body>
</html>
