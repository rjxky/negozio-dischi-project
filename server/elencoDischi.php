<?php
    header("Content-type:application/json;charset=utf-8");
    require ("_libreria.php");
	
	_checkSession("id");
    	
	// 1. connessione
    $con=_connection("dischi");
	
	// 2. Lettura parametri 
	$id = $_SESSION["id"];
	
	// 3. Query
    $sql="select * from dischi;";
	$dischi = _eseguiQuery($con, $sql);
	
	// $user è un vettore enumerativo del tipo [{"nome":"rossi"}, etc] contenente però un slo record
	$data = array("data"=>$dischi);
	echo json_encode($data);
    
	// 4. close
    $con->close();
?>