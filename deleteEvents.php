<?php

include("dbconnect.php");

$con= new dbconnect();

$con->connect();



if(isset($_GET['id'])) {
        $eID= $_GET['id'];

	$sSql = "DELETE FROM events WHERE event_id=\"$eID\"";
                echo “$sSql”;
	$oResult = mysql_query($sSql);
	echo '<h2>Deleted</h2>';
}

}
?>

<a href="lab12.php">Home</a>