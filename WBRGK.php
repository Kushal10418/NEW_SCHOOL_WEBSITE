<!DOCTYPE HTML>
<head>
<center>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <header>
    <h1>GOVERNMENT ITI KULPI RUNNING UNDER PTP</h1>
</header>
  <div class="form-container">
    <h2>STUDENT REGISTRATION</h2>
    <form method="POST">
        <div class="input-group">
            <i class="fa-solid fa-user"></i>
            <input type="text" id="username" name="username" placeholder="Enter your first name" required>
        </div>
        <div class="input-group">
             <i class="fa-solid fa-lock"></i>
             <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="input-group">
            <i class="fa-solid fa-envelope"></i>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-group">
             <i class="fa-solid fa-book"></i>
      <select id="course" name="course">
	  <option selected>Select the Course</option>
        <option value="INFORMATION TECHNOLOGY">INFORMATION TECHNOLOGY</option>
        <option value="FITTER">FITTER</option>
        <option value="DMC">DMC</option>
		<option value="RAC">RAC</option>
		<option value="WELDER">WELDER</option>
		<option value="SURVEYER">SURVEYER</option>
    <option value="ELETRICAN">ELETRICAN</option>
      </select>
        </div>
        <div class="submit-btn">
      <button type="Submit" name="kb">Register</button>
      </div>
	<h4>Already have an account?   <a href="Login.php" style="color: #00509e;text-decoration:none;font-weight:bold;">Login</a></h4>
	</form>
	<?php
            include 'Database connection.php';
            if(isset($_POST['kb'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
			$email=$_POST['email'];
			$course=$_POST['course'];
           $sql="INSERT INTO users(username,password,email,course)VALUES('$username','$password','$email','$course')";
           $execute=mysqli_query($con,$sql);
           if($execute){
      echo"<script> alert('REGISTRATION SUSSESFULL');</script>";
            }else{
                echo"<script> alert('ERROR ALREADY REGISTER THE EMAIL ');</script>";
            }
        }
            ?>
	  <style>
	  body{
        margin: 0;
        padding: 0;
	  background:linear-gradient(135deg,#0044cc,#33ccff);
	  }

     header{
    background-color: #003366;
    color: #fff;
    text-align: center;
    padding:8px;
}

	  .form-container{
	  width: 100%;
      max-width:420px;
      margin-top:40px;
      background:#fff;
      padding: 35px 30px;
      border-radius:15px;
      box-shadow:0 10px 30px rgba(0,0,0,0.2);
      animation:fadeln 1s ease;
	  }
.form-container h2{
    text-align:center;
    margin-bottom: 25px;
    font-size:28px;
    font-weight:bold;
    color:#d63031;
}

.input-group{
    margin-bottom:18px;
    position: relative;
}

.input-group i{
position: absolute;
top:50%;
left:12px;
transform:translateY(-50%);
color:#666;
font-size:18px;
pointer-events:none;
}
.input-group input, 
   .input-group input ,select{
    width: 100%;
    max-width: 350px;
    padding: 12px 14px 12px 42px;
    border-radius:8px;
    border:1.5px solid #ccc;
    font-size:16px;
    background-color:#fafafa;
    transition:all 0.3s ease;
}
.input-group input:focus,
.input-group select:focus{
    border-color:#ff758c;
    background-color:#fff;
    box-shadow:0 0 8px rgba(255,117,140,0.4);
    outline:none;
}
.submit-btn{
    text-align:center;
    margin-top:10px;
}

.submit-btn button{
    width:100%;
    padding: 14px;
    background:linear-gradient(135deg,#ff758c,#ff7eb3);
    color:#fff;
    border:none;
    border-radius:8px;
    font-size:18px;
    font-weight:bold;
    cursor:pointer;
    transition:all 0.3s ease;
}
.submit-btn button:hover{
    transform:translateY(-2px);
    box-shadow:0 6px 18px rgba(255,117,140,0.4);
}
.submit-btn button:active{
    transform:scale(0.97);
}
.form-container h4 {
    margin-top:20px;
    text-align:center;
    font-size:18px;
}
@keyframes fadeln{
    from{
        opacity:0;
        transform:translateY(20px);
    }

    to{
        opacity:1;
        translateY(0);
    }
}

footer{
                background:gray;
                color: black;
                margin-top:28px;
                padding: 16px ;
                font-family: Georgia, 'Times New Roman', Times, serif;
                text-align: center;
                font-style: oblique;
                font-weight: bold;
            }
            .footer-links{
                display: flex;
                gap: 26px;
                justify-content: center;
                align-items: center;
                margin-bottom: 16px;
                border-radius: 9px;

            }
    
            .footer-links a:hover img{
                transform: scale(1.1);
            }

            footer p{
                margin: 6px 0;
                line-height: 1.6;
                font-size: 15px;
            }

            footer strong{
                color: #f39c12;
                font-size: 28px;
            }
</style>
</div>
<footer>
            <div class="footer-links">
                <a href="https://www.skillindia.gov.in" target="blank">
                    <img src="IT/Skill.jpeg" width="80" height="60"  margin-left="14px" alt="skill"> 
                </a>
                <a href="https://dgt.gov.in" target="dgt">
                    <img src="IT/dga.jpeg" width="80" height="60" alt="skill2">
                </a>
                <a href="https://ncvtmis.gov.in" target="dgt">
                    <img src="IT/ncv.jpeg" width="80" height="60" alt="skill3">
                </a>
                <a href="https://mocktest.nimiquestionbank.in" target="dgt">
                    <img src="IT/JJ.jpeg" width="80" height="60" alt="skill4">
                </a>
                <a href="https://www.apprenticeshipindia.gov.in" target="dgt">
                    <img src="IT/na.jpeg" width="80" height="60" alt="skill4">
                </a>
                <a href="https://scvtwb.in" target="dgt">
                    <img src="IT/wb.jpeg" width="80" height="60" alt="skill4">
                </a>
            </div>
            <P><strong>Disclaimer:</strong> Contact Owned by Department Of Technical Education,Training And Skill Development,Government Of West Bengal
    </P>
    <br>
    <p>Copyright &copy; Government Industrial Training Institute,Kulpi Running Under PTP</p>
        </footer>
</body>
</html>