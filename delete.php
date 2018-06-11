<?php
require_once ('connectvars.php');

$id = $_GET['id'];
$dbc = mysqli_connect(HOST,USER,PASS,DBNAME) or die ('Error connecting.');
$query = "DELETE FROM nieuwsbrief_tutorial WHERE id = '$id'";
$result = mysqli_query($dbc,$query) or die ('Error deleting.');
header( "Location: beheren.php");
?>