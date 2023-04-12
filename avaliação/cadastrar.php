<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <div>
        <h1><strong>Realize o Cadastro de Livros Abaixo: </strong><b>
        <br><br>
        <form action="envio_cadastros.php" method="post">
        <label for="livro">Nome do Livro:</label>
        <input type="text" id="livro" name="livro"><br><br>
        <label for="autor">Nome do autor:</label>
        <input type="text" id="autor" name="autor"><br><br>
        <label for="ano">Ano de publicação:</label>
        <input type="date" id="ano" name="ano"><br><br>
        <input type="submit" value="Cadastrar">
    </form>
    </div>
    <p>
        <a href="mostrar_cadastros.php"><input type="submit" value="Mostrar Cadastros"></a>
        <br><br>
        <a href="logout.php" class="btn btn-danger">sair da conta</a>
    </p>
</body>
</html>