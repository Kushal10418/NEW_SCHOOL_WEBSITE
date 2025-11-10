<!DOCTYPE html>
<html lang="btn">
    <head>
        <CENTER>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <title>MY WEBPAGE</title>
            <link rel="stylesheet" href="style1.css">
</head>
        <body>
            <div class="container">
                <div class="form-container">
            <form method="POST">
            <h1>MY REGISTRATION</h1>
            <div class="input-group">
                <label for="username"> STUDENT NAME:</label>
                 <input type="text" name="username" placeholder="Enter your name" required>
            </div>
            <div class="input-group">
                <label for="password">STUDENT PASSWORD:</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="submit-btn">
          <button type="submit" name="sb">REGISTER</button>
          </div>
            </form>
            </div>
            </div>
            <?php
            include 'Database connection.php';
            if(isset($_POST['sb'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
           $sql="INSERT INTO users(username,password)VALUES('$username','$password')";
           $execute=mysqli_query($con,$sql);
           if($execute){
           echo"REGISTRATION SUCCESSFULL";
            }else{
                echo"ERROR:".mysqli_error($con);
            }
        }
            ?>
        </body>
</html>