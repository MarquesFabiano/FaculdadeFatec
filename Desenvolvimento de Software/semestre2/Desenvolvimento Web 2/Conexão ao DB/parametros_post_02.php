<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via POST</title>
</head>
<body>
<?php
function validar_post($dado_enviado){
    if(isset($dado_enviado) and $dado_enviado <> ""){
        return TRUE;
    }
    return FALSE;
}

if(validar_post($_POST['firstName']) and validar_post($_POST['lastName'])){
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "books"; 

    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    $sql = "INSERT INTO authors (firstName, lastName) VALUES ('".$_POST['firstName']."', '".$_POST['lastName']."')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Dados não foram inseridos " . $conn->error;
    }

    // Fechar conexão
    $conn->close();
}
?>
