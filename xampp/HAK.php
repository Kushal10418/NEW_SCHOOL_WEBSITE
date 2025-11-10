<!DOCTYPE html>
<html>
    <head>
        <title>
            javasscript html form
        </title>
		</head>
		<body>
        <div class="form-container">
            <h1 style="color: blueviolet;"><marquee>My student form</marquee></h1>
            <P ID="demo"></P>
    <label for="fNAME" >STUDENT NAME:</label>
<input type="text" ID="fNAME" name="fNAME" placeholder="ENTER YOUR FRIST NAME" required>

<label for="DEPERMENT" >DEPERMENT OF STUDENT:</label>
<select id="DEPERMENT" NAME="DEPERMENT">
    <option value="INFORMATION TECHNOLOGY">INFORMATION TECHNOLOGY</option>
    <option value="DMC">DMC</option>
    <option value="FITTER">FITTER</option>
    <option value="RAC">RAC</option>
    <option value="WELDER">WELDER</option>
    <option value="ELECTRICAN">ELECTRICAN</option>
    <option value="SURVEYER">SURVEYER</option>
</select>
<label for="ENAME" >STUDENT EMAIL ID:</label>
<input type="email" ID="ENAME" name="ENAME" placeholder="ENTER YOUR EMAIL ID" required>
<label for="DATE" >DATE OF BIRTH:</label>
<input type="date" ID="DATE" name="DATE" placeholder="ENTER YOUR FRIST NAME" required>
<button type="submit" onclick="myfunction()">CLICK</button>
<INPUT TYPE="RESET" value="RESET">

<script>
    function myfunction(){
        const name=document.getElementById("fNAME").value;
        const DEPERMENT=document.getElementById("DEPERMENT").value;
        const EMAIL=document.getElementById("ENAME").value;
        const BIRTH=document.getElementById("DATE").value;

        console.log("STUDENT NAME:"+name);
        console.log("DEPERMENT OF STUDENT:"+DEPERMENT);
        console.log("STUDENT EMAIL ID:"+EMAIL);
        console.log("DATE OF BIRTH:"+BIRTH);
		
        document.getElementById("demo").innerHTML="STUDENT NAME:"+name+"<br>"+"DEPERMENT OF STUDENT"+DEPERMENT+"<br>"+"STUDENT EMAIL ID"+EMAIL+"<BR>"+"DATE OF BIRTH:"+BIRTH;
    }
</script>
    </div>   
    </body>
</html>