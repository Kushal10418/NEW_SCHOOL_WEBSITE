<!DOCTYPE HTML>
<html>
<head>
<center>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset password</title>
  <style>
body{
         margin: 0;
        padding: 0;
        background:pink;
        font-family:sans-serif;  
    }
  header{
                background-color:#008897;
                color:white;
                padding: 8px;
                text-align:center;
            }

             .form-container{
               width:38%;
                    margin-top:33px ;
                    margin-bottom:34px;
	                  padding:18px;
	                border-radius:14px;
	                background:#ffffff;
	                    box-shadow: 13px 14px 10px rgba(0,0,0,0.1); 
            }
            .form-container h2{
    text-align:center;
    margin-bottom: 25px;
    font-size:28px;
    font-weight:bold;
    color:olivedrab;
}

form{
display:flex;
flex-direction:column;
}

label{
margin-top:12px;
text-align:left;
font-weight:bold;
}

input{
padding:8px;
margin-top:5px;
border-radius:4px;
border: 1px solid #333;
}

button{
width:40px;
margin-top:20px;
padding:5px;
border:none ;
border-radius:4px;
}

button[type="submit"]{
background: #778;
color:white;
cursor:pointer;
font-weight:bold;
width:120px;
font-size:14px;
}

button:hover{
   background:orange;
}
  </style>
  </head>
  <body>
      <header>
    <h1>GOVERNMENT ITI KULPI RUNNING UNDER PTP</h1>
</header>
<div class="form-container">
    <h2>RESET YOUR PASSWORD</h2>
    <form method="POST" action="">
        <label>NEW PASSWORD:</label>
        <input type="password" name="passnew" required placeholder="Enter Your New Password">
        <label>CONFIRM PASSWORD:</label>
        <input type="password" name="passcon" required placeholder="Enter Your Confirm Password">
        <button type="submit" name="reset">Reset Password</button>
    </form>
    <?php
include 'Database connection.php';
session_start();
if(!isset($_SESSION['reset_email'])){
  header("Location:forgot_password.php");
  exit();
}

if(isset($_POST['reset'])){
  $new_paassword=$_POST['passnew'];
  $confirm_password=$_POST['passcon'];
  $email=$_SESSION['reset_email'];
  if($new_paassword===$confirm_password)
  {
    $update_query="UPDATE users SET password='$new_paassword' WHERE email='$email'";
    if(mysqli_query($con,$update_query)){
      unset($_SESSION['reset_email']);
      echo"<script>alert('Password Successfully Update');
      window.location='login.php';</script>";
      exit();
    }else{
      echo "<script>alert('Database Error:Try again later');</script>";
    }
  }else{
    echo "<script>alert('Password do not match');</script>";
  }
}
    ?>
    </div>
  </body>
  </html>
