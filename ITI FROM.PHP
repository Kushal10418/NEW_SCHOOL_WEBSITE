<!DOCTYPE HTML>
<html lang="en">
<head>
<center>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration Form</title>
  <link rel="stylesheet" href="styleITI.css">
</head>
<body>
    <header>
        <img src="IT/skill.jpeg" alt="skill">
        <img src="IT/dga.jpeg" alt="skill-1">
        <img src="IT/na.jpeg" alt="skill-2">
        <img src="IT/ni.jpeg" alt="skill-3">
        <img src="IT/ncv.jpeg" alt="skill-4">
        <img src="IT/kushal.jpg" alt="skill-5">
    </header>
    <div class="container">
        <h2>Result</h2>
        <from>
            <div class="radio-group">
                <label for="select">*Please Select</label>
                <label>
                    <input type="radio" name="scheme">
                    CTS
                </label>
                <label>
                    <input type="radio" name="scheme">
                    CITS
                </label>
            </div>
            <label for="roll">*PRN NO</label>
            <input type="texy" id="roll" name="roll" placeholder="ENTER YOUR PRN NO">
            <label for="dob">*DOB</label>
            <input type="date" id="dob" name="dob" placeholder="ENTER YOUR DATE OF BIRTH">
            <div class="btn-group">
                <button type="submit" class="submit-btn">SUBMIT</button>
                <button type="submit" class="cancel-btn">CANCEL</button>
            </div>
        </from>
    </div>
</body>
</html>