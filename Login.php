<!DOCTYPE html>
<html>
    <head>
        <center>
            <meta charset="UTF-8">
            <title>Login Form</title>
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <style>
                body{
        margin: 0;
        padding: 0;
        background:pink;
        font-family:sans-serif;              
                }

                header{
    background-color: #003366;
    color: #fff;
    text-align: center;
    padding: 8px;
}
                
.login-container{
    background-color: white;
    padding: 40px 40px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    border-radius: 8px;
    max-width: 460px;
    width: 100%;
    
    margin-top: 70px;
}
.logo{
    text-align: center;
    margin-bottom: 30px;
}

.logo h1{
    color: #1877f2;
    font-size: 48px;
    font-weight: bold;
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, verdana, sans-serif;
}

label{
 margin-top:12px;
text-align:left;
font-weight:bold;
}

form input[type="text"],
form input[type="password"]{
    width: 100%;
    padding: 12px;
    margin-bottom: 18px;
    border:3px solid #dddfe2;
    border-radius: 6px;
    font-size: 16px;
}

.forgot-password{
    text-align: right;
    font-size: 14px;
    color: #1877f2;
    text-decoration: none;
    display: block;
    margin-bottom: 12px;
}

.create-account{
    background-color:#42b72a;
    color: white;
    border-radius: 6px;
    padding: 12px;
    text-align: center;
    display: block;
    text-decoration: none;
    cursor: pointer;
    margin-top: 12px;
}

button{
    background-color: #1877f2;
    color: white;
    font-size: 18px;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    padding: 12px;
    cursor: pointer;
    width: 100%;
}

button:hover{
    background-color: #155db2;
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

            </style>
    </head>
        <body>
            <header>
    <h1>KARANJALI STAR KIDS K.G SCHOOL</h1>
</header>
        <div class="login-container">
            <form method="POST">
            <div class="logo">
                <h1>STUDENT LOGIN</h1>
            </div>
            <form method="POST" action="">
        
                <input type="text" id="username" name="username" placeholder="Enter your name" required/>
                
                <input type="password" id="password" name="password" placeholder="Enter your password" required/>


                <button type="submit" name="bs">LOGIN</button>
                </form>

            <?php
session_start();
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;
$error='';
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $studentName=trim($_POST['username']??'');
    $password=trim($_POST['password']??'');

    $file='registation_data.xlsx';
    if(file_exists($file)){
        $spreadsheet=IOFactory::load($file);
        $sheet=$spreadsheet->getActiveSheet();
        $found=false;
        foreach
        ($sheet->getRowIterator(2)as $row){
            $rowIndex=$row->getRowIndex();
            $name=$sheet->getCell("B$rowIndex")->getValue();
            $email=$sheet->getCell("G$rowIndex")->getValue();
            $course=$sheet->getCell("E$rowIndex")->getValue();
            $pw=$sheet->getCell("I$rowIndex")->getValue();

            if($studentName===$name && $password===$pw){
                $_SESSION['username']=$name;
                $_SESSION['email']=$email;
                $_SESSION['course']=$course;
                
                $found=true;
                header('Location:DASHBORD.PHP');
                exit;
            }
        }
        if (!$found) $error="Invalid Username Or Password";
    }else{
        $error="Registration data file not found";
    }
}
?>
</div>
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
        <p><div class="font"><i class="fa-solid fa-square-envelope"></i> karanjalistarkids2018@gmail.com <i class="fa-solid fa-square-phone"></i> 7407330038</p></div>
    <p>Copyright &copy; Government Industrial Training Institute,Kulpi Running Under PTP</p>
        </footer>
</body>
</html>