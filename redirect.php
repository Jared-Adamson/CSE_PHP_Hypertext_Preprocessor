<!--
//Jared Adamson
//CPI310
//Lab 14
//Part 1
-->

<?php

 $address = $_POST['address'];
 $time = $_POST['time'];
 
 echo "You will be redirected to to your website in $time seconds";
 header("refresh:$time; url=$address");


?>
