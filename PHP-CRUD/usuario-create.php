<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar User</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="">
    <?php require_once("navbar.php") ?>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <div class="col-md-12 d-flex justify-content-between align-items-center">
        <h1>Adicionar Usuários</h1>
        <a href="index.php" class="btn btn-danger">
            Voltar
        </a>
    </div>
    <div class="col-md-12 card-body d-flex flex-column">
            <form action="acoes.php" method="POST">
                <div class="mb-3">
                    <label for="">Nome</label>
                    <input type="text" name="nome" placeholder="digite seu nome">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email" placeholder="digite seu nome">
                </div>
                <div class="mb-3">
                   <button type="submit" name="create_usuario" class="btn btn-primary">
                        Enviar
                   </button>
                </div>
            </form>
    </div>

</body>
</html>