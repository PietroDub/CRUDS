<?php 
session_start();
require("Conexao.php");

// Inserindo Usuário
if(isset($_POST['create_usuario'])){
    $nome = trim($_POST['nome']); //NÃO ESTA PROTEGIDO COM PREPARE
    $email = trim($_POST['email']);

    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

    mysqli_query($conexao, $sql);

    if(mysqli_affected_rows($conexao) > 0){
        $_SESSION['mensagem'] = 'Usuário criado com sucesso';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Usuário não pode ser criado';
        header('Location: index.php');
        exit;
    }
}

?>