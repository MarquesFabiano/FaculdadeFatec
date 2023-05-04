<?php
require_once 'conectar_banco.php';


$conn = conectar_banco();

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "INSERT INTO cadastro (nome, data_nascimento, cpf, email, senha) VALUES ('$nome', '$data_nascimento', '$cpf', '$email', '$senha')";
if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close();
?>
