<?php

require_once 'includes/conexao.php';

$nome = $_POST['nome'] ?? '';
$sobrenome = $_POST['sobrenome'] ?? '';
$email = $_POST['email'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';

if(empty($nome) || empty($sobrenome) || empty($email)) {
    header('Location: index.php?erro=2');
    exit;
}

$sql = "INSERT INTO clientes (nome, sobrenome, email, mensagem) VALUES (:nome, :sobrenome, :email, :mensagem)";
$stmt = $pdo->prepare($sql);

$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':sobrenome', $sobrenome);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':mensagem', $mensagem);

if ($stmt->execute()) {
    header('Location: index.php?sucesso=1');
    exit;
} else {
    header('Location: index.php?erro=1');
    exit;
}
?>