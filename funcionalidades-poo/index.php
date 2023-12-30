<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="text" name="nome" id="nome">
        <input type="submit" value="Enviar" name="enviar-form">
    </form>
    <?php
    require "./classe.php";

    if (isset($_POST['enviar-form'])) {
    }
    $novaClasse = new Classe();
    $novaClasse->InserirNomeProtocolo("Nat");

    ?>
</body>

</html>