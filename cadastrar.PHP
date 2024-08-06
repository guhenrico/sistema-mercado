<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="cadastrar.css">
</head>
<body>
    <div class="container">
        <div class="form-card">
            <h1>Cadastro de Produto</h1>
            <form action="cadastrar_produto.php" method="POST">
                <label for="nome">Nome do Produto:</label>
                <input type="text" id="nome" name="nome" required>
                
                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao"></textarea>
                
                <label for="valor_unitario">Valor Unitário:</label>
                <input type="number" id="valor_unitario" name="valor_unitario" step="0.01" required>
                
                <label for="quantidade_em_estoque">Quantidade em Estoque:</label>
                <input type="number" id="quantidade_em_estoque" name="quantidade_em_estoque" required>
                
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>
