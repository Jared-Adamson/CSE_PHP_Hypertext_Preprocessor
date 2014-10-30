<?php

include("dbconnect.php");

$con= new dbconnect();

$con->connect();

if(isset($_POST['submit'])) {

	$sSql = "INSERT INTO events
		 (event_id, event_name, event_location, event_date)
		 VALUES ('".$_POST['event_id']."', '".$_POST['event_name']."', '".$_POST['event_location']."', '".$_POST['event_date']."')";

        echo "$sSql <br>";

	mysql_query($sSql);

        $update=mysql_affected_rows();

	echo "<h2>$update Record Inserted</h2><br />";
}
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

	Event ID:<input type="text" name="event_id" /><br />
	Event Name:<input type="text" name="event_name" /><br />
	Event Location:<input type="text" name="event_location" /><br />
	Event Date:<input type="text" name="event_date" /><br />

	<input type="submit" name="addEvent" value="Submit Event" />

</form>

<a href="lab13.php">Home</a>
