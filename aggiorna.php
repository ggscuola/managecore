<?php
include("sessioni.php");
if($username == "dip")
{
    echo '<div class="utente">Dipendente - Aggiorna</div>';
}
if($username == "adminu")
{
    echo '<div class="utente">Amministratore - Aggiorna</div>';
}

?>
<html>
<head>
<title>B Aggiorna</title>

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
                        <?php
                        if($username == "dip")
                        {
                            echo '
                           <li>
                            <a href="#">GESTIONE</a>
                            <ul>
					<li><a href="aggiorna.php">Aggiorna</a></li>
                            </ul>
                       </li> 
                       ';
                        }
                        if($username == "adminu")
                        {
                            echo '
                            <li>
                                <a href="#">GESTIONE</a>
                                <ul>
                                            <li><a href="inserisci.php">Inserisci</a></li>
                                            <li><a href="elimina.php">Elimina</a></li>
                                </ul>
                           </li> 
                           ';
                       }
                       ?>
		</ul>
	</div>
    </div>


    <div class="corpo">
    <br><br>
    <h3>Aggiorna inventario.</h3>
        <br>
        <br>            
        <br>
        <form action="update.php" method="POST" style="margin-top:-30px;">
            Seleziona da quale inventario operare:
            
             <select name="inventario">
              <option value="ape">Ape</option>
              <option value="magazzino">Magazzino</option>
            </select>
            <br><br><br>
            Inserisci il prodotto che vuoi aggiornare<br><br>
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
            Quantita:
            <select name="quantita">
             <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              
            </select>
            <br><br><br>
            <input type="submit" value="Aggiorna"/>
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

















