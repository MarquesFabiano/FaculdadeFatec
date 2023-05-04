<?php
function conectar_banco() {
    $host = "localhost"; 
    $user = "root";
    $pass = ""; 
    $db = "qualidadesono"; 

    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    return $conn;
}
?>
