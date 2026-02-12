<?php 
      define('HOST', 'localhost');
      define('USUARIO', 'root');
      define('SENHA', 'root');
      define('DB', 'PhpCrud');

      $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar!');
?>