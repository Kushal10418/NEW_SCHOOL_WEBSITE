<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ONLINE ADMISON</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
body{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background:linear-gradient(135deg,#eef2f3,#d9e7f2);
    margin: 0;
    padding: 0;
}

@keyframes fadeDown{
    from{
        opacity: 0;
        transform:translateY(-40);}
        to{opacity: 1; transform:translateY(0);}
    }
    @keyframes fadeIn{
        form{opacity: 0;}
        to{opacity: 1;}
    }

    @keyframes fadeUp{
        from{opacity: 0; transform:translateY(40px);}
        to{opacity: 1; translateY(0);}
    }
header{
    background:#2c88c1;
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

form{
    max-width:600px;
    margin:30px auto;
    background:#fff;
    padding: 30px 58px;
    border-radius:12px;
    box-shadow:0 4px 15px rgba(0,0,0,0.1);
    animation:fadeIn 1.2s ease;
}
h2{
    text-align:center;
    color:#222;
}

label{
    display:block;
    margin-bottom:6px;
    font-size:18px;
    color:black;
}

input[type="text"],
input[type="email"],
input[type="date"],
input[type="file"],
select{
    width: 100%;
    padding: 10px 8px;
    margin-bottom:18px;
    border:1.6px solid #bbb;
    border-radius:8px;
    font-size:1rem;
    transition:border-color 0.3s;
}

input:focus, select:focus{
    outline:none;
    border-color:#0077cc;
    box-shadow:0 0 4px rgba(0,119,204,0.2);
}
.form-button{
display:flex;
justify-content:space-between;
gap: 10px;
}

button{
    flex:1;
    padding: 12px 0;
    font-size:19px;
    border:none;
    border-radius:8px;
    cursor: pointer;
    transition:background 0.3s;
}

button[type="submit"]{
    background:#3a9bdc;
    color:white;
}

button[type="submit"]:hover{
    background:#2c88c1;
}

button[type="reset"]{
    background:#ccc;
    color:#333;
}

button[type="reset"]:hover{
background:#b3b3b3;
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

.font {
    font-size:1.2rem;
}
  </style>
  </head>
 <body>
    <header>
        <div class="header-container">
            <h1>KARANJALI STAR KIDS K.G SCHOOL</h1>
        </div>
    </header>
    <form action="submit_form.php" method="POST" id="contactForm"
    enctype="multipart/form-data">
        <h2>ONLINE ADDMISON</h2>
<div class="form-section">
    <label for="studentName">Student Name</label>
    <input type="text" id="studentName" name="studentName" placeholder=" Enter your student full name" required />
    <label for="gender">Gender</label>
    <select id="gender" name="gender" required>
        <option value="">Select Gender</option>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
    </select>
    <label for="dob">Date of Birth</label>
    <input type="date" id="dob" name="dob" required />
<label for="currentClass">Current Class</label>
    <input type="text" id="currentClass" name="currentClass" placeholder=" Enter Current Class " required />
    <label for="parentName">Parent Name</label>
    <input type="text" id="parentName" name="parentName" placeholder=" Enter parent name" required />
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="example@gmail.com" required />
    <label for="mobile">Mobile Number</label>
    <input type="text" id="mobile" name="mobile" pattern="[0-9]{10}" placeholder="10 digit mobile number" required />
    <label for="mobile">Student Addhaer No</label>
    <input type="text" id="addar" name="addar" placeholder="Enter your Addhaer no" required />
    <label for="studentPhoto">Student Photo (JPEG Only,Max 100KB)</label>
    <input type="file" id="studentPhoto" name="studentPhoto" accept="image/jpeg" required />
     <label for="studentSignature">Student Signature (Max 50KB)</label>
    <input type="file" id="studentSignature" name="studentSignature" accept="image/*" required />
</div>
<div class="form-button">
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
</div>
    </form>
    <h2>Admission Procedure</h2>
    <p style="max-width:600px; margin:auto; text-align:center; font-size:1.1rem; color:#555;">
        To apply for admission, please fill the above contact form with accurate details. Our admission team will verify 
        documents and get back to you with the next steps.
    </p>
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
    <script>
        document.getElementById('contactForm').addEventListener('submit',function(event){
            const photoInput=document.getElementById('studentPhoto');
            const SignatureInput=document.getElementById('studentSignature');
            const photoFile=photoInput.files[0];
            const SignatureFile=SignatureInput.files[0];
            let messages=[];

            if(photoFile&&photoFile.size>100*1024){
                messages.push('Student Signature maximum size is 100KB.');
            }
            if(signatureFile&&signatureFile.size>50*1024){
                messages.push('Student Signature maximum size is 50KB');
            }

            if(messages.length>0){
                alert(messages.join(''));
                event.preventDefault();
            }
        });
    </script>
 </body> 
 </html>