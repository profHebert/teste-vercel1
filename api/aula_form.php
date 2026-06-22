<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula de Formulários</title>
    <style>
        body { font-family: sans-serif; background: #0f172a; color: #f8fafc; padding: 40px; }
        form { background: #1e293b; padding: 20px; border-radius: 8px; max-width: 400px; margin: 0 auto; }
        div { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"] { width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #334155; background: #0f172a; color: #fff; box-sizing: border-box; }
        button { background: #38bdf8; color: #0f172a; border: none; padding: 10px 15px; border-radius: 4px; font-weight: bold; cursor: pointer; }
    </style>
</head>
<body>

    <form action="processa.php" method="POST">
        <h2>Cadastro de Aluno 📝</h2>
        
        <div>
            <label for="nome">Nome do Aluno:</label>
            <input type="text" id="nome" name="nome_aluno" required>
        </div>

        <div>
            <label for="disciplina">Disciplina:</label>
            <input type="text" id="disciplina" name="nome_disciplina" required>
        </div>

        <button type="submit">Enviar Dados</button>
    </form>

</body>
</html>
