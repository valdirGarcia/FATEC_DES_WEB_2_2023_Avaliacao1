<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Livros</title>
    </head>
    <body>
        <h2> Todos os livros </h2>
            <?php
                if(file_exists("livros_cadastrados.txt"))
                {
                    $handle = fopen("livros_cadastrados.txt", "r");
                    while(!feof($handle))
                    {
                        echo fgets($handle) . "<br>";
                    }
                    fclose($handle);
                }
            ?>
        <br><br>
        <form>
            <div>
                <a href="cadastrar.php" class="btn btn-danger">Novo livro</a>
            </div>
        </form>

    </body>
</html>