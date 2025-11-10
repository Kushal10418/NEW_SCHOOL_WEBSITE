<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>KULPI ITI WEBSITE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
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
    <h1> KARANJALI STAR KIDS K.G SCHOOL</h1>
</header>
<nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-primary" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#wrapper">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#COU">COURSE</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="FAC" id="facultyDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            STUDENT FACULTY
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="facultyDropdown">
                            <li><a class="dropdown-item" href="event.php">SCHOOL EVENT</a></li>
                            <li><a class="dropdown-item" href="#FAC">TEACHERS</a></li>
                            <li> <a class="dropdown-item" href="Login.php">STUDENT LOGIN</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="STUDENT ADMISON.php">ONLINE ADMISON</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin login.php">ADMIN LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#CON">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

       <div class="wrapper">
        <input type="radio" name="slide" id="one" checked>
        <input type="radio" name="slide" id="two">
        <input type="radio" name="slide" id="three">
        <input type="radio" name="slide" id="four">
        <input type="radio" name="slide" id="five">

        <div class="image-container">
            <div class="img img-1">
                <img src="kinds/kd1.jpg" alt="img1" width="100%" height="570">
                <div class="marquee-text">
  <div class="marquee">
    <span>
      <strong>WELCOME TO KARANJALI STAR KIDS K.G SCHOOL</strong>
      &nbsp;&nbsp;&nbsp;
      <em>ADMISON OPEN 2025</em>
    </span>
  </div>
</div>
            </div>

            <div class="img img-2">
                <img src="kinds/kd2.jpg" alt="img2" width="100%" height="570">
                <div class="marquee-text">
  <div class="marquee">
    <span>
      <strong>WELCOME TO KARANJALI STAR KIDS K.G SCHOOL</strong>
      &nbsp;&nbsp;&nbsp;
      <em>ADMISON OPEN 2025</em>
    </span>
  </div>
</div>
            </div>

            <div class="img img-3">
                <img src="kinds/kaa.jpg" alt="img3" width="100%" height="900">
                <div class="marquee-text">
  <div class="marquee">
    <span>
      <strong>WELCOME TO KARANJALI STAR KIDS K.G SCHOOL</strong>
      &nbsp;&nbsp;&nbsp;
      <em>ADMISON OPEN 2025</em>
    </span>
  </div>
</div> 
        </div>

            <div class="img img-4">
                <img src="kinds/kd4.jpg" alt="img4" width="100%" height="570">
                <div class="marquee-text">
  <div class="marquee">
    <span>
      <strong>WELCOME TO KARANJALI STAR KIDS K.G SCHOOL</strong>
      &nbsp;&nbsp;&nbsp;
      <em>ADMISON OPEN 2025</em>
    </span>
  </div>
</div>     
            </div>
            <div class="img img-5">
                <img src="kinds/kd5.jpg" alt="img5" width="100%" height="570">
                <div class="marquee-text">
  <div class="marquee">
    <span>
      <strong>WELCOME TO KARANJALI STAR KIDS K.G SCHOOL</strong>
      &nbsp;&nbsp;&nbsp;
      <em>ADMISON OPEN 2025</em>
    </span>
  </div>
</div>
            </div>
            </div>

            <div class="slider">
                <label for="one" class="one"></label>
                <label for="two" class="two"></label>
                <label for="three" class="three"></label>
                <label for="four" class="four"></label>
                <label for="five" class="five"></label>
            </div>
        </div>


        <section id="about">
            <h2>About Us</h2>
            <p><strong>DEAR PARENTS

WELCOME TO KARANJALI STAR KIDS K.G SCHOOL First School </strong>We are proud to be a Trust School where every child is valued and respected. Our aim is to provide a caring, safe, secure and stimulating environment, where your child is encouraged to become self-confident and self-disciplined.

We believe that the partnership that develops between parents/carers and school is crucial to the very best learning and teaching. You are invited to be involved in your child's education.

I am very proud to be part of the Kindergarten community and look forward to developing a positive relationship between home and school. Working in partnership, we can ensure that your child enjoys their time with. We believe that potential is without limit if you are motivated and engaged.

This prospectus is an introduction to our school. Please visit, telephone or write to me for further information.

Kindest regards

</p>
        </section>
        <section id="COU">
            <h2>Our Course</h2>
            <div class="Course-list">
                <div class="Course-trade">
                <img src="kinds/co1.jpg" alt="INFORMATION TECHNOLOGY ">
                <h3>Play HOME&P.N</h3>
                <p><strong>QUALIFICATION:</strong>
                <P><strong>Age limited:</strong>3 Years</P>
                 <P><strong>DURATION:</strong>1 Years</P>
                  <P><strong>EXAM LEVEL:</strong>3 Unit</P>
                   <P><strong>CLASS ROOM:</strong>20 Sq.mtr</P>
                    <P><strong>AFFILLIATION:</strong>Trust-2018</P>
                </div>
                <div class="Course-trade">
                <img src="kinds/co2.jpg" alt="ELECTRICIAN">
                <h3>L.K.G</h3>
               <p><strong>QUALIFICATION:</strong>
                <P><strong>Age limited:</strong>4 Years</P>
                 <P><strong>DURATION:</strong>1 Years</P>
                  <P><strong>EXAM LEVEL:</strong>3 Unit</P>
                   <P><strong>CLASS ROOM:</strong>20 Sq.mtr</P>
                    <P><strong>AFFILLIATION:</strong>Trust-2018</P>
                </div>
                <div class="Course-trade">
                <img src="kinds/co3.jpg" alt="DRAUGHTSMAN CIVIL">
                <h3>U.K.G</h3>
                <p><strong>QUALIFICATION:</strong>
                <P><strong>Age limited:</strong>5 Years</P>
                 <P><strong>DURATION:</strong>1 Years</P>
                  <P><strong>EXAM LEVEL:</strong>3 Unit</P>
                   <P><strong>CLASS ROOM:</strong>20 Sq.mtr</P>
                    <P><strong>AFFILLIATION:</strong>Trust-2018</P>
                </div>
                <div class="Course-trade">
                <img src="kinds/co4.jpg" alt="FITTER ">
                <h3>CLASS-1</h3>
                <p><strong>QUALIFICATION:</strong>
                <P><strong>Age limited:</strong>6+ Years</P>
                 <P><strong>DURATION:</strong>1 Years</P>
                  <P><strong>EXAM LEVEL:</strong>3 Unit</P>
                   <P><strong>CLASS ROOM:</strong>20 Sq.mtr</P>
                    <P><strong>AFFILLIATION:</strong>Trust-2018</P>
                </div>
                <div class="Course-trade">
                <img src="kinds/co5.jpg" alt="REFRIGERATION AND AIR CONDITIONER TECHNICIAN ">
                <h3>CLASS-2</h3>
                <p><strong>QUALIFICATION:</strong>
                <P><strong>Age limited:</strong>7+ Years</P>
                 <P><strong>DURATION:</strong>1 Years</P>
                  <P><strong>EXAM LEVEL:</strong>3 Unit</P>
                   <P><strong>CLASS ROOM:</strong>20 Sq.mtr</P>
                    <P><strong>AFFILLIATION:</strong>Trust-2018</P>
                </div>
                <div class="Course-trade">
                <img src="kinds/co6.jpg" alt="SURVEYOR">
                <h3>CLASS-3</h3>
                <p><strong>QUALIFICATION:</strong>
                <P><strong>Age limited:</strong>8+ Years</P>
                 <P><strong>DURATION:</strong>1 Years</P>
                  <P><strong>EXAM LEVEL:</strong>3 Unit</P>
                   <P><strong>CLASS ROOM:</strong>20 Sq.mtr</P>
                    <P><strong>AFFILLIATION:</strong>Trust-2018</P>
                </div>
                <div class="Course-trade">
                <img src="kinds/kd4.jpg" alt="WELDER">
                <h3>CLASS-4</h3>
                <p><strong>QUALIFICATION:</strong>
                <P><strong>Age limited:</strong>9+ Years</P>
                 <P><strong>DURATION:</strong>1 Years</P>
                  <P><strong>EXAM LEVEL:</strong>3 Unit</P>
                   <P><strong>CLASS ROOM:</strong>20 Sq.mtr</P>
                    <P><strong>AFFILLIATION:</strong>Trust-2018</P>
                </div>
            </div>
        </section>
        <section id="FAC">
            <h2>Meet Our Faculty</h2>
            <div class="faculty-list">
                 <div class="faculty-member">
                    <img src="kinds/hhh.jpg" alt="hh">
                    <h3>Bhupal Mistri</h3>
                    <b>Principal Of The School</b>
                </div>
                <div class="faculty-member">
                    <img src="kinds/di.jpg" alt="anu">
                    <h3>Dipak Halder</h3>
                    <B>B.A MA</B>
                </div>

                 <div class="faculty-member">
                    <img src="kinds/ma.jpg" alt="anu">
                    <h3>Madhumita Das</h3>
                    <b>MA English</b>
                </div>

                <div class="faculty-member">
                    <img src="kinds/sn.jpg" alt="DHN">
                    <h3>Sneha Halder</h3>
                    <b>B.A English MA B.ED</b>
                </div>
                <div class="faculty-member">
                    <img src="kinds/sup.jpg" alt="dac">
                    <h3>Suparna Nag</h3>
                    <b>M.A Bengali</b>
                </div>
                <div class="faculty-member">
                    <img src="kinds/kjn.jpg" alt="am">
                    <h3>Karabi Bhunre</h3>
                    <B>B.A MA English</B>
                </div>
                <div class="faculty-member">
                    <img src="kinds/su.jpg" alt="am">
                    <h3>Susoma Ruproy</h3>
                    <B>MA Bengali</B>
                </div>
                <div class="faculty-member">
                    <img src="kinds/ii.jpg" alt="an1">
                    <h3>Shyamchan Tanti</h3>
                    <b>Joga and PT</b>
                </div>
                <div class="faculty-member">
                    <img src="kinds/jj.jpg" alt="UJA">
                    <h3>Binali Mondal</h3>
                    <B>BA MA</B>
                </div>
                <div class="faculty-member">
                    <img src="kinds/gg.jpg" alt="su">
                    <h3>Pulak Mondal</h3>
                    <b>Song and gritter</b>
                </div>
                <div class="faculty-member">
                    <img src="kinds/kk.jpg" alt="KHAN">
                    <h3>Sayan Pramanik</h3>
                    <b>Dans Teacher</b>
                </div>
                <div class="faculty-member">
                    <img src="kinds/UI.jpg" alt="KHAN">
                    <h3>Tapati Palta</h3>
                    <b>BA MA</b>
                </div>
                <div class="faculty-member">
                    <img src="kinds/jaa.jpg" alt="KHAN">
                    <h3>Bhaskar Ghose</h3>
                    <b>Art and Work Educaion</b>
                </div>
            </div>
        </section>
        <section id="CON">
            <h2>Contact</h2>
            <div class="contact">
                <h3>KARANJALI STAR KIDS K.G SCHOOL</h3>

                <strong>Vill- Dakshin Damodarpur,<br>
                P.O- Karanjali, P.S- Kulpi<BR>
                Dist- South 24 Parganas,Pin- 743348,West Bengal
        <br>SOUTH 24 PARGANAS - 743348<br>Latitude-22.02685<br>Longitude-88.23513<br>
                Mob-7407330038<br>
                Email-karanjalistarkids2018@gmail.com
                </strong>
                <h3>LOCATION</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3086.8684021180934!2d88.23863957528478!3d22.031868679880393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0257006c5a1f6d%3A0x2cb3b7db96208216!2z4KaV4Kaw4Kae4KeN4Kac4Kay4KeAIOCmuOCnjeCmn-CmvuCmsCDgppXgpr_gpqHgprgg4KaV4KeHLuCmnOCmvyDgprjgp43gppXgp4HgprI!5e1!3m2!1sbn!2sin!4v1761990653149!5m2!1sbn!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
        </section>
        
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
    <p>Copyright &copy; Government Industrial Training Institute Kulpi Running Under PTP</p>
        </footer>
    </body>
</html>