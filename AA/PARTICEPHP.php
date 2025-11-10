<!DOCTYPE HTML>
<html>
<head>
<center>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration Form</title>
</head>
<body>
    <h1 style="COLOR:BLACK;">MY PHP CODE </h1>
    <?php
// MY BASIC PHP PRINT 
print("MY NAME IS KUSHAL BERA").'<BR>'.'<br>';
echo "WHATE IS YOUR NAME ?".'<BR>'.'<BR>';
'<BR>'.printf("HELLO WORLD").'<BR>'.'<BR>';
//DEFINRE VARIBLE
$INTNUM=7547903773;
echo '<BR>'.'MY CONTACT NO : '. $INTNUM.'<BR>'.'<BR>';
$GRADE=91.6;
echo 'MY GRADE MARK : '. $GRADE.'<BR>'.'<BR>';
$boolan=true;
echo 'MY BOOLAN VALUE : '. $boolan.'<BR>'.'<BR>';
$string='INFORMATION TECHNOLOGY';
echo 'MY DEPERMENT: '. $string.'<BR>'.'<BR>';
$ARRAT=array("KUSHAL",'<br>'."KOUSHIK");
echo 'MY ARRAY :';
foreach ($ARRAT as $name) {
  echo $name."";
}
echo'<br>'.'<BR>';
// ACCESS SPECIFIC ELEMENT
echo"MY NAME IS:".$ARRAT[0].'<BR>'.'<BR>';
echo"MY BOTHER NAME IS:".$ARRAT[1].'<BR>'.'<BR>';
$a=12;
echo ++$a;
$S=16;
echo$S--;
echo$S;
    ?>
</body>
</html>