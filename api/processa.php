<?php
// api/processa.php

// 1. Verifica se a requisição veio mesmo via POST para evitar acessos diretos vazios
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // 2. Captura os dados usando os "names" que definimos no formulário HTML
    $nome = $_POST['nome_aluno'] ?? 'Não informado';
    $disciplina = $_POST['nome_disciplina'] ?? 'Não informada';

    // 3. Exibe o resultado na tela de forma amigável
    echo "<!DOCTYPE html>
    <html lang='pt-BR'>
    <head>
        <meta charset='UTF-8'>
        <title>Dados Recebidos</title>
        <style>
            body { font-family: sans-serif; background: #0f172a; color: #f8fafc; padding: 40px; text-align: center; }
            .box { background: #1e293b; padding: 20px; border-radius: 8px; display: inline-block; text-align: left; }
            span { color: #38bdf8; font-weight: bold; }
            a { color: #f43f5e; text-decoration: none; display: block; margin-top: 15px; }
        </style>
    </head>
    <body>
        <div class='box'>
            <h2>✅ Dados Recebidos com Sucesso!</h2>
            <p><strong>Nome do Aluno:</strong> <span>$nome</span></p>
            <p><strong>Disciplina:</strong> <span>$disciplina</span></p>
            <a href='aula_form.php'>← Voltar para o formulário</a>
        </div>
    </body>
    </html>";

} else {
    // Se tentarem acessar o arquivo processa.php digitando direto na URL sem enviar o form
    echo "<h3>Erro: Envie o formulário primeiro!</h3>";
}
