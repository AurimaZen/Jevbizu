<?php
define("DB_SERVER", "localhost");
define("DB_USER","coktai_aurima-z");
define("DB_PASSWORD","MausojaiUztaravimas");
define("DB_NAME", "coktai_aurima-z");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli->connect_error){
    echo"Atsiprasome, bet svetaine susidure su probema.\n";
    echo"Klaida: " . $mysqli->connect_error . "\n.";
    exit;
}
mysqli_query($mysqli,"INSERT INTO klientai(vardas, email, message)
VALUES('$_POST[vardas]','$_POST[email]', '$_POST[message]')");
?>