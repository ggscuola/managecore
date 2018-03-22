<?php
include("sessioni.php");

if($username == "dip")
{
    echo '<div class="utente">Dipendente - Inventario: MAGAZZINO</div>';
}
if($username == "adminu")
{
    echo '<div class="utente">Amministratore - Inventario: MAGAZZINO</div>';
}
if($username == "resp")
{
    echo '<div class="utente">Responsabile - Inventario: MAGAZZINO</div>';
}


?>
<html>
<head>
<title>B Magazzino</title>

<link rel="stylesheet" type="text/css" href="style.css"/>
<meta name="Generator" content="Editra/0.7.20">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<style type="text/css">

</style>


<script>
function adminu() 
    {
        location.href="profilo.php";
    }
        
    function dip() 
    {
        location.href="dipendente.php";
    }
    
    function resp() 
    {
        location.href="responsabile.php";
    }
        
    
</script>

</head>
<body class="default" alink="white" vlink="white">
    <div class="top" style="margin-top:-35px;">
        Braciamoci
        
        <div id="menu">
		<ul>
			<!-- 1° Elemento	-->
                        
			<li><a href="profilo.php"> HOME</a></li>
                        
			<!-- 3° Elemento: (Sottomenu) -->
                    
                        <li>
				<a href="#">VISUALIZZA</a>
				<ul>
					<li><a href="ape.php">Ape</a></li>
					<li><a href="magazzino.php">Magazzino</a></li>
				</ul>
			</li>
			
		</ul>
	</div>
    </div>


    <div class="corpo">
        <?php 
            $query = "select nome_prodotto,tipo,specifica,quantita,day_data,scadenza from magazzino order by tipo ASC";
            $ris = mysqli_query($conn,$query);
        
        
            echo  '<table class="visualizza_tabella">';
             echo '<thead style="font-size:20px;text-align:center">';
             echo '<tr>';
             echo '<td>';
             echo 'Prodotto ';
             echo ' ';
             echo '</td>';
             
             echo '<td>';
             echo 'Tipo ';
             echo ' ';
             echo '</td>';
             
             echo '<td>';
             echo 'Quantita ';
             echo ' ';
             echo '</td>';

             
             echo '<td>';
             echo ' ';
             echo ' ';
             echo '</td>';
             
             
             echo '<td>';
             echo 'Data ';
             echo ' ';
             echo '</td>';
             
             echo '<td>';
             echo 'Scadenza ';
             echo ' ';
             echo '</td>';
             
            echo '</thead>';
            echo '<tbody>';
          if(mysqli_num_rows($ris) > 0)
          {     
            while($row = mysqli_fetch_assoc($ris))
            {
             
             echo '<tr>';
             
             
             echo '<td>';
             echo $row["nome_prodotto"];
             echo ' ';
             echo '</td>';
             
             echo '<td>';
             echo $row["tipo"];
             echo ' ';
             echo '</td>';
             
             echo '<td>';
             echo $row["quantita"];
             echo ' ';
             echo '</td>';
             
             echo '<td>';
             echo $row["specifica"];
             echo ' ';
             echo '</td>';
             
            
             echo '<td>';
             echo $row["day_data"];
             echo ' ';
             echo '</td>';
             
             echo '<td>';
             echo $row["scadenza"];
             echo ' ';
             echo '</td>';
             
             echo '</tr>';
             echo ' <br>';
             }
}   
             echo '</tbody>';
             echo  '</table>';                            
                                                    
                                                                                            
                                                                  
        ?>
        
    </div>

    <div class="foot">
        </br>
        Sistema rivolto alla sola gestione degli inventari, l'amministratore ha pieno accesso 
        
        <br>
        sviluppato in HTML, CSS, Javascript, PHP DBMS utilizzato: MySQL
        
        <br>
        realizzato interamente da Gabriele Quarta
    
    </div>


</body>
</html>












