<!DOCTYPE HTML>
<html>
<head>
<center>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
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
    color:#d63031;
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
background:olivedrab;
color:white;
cursor:pointer;
font-weight:bold;
width:64px;
}

button:hover{
   background:orange;
}
  </style>
</head>
<body>
      <header>
    <h1>KARANJALI STAR KIDS K.G SCHOOL</h1>
</header>
<div class="form-container">
    <h2>FORGOT PASSWORD</h2>
    <form method="POST" action="">
        <label>Enter Your Register Email:</label>
        <input type="email" name="email" required placeholder="Enter Your Email">
        <button type="submit" name="submit_email">Submit</button>
    </form>
    <?php
    include 'Database connection.php';
    session_start();

    if(isset($_POST['submit_email'])){
        $email=$_POST['email'];
        $query="SELECT*FROM users WHERE email='$email'";

        $result=mysqli_query($con,$query);
        if(mysqli_num_rows($result)==1){
            $_SESSION['reset_email']=$email;
            header("Location:reset_password.php");
            exit();
        }else{
            echo"<script>alert('Invalid Email Address');</script>";
        }
    }
    ?>
    </div>
</body>
</html>