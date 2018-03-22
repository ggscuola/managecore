//login.php

<?php
include("connessione.php");
session_start();

$user = $_POST["user"];
$psw = $_POST["passw"];

$_SESSION['username'] = $user;
$_SESSION['password'] = $psw;

$u;
$p;

if($user == "dip" && $psw == "dip" || $user == "adminu" && $psw == "adminp" || $user == "resp" && $psw == "resp")
{
      header ("Location: profilo.php");  
}else
{
header ("Location: login_fallito.html");
}
/*
$controllo="select tipo from utenti where '$user'=username and '$psw'=password";

$ris=mysqli_query($conn,$controllo);

if(!$ris)
{
    echo "Errore..";
}

echo "attendere prego";

  //  header ("Location: profilo.php");

*/


?>











