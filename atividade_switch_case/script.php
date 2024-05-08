<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Switch case</title>
</head>
<body>
    <header class="cabecalho">
         Formulario Com Switch Case
    </header>
    <div class="subtitulo">
        Escolher cor
    </div>
    <div class="formulario">
        <form class="forms">
        <div class="frm">
        <?php
            $favcolor = $_POST["favcolor"];
            switch ($favcolor){

               case "vermelho":
                echo"Sua cor favorita é vermelho";
                break;
                case "azul":
                echo"Sua cor favorita é azul";
                break;
                case"verde":
                echo"Sua cor favorita é verde";
                break;
            }
            ?>
        </div>
        <div class="botaos">
        <a href="index.html" class="btn btn-danger">Voltar</a>
        </div>
          </form>
    </div>
    <footer class="footer"> 
        Formulario Escolher sua cor
    </footer>
</body>
</html>