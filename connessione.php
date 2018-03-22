
<?php

$server = "localhost";
$user = "root";
$password = "";
$dbname = "braciamoci";

$conn = mysqli_connect($server,$user,$password,$dbname);

if (!$conn)
{
        echo "connessione fallita";
}
echo "<br><br>";

?>