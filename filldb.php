<?php
require_once ('connectvars.php');

$dbc = mysqli_connect(HOST, USER, PASS, DBNAME );
$voornaam = 'Vul';
$tussenvoegsel = 'die';
$achternaam = 'tabellen';
$mailadres = 'tabellen@vul.com';
$query = "INSERT INTO nieuwsbrief_tutorial VALUES (0,'$voornaam','$tussenvoegsel','$achternaam','$mailadres')";
for ($i = 0; $i <10; $i++){
    $result = mysqli_query($dbc,$query) or die ('Error querying.');
}