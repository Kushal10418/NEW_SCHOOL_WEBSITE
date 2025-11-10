<?php
session_start();
session_destroy();
header("Location:wepage.php");
exit();
?>