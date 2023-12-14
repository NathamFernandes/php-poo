<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Selecione o cargo</h2>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <select name="cargo">
            <option value="">--</option>
            <option value="estudante">Estudante</option>
            <option value="estagiario">Estagiário</option>
            <option value="funcionario">Funcionario</option>
        </select>
        <input type="submit" value="Enviar" name="send-cargo">
    </form>


    <h2>Cadastro de Usuário</h2>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Nome: <input type="text" name="nome">
        Idade: <input type="number" name="idade">
        Nacionalidade: <input type="text" name="nacionalidade">

        <?php
        require "./cargos.php";

        session_start();

        if (isset($_POST['send-cargo'])) {
            $cargo = $_POST['cargo'];
            $_SESSION['cargo'] = $cargo;
            switch ($cargo) {
                case "estagiario":
                    echo "Função: <input type=\"text\" name=\"funcao\">";
                case "estudante":
                    echo "Período: <input type=\"number\" name=\"periodo\">";
                    break;
                case "funcionario":
                    echo "Função: <input type=\"text\" name=\"funcao\">";
                    break;
            }
        }
        ?>

        <input type="submit" value="Enviar" name="send-form">
    </form>

    <?php

    if (isset($_POST['send-form'])) {
        switch ($_SESSION['cargo']) {
            case "estudante":
                $objeto = new Estudante(
                    $_POST['nome'],
                    $_POST['idade'],
                    $_POST['nacionalidade'],
                    $_POST['periodo']
                );
                break;
            case "estagiario":
                $objeto = new Estagiario(
                    $_POST['nome'],
                    $_POST['idade'],
                    $_POST['nacionalidade'],
                    $_POST['periodo'],
                    $_POST['funcao']
                );
                break;
            case "funcionario":
                $objeto = new Funcionario(
                    $_POST['nome'],
                    $_POST['idade'],
                    $_POST['nacionalidade'],
                    $_POST['funcao']
                );
                break;
        }

        $objeto->mostraInfo();
    }

    ?>
</body>

</html>