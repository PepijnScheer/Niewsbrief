<?php
require_once ('connectvars.php');

$subject = $_POST['subject'];
$message = $_POST['message'];

$dbc = mysqli_connect(HOST, USER, PASS, DBNAME ) or die ('Error Connecting');

$query = "SELECT mailadres FROM nieuwsbrief_tutorial";
$result = mysqli_query($dbc,$query) or die ('Error querying.');

while ($row = mysqli_fetch_array($result)) {
    echo 'Mail verzonden naar: ' . $row['mailadres'] . '<br>';

    $to = $row['mailadres'];
    $headers = 'Gestuurd door: 22670@ma-web.nl';
    mail($to, $subject, $message, $headers);

}

echo 'verzonden' ;
?>

