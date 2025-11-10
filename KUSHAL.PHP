<!DOCTYPE html>
<html>
    <head>
        <center>
        <title>MUY JAVASCRIPT</title>
    </head>
    <body>
        <h1 style="color:red;">PHP NEW SERVER KUSHAL BERA</h1>
        <?php
        //SIMPLE IF STATEMENT
        $A=6;
        if ($A>3) {
            echo'A IS GREATER THAN 3'.'<BR>'.'<BR>';
        }

        //IF ELSE STATEMENT
        $AB=14;
        if ($AB>15) {

echo 'AB IS GREATER THAN 15'.'<BR>';
        }else {
            echo 'AB IS NOT GREATER THAN 15'.'<BR>'.'<BR>';
        }

        //IF ELSEIF ELSE STATEMENT

        $ABC=15;
        if ($ABC>=15) {
echo 'ABC IS GREATER THAN 15'.'<BR>';
        }elseif ($ABC!=15) {
            echo'ABC IS EQUAL TO 15'.'<BR>';
        }else{
            echo'ABC IS LESS THAN 15'.'<BR>'.'<BR>';
        }
$AA='HELLO HOW ARE YOU';
            $NAME='KUSHAL BERA';
            $RESULT=$AA.'<BR>'.$NAME;
            echo $RESULT.'<BR>'.'<BR>';
    
        //TERNARY OPERATOR (SHORT IF)
        $AD=12;
        echo($AD>14)?'A IS GREATER THAN 14':'AD IS NOT GREATER THAN 14'.'<BR>'.'<BR>';
// ALTERNATE 
        $AD=16;
        IF($AD>14):
        echo'A IS GREATER THAN 14';
        else :
            echo'AD IS NOT GREATER THAN 14';
         endif?>
           