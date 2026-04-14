<?php

require_once 'conexao.php';


header('Content-Type: application/json; chartset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit(json_encode(['sucesso' => false, 'erro' => 'Envie os dados via formulario (POST).']));
}

$email = $_POST['email'] ?? '';
if ($email === '') {
    http_response_code(422);
    exit(json_encode(['sucesso' => false, 'erro' => 'O campo "email" é obrigatório.']));
}

try {
    $pdo ->exec('USE ' . DB_NAME . '');
    $stmt = $pdo->prepare('SELECT * FROM cadastros WHERE email = ?');
    $stmt->execute([$email]);
    $cadastro = $stmt->fetch(PDO::FETCH_ASSOC);

    if($cadastro) {
        echo json_encode(['sucesso' => true, 'cadastro' => $cadastro]);
    } else {
        http_response_code(404);
        echo json_encode(['sucesso' => false, 'erro' => 'Cadastro não encontrado']);
    
    }
} catch (PDOException $e) {
    http_response_code(500)
    echo json_encode(['sucesso' => false, 'erro' => 'Erro ao consultar banco de dados: ' . $e->getMessage()]);
}