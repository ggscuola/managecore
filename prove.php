<?php
include("sessioni.php");

echo "prove ";
echo "<br>";

$p=$_POST["elemento"];
echo $p;


$q="select nome_prodotto from magazzino";
$ris=mysqli_query($conn,$q);
echo '<select name="elemento">';
if(mysqli_num_rows($ris)>0)
{
        while($row = mysqli_fetch_assoc($ris))
        {

                echo '<option value="ciao">';
                 echo   $row["nome_prodotto"];
                echo '</option>';
                
        }
}
echo '</select>';



?>



