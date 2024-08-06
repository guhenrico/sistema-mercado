<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "sistema_mercado";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valor_unitario = $_POST['valor_unitario'];
$quantidade_em_estoque = $_POST['quantidade_em_estoque'];


$sql = "INSERT INTO produtos (nome, descricao, valor_unitario, quantidade_em_estoque)
VALUES ('$nome', '$descricao', $valor_unitario, $quantidade_em_estoque)";

if ($conn->query($sql) === TRUE) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
