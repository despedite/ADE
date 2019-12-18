<?php
session_start(); if (($_SESSION['perms']) != "SUPER") {
header("Location: ../"); }

$id = $_GET['id'];
//Define the query
$query = "DELETE FROM users WHERE id=$id";
$username = "root"; 
$password = ""; 
$database = "ade"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 

?><strong><?php echo $id?></strong><br /><br /><?php

//sends the query to delete the entry
mysqli_query ($mysqli, $query) or die(mysqli_error($mysqli));

if (mysqli_affected_rows($mysqli) == 1) { 
//if it updated
    mysqli_close($conn);
    header('Location: index.php'); //If book.php is your main page where you list your all records
    exit;
 } else { 
//if it failed
?>

            <strong>Deletion Failed</strong><br /><br />


<?php
} 
?>