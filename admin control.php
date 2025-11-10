
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - KULPI ITI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body { background:linear-gradient(135deg,#0077cc,#00b4db,#36d1dc); }
        .container { max-width: 900px; margin-top: 40px; }
        .section { background: #ffffff; border-radius: 10px; padding: 25px; margin-bottom: 30px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);}
        h2 { margin-bottom: 20px; }
        form input[type="text"],
        [type="file"],
        [type="date"],
        [type="email"]
         {
            border: 2px solid wheat;
        }

        @keyframes fadeDown{
    from{
        opacity: 0;
        transform:translateY(-40);}
        to{opacity: 1; transform:translateY(0);}
    }
    @keyframes fadeIn{
        form{opacity: 0;}
        to{opacity: 1;}
    }

    @keyframes fadeUp{
        from{opacity: 0; transform:translateY(40px);}
        to{opacity: 1; translateY(0);}
    }
header{
    background:#333;
    color:white;
    text-align:center;
    padding: 25px 20px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
    position: relative;
    animation:fadeDown 0.9s ease;
}
.header-container{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:12px;
    flex-wrap:flex;
}
.header-container img{
    width: 90px;
    height:90px;
    border-radius:50%;
    box-shadow:0 0 8px rgba(255,255,255,0.4);
}

header h1{
    margin: 0;
    font-size:2rem;
    letter-spacing:1px;
}
.text h1{
    background-color: goldenrod;
    border-radius: 12px;
    padding: 2px;
}
footer{
    background:linear-gradient(135deg,#1e3c72,#2a5298);
    padding: 38px 0 18px; 
    text-align:center;
    color:white;
    margin-top:40px;
    animation:fadeUp 1s ease;
    box-shadow: 0  12px 8px rgba(255,250,0,0.1);
}

footer h3{
    margin-bottom:20px;
    font-size: 1.8rem;
    letter-spacing: 1px;
    color:beige;
}

footer p{
    font-size: 1.2rem;
    margin-top: 8px;
    opacity: 0.85;
}

.social-icons{
    display: flex;
    justify-content: center;
    gap: 18px;
    margin-bottom: 15px;
}
.social-icons a{
    display:flex;
    color:#1e3c72;
    width: 45px;
    height: 45px;
    font-size:1.9rem;
    text-decoration:none;
    transition:all 0.4s ease;
    background-color: white;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}

.social-icons a:hover{
  transform: translateY(-6px);
  background-color: #ffc107;
  color: #1e3c72;
  box-shadow:  0 6px 10px rgba(0,0,0,0.3);
}

.home a{
        display:inline-block;
        padding: 12px 28px;
        text-decoration:none;
        color:white;
        background:linear-gradient(90deg,#0077cc,#36d1dc);
        border-radius:30px;
        font-weight:bold;
        box-shadow:0 5px 15px rgba(0,119,204,0.3);
        transition:all 0.3s ease;
    }

    </style>
</head>
<body>
     <header>
        <div class="header-container">
            <h1>KARANJALI STAR KIDS K.G SCHOOL</h1>
        </div>
    </header>
<div class="container">
    <div class="text">
    <h1 class="text-center mb-4">Admin Dashboard</h1>
    </div>
    <a href="logout.php" class="btn btn-danger float-end mb-3">Logout</a>

    <div class="section">
        <h2>Upload Notice</h2>
        <form action="upload_notice.php" method="POST" enctype="multipart/form-data" class="row g-3">
            <div class="col-md-8">
                <label for="sl_no" class="form-label">SL NO</label>
                <input type="text" id="sl_no" name="sl_no" class="sl_no" class="form-control" placeholder="SL NO"required>
            </div>
            <div class="col-md-6">
        <label for="exam_date" class="form-label">Notice Upload Date</label>
        <input type="date" name="exam_date" id="exam_date" class="form-control" required>
    </div>
            <div class="col-md-8">
                <label for="notice_title" class="form-label">Notice Title</label>
                <input type="text" name="notice_title" id="notice_title" class="form-control" placeholder="Enter your Notice Title"required>
            </div>
            <div class="col-md-8">
                <label for="notice_file" class="form-label">Upload PDF File</label>
                <input type="file" name="notice_file" id="notice_file" class="form-control" accept="application/pdf" required>
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-primary w-100">Upload Notice</button>
            </div>
        </form>
    </div>

    <div class="section">
        <h2>Upload Exam Result</h2>
        <form action="upload_result.php" method="POST" enctype="multipart/form-data" class="row g-3">
    <div class="col-md-6">
        <label for="student_email" class="form-label">Student Email</label>
        <input type="email" name="student_email" id="student_email" class="form-control" placeholder="Student Email"required>
    </div>
    <div class="col-md-6">
        <label for="exam_name" class="form-label">Exam Name</label>
        <input type="text" name="exam_name" id="exam_name" class="form-control" placeholder="Exam Name"required>
    </div>
    <div class="col-md-6">
        <label for="exam_date" class="form-label">Result Upload Date</label>
        <input type="date" name="exam_date" id="exam_date" class="form-control" required>
    </div>
    
    <div class="col-md-6">
        <label for="result_file" class="form-label">Upload PDF File</label>
        <input type="file" name="result_file" id="result_file" class="form-control" accept="application/pdf" required>
    </div>
    <div class="col-12 d-flex justify-content-end">
        <button type="submit" class="btn btn-warning">Upload Result</button>
    </div>
</form>
    </div>
    <div class="section">
    <h2>Delete Notice</h2>
    <form action="delete_notice.php" method="post" class="row g-3">
        <div class="col-md-6">
            <label for="notice_title" class="form-label">Notice Title</label>
            <input type="text" name="notice_title" id="notice_title" class="form-control" placeholder="Notice Title" required>
        </div>
        <div class="col-md-6">
            <label for="notice_date" class="form-label">Notice Upload Date</label>
            <input type="date" name="notice_date" id="notice_date" class="form-control" required>
        </div>
        <div class="col-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-danger">Delete Notice</button>
        </div>
    </form>
</div>

<div class="section">
    <h2>Delete Result</h2>
    <form action="delete_result.php" method="post" class="row g-3">
        <div class="col-md-6">
            <label for="exam_name" class="form-label">Exam Name</label>
            <input type="text" name="exam_name" id="exam_name" class="form-control" placeholder="Exam Name" required>
        </div>
        <div class="col-md-6">
            <label for="student_email" class="form-label">Student Email</label>
            <input type="email" name="student_email" id="student_email" class="form-control" placeholder="Enter Student Email" required>
        </div>
        <div class="col-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-danger">Delete Result</button>
        </div>
    </form>
</div>
<div class="section">
    <div class="thank-you-container">
        <h1>Student Registration Form</h1>
        <div class="home">
        <a href="STUDENT SCHOOL.PHP">Click Here</a>
        </div>
    </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<footer>
        <h3>
            CONNECT WITH US
        </h3>
        <div class="social-icons">
<a href="#"><i class="fa-brands fa-square-facebook"></i></a>
<a href="#"><i class="fa-brands fa-square-youtube"></i></a>
<a href="#"><i class="fa-brands fa-square-instagram"></i></a>
<a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
<a href="#"><i class="fa-brands fa-square-twitter"></i></a>
        </div>
        <P>Vill- Dakshin Damodarpur P.O- Karanjali P.S- Kulpi Dist- South 24 Parganas Pin- 743348 West Bengal</P>
        <p><div class="font"><i class="fa-solid fa-square-envelope"></i>karanjalistarkids2018@gmail.com  <i class="fa-solid fa-square-phone"></i>7407330038</p></div>
    </footer>
</body>
</html>