<?php
// DATA UITLEZEN
$subject = $_POST['subject'];
$message = $_POST['message'];

// DATABASE INTERACTIE

// CONNECTIE MAKEN MET DE DATABASE
$dbc = mysqli_connect('localhost','root','root','mitj_db') or die ('Error connecting.');
// QUERY SCHRIJVEN VOOR ZOEKEN NAAR DATA
$query = "SELECT mailadres FROM nieuwsbrief_tutorial";
// QUERY UITVOEREN
$result = mysqli_query($dbc,$query) or die ('Error querying.');

// MAILEN MET WHILE-LOOP
while ($row = mysqli_fetch_array($result)) {
    echo $row['mailadres'] . '<br>';
}

mysqli_close($dbc);