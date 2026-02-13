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

// Editando Usuário
if(isset($_POST['update_usuario'])){
    $id = trim($_POST['id']);
    $nome = trim($_POST['nome']); //NÃO ESTA PROTEGIDO COM PREPARE
    $email = trim($_POST['email']);

    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";

    mysqli_query($conexao, $sql);

     if(mysqli_affected_rows($conexao) > 0){
        $_SESSION['mensagem'] = 'Usuário alterado com sucesso';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Usuário não pode ser alterado';
        header('Location: index.php');
        exit;
    }
}

// Excluindo Usuário
if(isset($_POST['delete_usuario'])){
    //nome do campo
    $id = trim($_POST['delete_usuario']);
    
    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    mysqli_query($conexao, $sql);

     if(mysqli_affected_rows($conexao) > 0){
        $_SESSION['mensagem'] = 'Usuário deletado com sucesso';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Usuário não pode ser deletado';
        header('Location: index.php');
        exit;
    }
}
?>