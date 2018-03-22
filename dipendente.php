<?php
include("sessioni.php");

if($username == "dip")
{
    echo '<div style="text-shadow: 1px 1px 1px #111; margin-left:140px;">Dipendente</div>';
    //html
    echo'
    <html>
    <head>
    <title>B Dipendente</title>

    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta name="Generator" content="Editra/0.7.20">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <style type="text/css">

    </style>
    <script>
    function uscita() 
        {
            if (confirm("Sei sicuro di voler chiudere la sessione? ")) 
            {
                location.href="index.html";

            }else
            {

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
                            <li>
                                <a href="#">GESTIONE</a>
                                <ul>
                                            <li><a href="aggiorna.php">Aggiorna</a></li>
                                </ul>
                           </li> 
                    </ul>
            </div>
        </div>


        <div class="corpo">
        
        <br><br>
            <h3>Utenza Dipendente: </h3>
            
                
            
                <br>
                opera sul sistema in modo da aggiornare i record.
                
               
            
            
            
        

        </div>

        <div class="foot">
            <br>
            Sistema rivolto alla sola gestione degli inventari, lamministratore ha pieno accesso 
            
            <br>
            sviluppato in HTML, CSS, Javascript, PHP DBMS utilizzato: MySQL
            
            <br>
            realizzato interamente da Gabriele Quarta
        
        </div>


    </body>
    </html>
    ';
    
}
if($username == "adminu")
{
    echo '<div style="text-shadow: 1px 1px 1px #111; margin-left:140px;">Amministratore</div>';
}
if($username == "resp")
{
    echo '<div style="text-shadow: 1px 1px 1px #111; margin-left:140px;">Responsabile</div>';
}

?>


















