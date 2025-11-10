<?php
        $CON=mysqli_connect('localhost','root','SIMA','MYSTUDENT');
        //CHECK CONNECTION
        if (!$CON) {
            die("FAIL THIS CONNECT TO MYSQL".mysqli_connect_error());
        }
        ?>