<!DOCTYPE html>
<html>
    <head>
        <title>MY WEBSITE</title>
    </head>
    <body>
        <h1>MY WEBSITE WELCOME</h1>
        <form method="POST">
            NAME :  <input type="text" name="name">
            EMAIL : <input type="text" name="MAIL">
            PASSWORD : <input type="password" name="PASS">
            <input type="submit" name="sb">
        </form>
        <?php
          //CONNECT TO MYSQL 
        $con=mysqli_connect('localhost','root','SIMA','users');
		
		//CHECK CONNECION
		if(!$con){
			die("FAiled to connect to MYSQL:".mysqli_connect_error());
		}
		
        if(isset($_POST['sb'])){
$name=$_POST['name'];
$email=$_POST['MAIL'];
$password=$_POST['PASS'];

$query="INSERT INTO mydata(name,email,password)VALUES ('$name', '$email', '$password')";
$execute=mysqli_query($con,$query);

if($execute){
	echo "DATA IS SUCCESSFULLY REGISTERD.";
}else{
	echo "ERROR:".mysqli_error($con);
}

}
   ?>

    </body>
</html>
