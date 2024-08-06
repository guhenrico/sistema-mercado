<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Vendas</title>
    <link rel="stylesheet" href="venda.css">
</head>
<body>
    <div class="container">
        <div class="form-card">
            <h1>Cadastro de Venda</h1>
            <form action="processar_venda.php" method="POST">
                <label for="produto_id">ID do Produto:</label>
                <input type="number" id="produto_id" name="produto_id" required>
                
                <label for="quantidade_vendida">Quantidade Vendida:</label>
                <input type="number" id="quantidade_vendida" name="quantidade_vendida" required>
                
                <label for="funcionario_id">ID do Funcionário:</label>
                <input type="number" id="funcionario_id" name="funcionario_id" required>
                
                <div class="button-group">
                    <button type="submit">Cadastrar</button>
                    <button type="reset">Limpar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
