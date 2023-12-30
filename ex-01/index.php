<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Número: <input type="text" name="numero">
        Descrição: <input type="text" name="descricao">
        Quantidade: <input type="number" name="quantidade">
        Preço: <input type="number" step="0.01" name="preco">
        <input type="submit" value="Enviar" name="send-form">
    </form>

    <?php
    require './invoice.php';

    if (isset($_POST['send-form'])) {
        $fatura = new Invoice($_POST['numero'], $_POST['descricao'], $_POST['quantidade'], $_POST['preco']);
        echo $fatura->getNumero() . "<br>";
        echo $fatura->getDescricao() . "<br>";
        echo $fatura->getQuantidade() . "<br>";
        echo $fatura->getPreco() . "<br>";
        echo $fatura->getInvoiceAmount();
    }

    ?>
</body>

</html>