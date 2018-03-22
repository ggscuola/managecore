<?php
include("sessioni.php");

if($username == "adminu")
{
    echo '<div class="utente">Amministratore - Elimina</div>';
}

?>
<html>
<head>
<title>B Elimina</title>

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
			<li>
                            <a href="#">GESTIONE</a>
                            <ul>
                                        <li><a href="inserisci.php">Inserisci</a></li>
                                        <li><a href="aggiorna.php">Aggiorna</a></li>
                            </ul>
                       </li> 
		</ul>
	</div>
    </div>


    <div class="corpo">
    <br><br>
    <h3>Elimina record.</h3>
        <br>
        <br>
        <br>
        <form action="update_elimina.php" method="POST" style="margin-top:-30px;">
            
           
             Inserisci il nome del prodotto del record che vuoi eliminare<br><br>
             <input type="text" name="prodotto" required style="border-radius:5px;width:90px;"/>
             
            <br><br>
            Nomi prodotti attualmente presenti:
            <br><br>
            <?php
            
            $query="select nome_prodotto from magazzino";
            $ris=mysqli_query($conn,$query);
            $i=0;
                echo '<table">';
            if(mysqli_num_rows($ris)>0)
            {
                while($row = mysqli_fetch_assoc($ris))
                {
                    echo '<tr>';
                    echo '<td>';
                    echo $row["nome_prodotto"]. "<br>";
                    echo '</td>';
                    echo '</tr>';
                    
                }
            }
                
              echo '</table>';
         
             ?>
             
             
            <br><br>
            
            
            <input type="submit" value="Elimina"/>
        </form>
    </div>

    <div class="foot">
        </br>
        Sistema rivolto alla sola gestione degli inventari
        
        <br>
        sviluppato in HTML, CSS, Javascript, PHP DBMS utilizzato: MySQL
        
        <br>
        realizzato interamente da Gabriele Quarta
    
    </div>


</body>
</html>

















