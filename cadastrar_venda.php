<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "sistema_mercado";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto_id = $_POST['produto_id'];
    $quantidade_vendida = $_POST['quantidade_vendida'];
    $funcionario_id = $_POST['funcionario_id'];
    $data_venda = date('Y-m-d H:i:s');

    $sql = "INSERT INTO vendas (produto_id, quantidade_vendida, funcionario_id, data_venda) VALUES ('$produto_id', '$quantidade_vendida', '$funcionario_id', '$data_venda')";

    if ($conn->query($sql) === TRUE) {
        echo "Venda cadastrada com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
