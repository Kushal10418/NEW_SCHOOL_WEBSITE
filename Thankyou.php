<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    body{
        font-family:'Poppins', sans-serif;
         background:linear-gradient(135deg,#0077cc,#00b4db,#36d1dc);
        
    }

    header{
    background:#CCC;
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

.kushal{
    background-size:300% 300%;
         height:100vh;
         display: flex;
         justify-content:center;
         align-items:center;
         animation:gradientMove 8s ease infinite;
}
    @keyframes gradientMove{
        0%{background-position:0% 50%;}
        50%{background-position:100% 50%;}
        100%{background-position:0% 50%;}
    }

    .thank-you-container{
        background:rgba(255,255,255,0.95);
        padding: 50px 60px;
        border-radius:18px;
        box-shadow:0 10px 25px rgba(0,0,0,0.15);
        text-align:center;
        max-width:480px;
        animation:fadeIn 1s ease-in-out;
        backdrop-filter:blur(6px);
    }

    @keyframes fadeIn{
        from{opacity: 0; transform:scale(0.9);}
        to{opacity: 1; transform:scale(1);}
    }

    .tha-icon{
        font-size:65px;
        color:#00b894;
        margin-bottom:20px;
        animation:bounce 1.8s infinite ease-in-out;
    }

    @keyframes bounce{
        0% 100%{transform:translateY(0);}
        50%{transform:translateY(-10px);}
    }

    h1{
        color:#0077cc;
        margin-bottom:15px;
        font-weight:600;
        font-size:1.8rem;
    }
h2{
   color: #2c88c1;
   margin-bottom:12px;
}
    p{
        font-size:1.15rem;
        color:#333;
        line-height:1;
        margin-bottom:25px;
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

    a:hover{
        transform:translateY(-4px);
        background:linear-gradient(90deg,#005fa3,#29a1c5);
    }

    footer{
    background:#ccc;
    padding: 25px 20px; 
    text-align:center;
    color:#333;
    margin-top:40px
    animation:fadeUp 1s ease;
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

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
  </style>
  </head>
  <body>
    <header>
        <div class="header-container">
            <h1>KARANJALI STAR KIDS K.G SCHOOL</h1>
        </div>
    </header>
    <div class="kushal">
    <div class="thank-you-container">
        <div class="tha-icon">✅</div>
        <h1>Thank You for Your Submission </h1>
        <p>Your information has been recived succesfully.We'll get in touch with you shortly.</p>
        <div class="home">
        <a href="wepage.php">Back to Home Page</a>
        </div>
    </div>
    </div>
    <footer>
        <h2>
          KARANJALI STAR KIDS K.G SCHOOL
        </h2>
        <div class="social-icons">
<a href="#"><i class="fa-brands fa-square-facebook"></i></a>
<a href="#"><i class="fa-brands fa-square-youtube"></i></a>
<a href="#"><i class="fa-brands fa-square-instagram"></i></a>
<a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
<a href="#"><i class="fa-brands fa-square-twitter"></i></a>
        </div>
        <P>Vill- Dakshin Damodarpur P.O- Karanjali P.S- Kulpi Dist- South 24 Parganas Pin- 743348 West Bengal</P>
        <p>Email:karanjalistarkids2018@gmail.com   Phone: +917407330038</p>
    </footer>
  </body>
  