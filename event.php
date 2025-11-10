<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>College event</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            *{
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body{
                font-family: 'Segoe UI', Arial,sans-serif;
                background: #f8f9fa;
            }

            header{
    background-color: #003366;
    color: #fff;
    text-align: center;
    padding: 14px;
}
            nav{
                background: #283593;
                display: flex;
                justify-content: space-between;
                padding: 16px 32px;
                color: #fff;
                align-items: center;
                box-shadow: 0 2px 8px rgba(40, 53, 147,0.08);
            }
            .logo{
                font-size: 1.6em;
                font-weight: bold;
                letter-spacing: 2px;
            }
            .event-section{
                max-width: 650px;
                min-width: 620px;

                margin: 40px auto;
                padding: 0 16px;
            }
            .event-title{
                font-size: 2em;
                margin-bottom: 40px;
                color: orange;
                text-align: center;
                letter-spacing: 1px;
                font-weight: bold;
                background-color: gray;
                border-radius: 8px;

            }
            .event-grid {
                display: flex;
                flex-wrap: wrap;
                gap: 32px;
                justify-content:space-around;
            }
            .event-card{
                background: greenyellow;
                border-radius: 12px;
                box-shadow: 0 2px 4px rgba(40,53,147,0.8);
                overflow: hidden;
                transition: transform 0.2s,box-shadow 0.2s;
                display: flex;
                flex-direction: column;
                justify-content: center;
                height: 380px;
            }

            .event-card:hover{
                transform: translateY(-6px) scale(1.02);
                box-shadow: 0 8px 24px rgba(40,53,147,0.14);
            }
            .event-image{
                width: 100%;
                height: 278px;
                object-fit: cover;
                display: block;
            }
            .event-info{
                padding: 18px 16px;
                flex: 1;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .event-name{
                font-size: 1.2em;
                color: #283593;
                font-weight: bold;
                margin-top: 6px;
                padding-bottom :30px;

            }
            @media(max-width:600px)
            {
                nav{-ms-flex-direction: column;
                    align-items: flex-start;
                }
                    .event-title{
                        font-size: 1.4rem;
              }

              .event-grid{
                grid-template-columns: 1fr;
              }

              .event-card{
                height: 340px;
              }

              .event-image{
                height: 150px;
              }
                 
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
    <nav>
    <div class="logo">SCHOOL EVENTS</div>
    </nav>
    <section class="event-section">
        <div class="event-title">UPCOMINE COLLEGE EVENTS</div>
        <div class="event-grid">
            <div class="event-card">
<img class="event-image" src="kinds/sport.jpg" alt="kulpi" style="height: 468px; width: 468px;">

            </div>

            <!--event 2-->
             <div class="event-card">
<img class="event-image" src="kinds/RR.jpg" alt="kul" style="height: 468px; width: 468px;">

            </div>
            <!--event 3-->
            <div class="event-card">
<img class="event-image" src="kinds/YY.jpg" alt="kulo" style="height: 468px; width: 468px;">

            </div>
            <!--event 4-->
            <div class="event-card">
<img class="event-image" src="kinds/p.jpg" alt="kuulo" style="height: 468px; width: 468px;">

            </div>
            <!--event 5-->
            <div class="event-card">
<img class="event-image" src="kinds/t.jpg" alt="kulo" style="height: 468px; width: 468px;">
            </div>
            <!--event 6-->
            <div class="event-card">
<img class="event-image" src="kinds/yyo.jpg" alt="kulo" style="height: 468px; width: 468px;">

            </div>
<!--event 7-->
 <div class="event-card">
<img class="event-image" src="kinds/ww.jpg" alt="kulo" style="height: 468px; width: 468px;">
</div>
<div class="event-card">
<img class="event-image" src="kinds/ff.jpg" alt="kulo" style="height: 468px; width: 468px;">
            </div>
        
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
    <p>Copyright &copy; Government Industrial Training Institute,Kulpi Running Under PTP</p>
        </footer>
        </body>
        </html>