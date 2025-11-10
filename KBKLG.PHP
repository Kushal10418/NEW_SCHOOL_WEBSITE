<!DOCTYPE HTML>
<HTML>
    <head>
        <center>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <title>MY WEBSITE WELCOME</title>
        <style>
            body{
                padding:0;
                margin: 0;
                background:pink;
            }
            header{
                background-color:#008897;
                color:white;
                padding: 8px;
                text-align:center;
            }
            .from-container{
                width: 100%;
                max-width: 420px;
                margin-top:40px;
                background:#fff;
                padding:35px 30px;
                border-radius:14px;
                box-shadow:0 10px 30px rgba(0,0,0,0.2);
                animation:fadeln 1s ease;


            }
        </style>
    </head>
    <body>
        <header>
             <h1>GOVERNMENT ITI KULPI RUNNING UNDER PTP</h1>
        </header>
        <div class="from-container">
        <h1>MY WEBSITE WELCOME</h1>
        <form method="POST">
            <label for="name">STUDENT NAME:</label>
            <input type="text" id="name" name="name" placeholder="ENTER YOUR NAME" required>
            <label for="EMAIL">EMAIL ID:</label>
            <input type="text" id="EMAIL" name="EMAIL" placeholder="ENTER YOUR EMAIL" required>
            <label for="PASS">PASSWORD:</label>
            <input type="password" id="PASS" name="PASS" placeholder="ENTER YOUR PASSWORD" required>
            <input type="submit" name="sb">
        </form>
        </div>
        <?php
        include 'KUSHAL NEW.PHP';
        if(isset($_POST['sb'])){
            $name=$_POST['name'];
            $email=$_POST['EMAIL'];
            $password=$_POST['PASS'];
            $QUERY="INSERT INTO MYDATA(STUDENT_NAME,EMAIL_ID,PASWORD)VALUES('$name','$email','$password')";
            $execute=mysqli_query($CON,$QUERY);
            if($execute){
                echo"<script> alert('REGISTRATION SUSSESFULL');</script>";
            }else{
                echo"<script> alert('ERROR ALREADY REGISTER THE EMAIL ');</script>";
            }
        }
        ?>
    </body>
</HTML>