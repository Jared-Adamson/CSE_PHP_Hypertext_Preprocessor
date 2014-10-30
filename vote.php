<?php
session_start();
$candidates = array('Kris Smith', 'Barack Obama');
$vote = $_POST['vote'];

if($vote == 'Kris') {

    if(isset($_SESSION['Kris'])) {
        $_SESSION['Kris'] = $_SESSION['Kris'] + 1;
    }
    else {
        $_SESSION['Kris'] = 1;
    }
}

if($vote == 'Obama') {

    if(isset($_SESSION['Obama'])) {
        $_SESSION['Obama'] = $_SESSION['Obama'] + 1;
    }
    else {
        $_SESSION['Obama'] = 1;
    }
}

echo "<p>" . $candidates[0] . " | " . $_SESSION['Kris'] . "</p>";

echo "<p>" . $candidates[1] . " | " . $_SESSION['Obama']. "</p>";
echo '<br>';
echo '<br>';
echo '<br>';
echo '<a href=vote.html>Back</a>';
?>