<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Funcionários</title>
    <link rel="stylesheet" href="funcionarios.css">
</head>
<body>
    <div class="container">
        <div class="form-card">
            <h1>Cadastro de Funcionário</h1>
            <form action="processar_funcionario.php" method="POST">
                <label for="nome">Nome do Funcionário:</label>
                <input type="text" id="nome" name="nome" required>
                
                <label for="cargo">Cargo:</label>
                <input type="text" id="cargo" name="cargo" required>
                
                <label for="salario">Salário:</label>
                <input type="number" id="salario" name="salario" step="0.01" required>
                
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>

                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required>
                

                <div class="button-group">
                    <button type="submit">Cadastrar</button>
                    <button type="reset">Limpar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>





