<?php
require_once 'conectar_banco.php';

$conn = conectar_banco();

$email = $_POST['email'];
$senha = $_POST['senha'];

$senha_criptografada = hash('sha256', $senha);

$sql = "SELECT * FROM cadastro WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if ($senha_criptografada == $row['senha']) {
        ob_start(); 
        header('Location: http://localhost/pi/main.php');
        ob_end_flush(); 
        exit;
    }
}

$conn->close();
?>
