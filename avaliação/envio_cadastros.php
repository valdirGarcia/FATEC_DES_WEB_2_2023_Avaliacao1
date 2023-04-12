<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via POST</title>
</head>
<body>
<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

print_r($_POST);
$filename = 'livros_cadastrados.txt';
    if(!file_exists('livros_cadastrados.txt')){
       $handle=  fopen('livros_cadastrados.txt','w');
    }else{
        $handle = fopen('livros_cadastrados.txt','a');
    }
    fwrite($handle, $_POST['livro']);
    fwrite($handle,", ");
    fwrite($handle, $_POST['autor']);
    fwrite($handle,", ");
    fwrite($handle, $_POST['ano']);
    fwrite($handle,", ");

    fflush($handle);
    fclose($handle);

header("location: cadastrar.php")


?>
</body>
</html>