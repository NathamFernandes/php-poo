<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require "./cachorro.php";
    include "./estudante.php";

    if (isset($_POST['enviar'])) {
        $estudante = new Estudante($_POST['nome'], $_POST['idade'], $_POST['nac'], $_POST['serie']);

        var_dump($estudante);
        // Intencional
        $estudante->nacionalidade = "haha";
        $estudante->falarNome();
        $estudante->andar();
        $estudante->estudar();
    }

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Nome: <input type="text" name="nome">
        Idade: <input type="number" name="idade">
        Nacionalidade: <input type="text" name="nac">
        Série: <input type="text" name="serie">
        <input type="submit" value="Enviar" name="enviar">
    </form>

</body>

</html>