<?php
require_once ('connectvars.php');

$id = $_GET['id'];
$voornaam = $_GET['voornaam'];
$tussenvoegsel = $_GET['tussenvoegsel'];
$achternaam = $_GET['achternaam'];
$mailadres = $_GET['mailadres'];

//echo $id . $voornaam . $tussenvoegsel . $achternaam . $mailadres . '<br>';

$dbc = mysqli_connect(HOST,USER,PASS,DBNAME) or die ('Error connecting.');
$query = "UPDATE nieuwsbrief_tutorial ";
$query .= "SET voornaam = '$voornaam', tussenvoegsel = '$tussenvoegsel', achternaam = '$achternaam', mailadres = '$mailadres' ";
$query .= "WHERE id = '$id'";

//echo $query;

$result = mysqli_query($dbc,$query) or die ('Error updating.');
header( "Location: beheren.php");
