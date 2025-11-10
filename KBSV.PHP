<!DOCTYPE html>
<html>
    <head>
        <center>
        <title>MUY JAVASCRIPT</title>
    </head>
    <body>
        <h1>PHP NEW SERVER KUSHAL BERA</h1>
        <form method="POST">
        NAME:
        <input type="text" name="mname">
        FATHER NAME:
        <input type="text" name="fname">
        Date of Birth:
        <input type="date" name="dte">
        <input type="submit" name="sb">
        </form>
        <?php
        $con=mysqli_connect("localhost","root","SIMA","KUSHAL");
        if (!$con) {
            die("Failed to Connect to MYSQL:".mysqli_connect_error());
        }
        if(isset($_POST['sb'])){
            $name=$_POST['mname'];
            $fname=$_POST['fname'];
            $date=$_POST['dte'];

            $query="INSERT INTO mydata(NAME,FATHER,DATE_OF_BIRTH)VALUES('$name','$fname','$date')";
            $execute=mysqli_query($con,$query);
            if($execute){
                echo"<script>alert('SUCCESSFULLY REGIRSTED');</script>";
            }else {
                echo"ERROR THE REGISTER:".mysqli_error($con);
            }
        }
        ?>
    </body>
</html>