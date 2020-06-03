<?php
    header("Content-type:application/json;charset=utf-8");
    require ("_libreria.php");

    _checkSession("id");

    // 1. connessione
    $con=_connection("utenti");

    // 2. Lettura parametri
    $id = $_SESSION["id"];

    // 3. Query
    $sql="select * from utenti where id = $id;";
    $user = _eseguiQuery($con, $sql);

    // $user è un vettore enumerativo del tipo [{"nome":"rossi"}, etc] contenente però un slo record
    $data = array("id"=>$user[0]["id"], "user"=>$user[0]["user"], "pwd"=>$user[0]["pwd"]);
    echo json_encode($data);

    // 4. close
    $con->close();
?>