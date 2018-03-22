<?php
include("connessione.php");
echo '<div style="text-shadow: 1px 1px 1px #111;"> Responsabile<div>';

?>

<html>
<head>
<title>B Responsabile</title>

<link rel="stylesheet" type="text/css" href="style.css"/>
<meta name="Generator" content="Editra/0.7.20">
<meta http-equiv="content-type" content="text/html; charset=utf-8">


<script>
function uscita() 
    {
        if (confirm('Sei sicuro di voler chiudere la sessione? ')) 
        {
            location.href="index.html";

        }else
        {
            // esce dall'alertbox
        }
    }

 
 </script>   
    
        


</head>
<body class="default" alink="white" vlink="white">
    <div class="top" style="margin-top:-35px;">
        Braciamoci
       
        <div id="menu">
		<ul>
			<!-- 1° Elemento	-->
			<li><a onclick="uscita()">ESCI</a></li>
                        
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
      
        <br><br>
        <h3>Utenza Responsabile: </h3>
        <?php
            
        
            echo "<br>";
            echo "opera sul sistema visualizzando i record.";
            
           
        
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

















