<?php  
    session_start();
    require_once "Conexao.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Usuários</title>
  </head>
  <body>
    <?php require_once("navbar.php") ?>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
    <div>
        <div class="container mt-4">
            <?php require("mensagem.php") ?>
            <div class="row">
                <h4>Lista de usuários:
                <a href="usuario-create.php" class="btn btn-primary"> Adicionar Usuários </a>
                </h4>
            </div>
            <div class="card-body row">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql="SELECT * FROM usuarios";
                            $usuarios = mysqli_query($conexao, $sql);
                                
                            if(mysqli_num_rows($usuarios) > 0){
                                foreach($usuarios as $usuario){
                                ?>
                            <tr>
                                <td><?= $usuario['id'] ?></td>
                                <td><?= $usuario['nome'] ?></td>
                                <td><?= $usuario['email'] ?></td>
                                <td>
                                    <a href="" class="btn btn-secondary">Vizualizar</a>
                                    <a href="" class="btn btn-success">Editar</a>
                                    <form action="" method="POST" class="d-inline">
                                        <button type="submit" name="delete_usuario"
                                        value="1" class="btn btn-danger">
                                            Excluir
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php }
                            }
                        else{
                                echo '<h5>Sem usuários!</h5>';
                            } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>