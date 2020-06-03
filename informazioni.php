<!doctype  html>
<html lang="it">
    <head>
        <meta charset="UTF-8"/> 
	    <title>Informazioni</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"> </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!--<script type="application/javascript" src="informazioni.js"></script>-->
        <script src="libreria.js"></script>
        <style>
            ::-webkit-scrollbar { display: none; }
        </style>
    </head>
	
	<body>
    <nav class='navbar navbar-expand-md bg-dark navbar-dark' style='width: 100%;'>
        <a href="#" style='margin-left:550px; width:250px; color:whitesmoke; font-weight: bold; font-size: 20pt; text-align: center'>INFORMAZIONI</a>
        <a id="btnBack" href="index.html" style="margin-left:40%" class="btn btn-light float-right bg-flat-color-1"> <i class="fas fa-long-arrow-alt-left"></i> </a>
    </nav>
    <br>
    <div class="container-fluid">
        <?php
        //1 - Controllo dei parametri
        //2 - Connessione al database
        $dbName="dischi";
        require("../connection.php"); //Ritorna $con
        ?>
        <div id="informazioni" style="background-color: #cccccc; border: 1px solid dimgray; margin: 0 auto; width: 40%">
            <br>
            <?php
                $sql="SELECT * FROM dischi";//dato che è un numero non mettiamo gli apici, le stringhe con gli apici
                require("../eseguiQuery.php");//Ritorna $data, vettore enumerativo di oggetti
                $id=$_GET["id"];
                $img=$data[$id]["img"];
                $autore=htmlentities($data[$id]["autore"]);
                $titolo=htmlentities($data[$id]["titolo"]);
                $anno=$data[$id]["anno"];
                $genre=$data[$id]["genre"];
                $prezzo=$data[$id]["prezzo"];
                echo("
                    <img id='cover' style='margin-left: 150px; width: 220px;' title='$titolo' src=$img>
                    <h1 id='title' style='text-align: center;'>$titolo</h1>
                    <h2 id='author' style='text-align: center'>$autore</h2>
                    <p id='genre' style='text-align: center'>Genere: $genre</p>
                    <p id='year' style='text-align: center'>Anno:    $anno</p>
                    <p id='price' style='text-align: center'>Prezzo: $prezzo$</p>");
            ?>

        </div>
        <?php
        //Chiusura connsessione mySql
        $con->close();
        ?>
    </div>
    <div style="margin-top: 10%; border-top: 1px inset darkgray; height: 70px; width: 100%" class="navbar navbar-expand-md bg-dark navbar-dark">
        <img src="img/github.png" width="110px" height="40px" style="float: left; margin-top: 15px; padding-left: 20px">
        <div style="margin-left: 65%; margin-top: 20px; padding-right: 20px">Help: <a href = "mailto: r.marcarino.0814@vallauri.edu" title="Riccardo Marcarino">r.marcarino.0814@vallauri.edu</a></div>
    </div>
	</body>
</html>