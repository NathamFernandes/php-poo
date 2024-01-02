<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Cadastrar produto</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Nome: <input type="text" name="nome">
        Estoque: <input type="number" name="estoque">
        Descrição: <input type="text" name="descricao">
        <input type="submit" value="Cadastrar" name="create-form">
    </form>

    <h2>Consultar produtos</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="submit" value="Consultar" name="read-form">
    </form>

    <h2>Atualizar produto</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        ID: <input type="number" name="id">
        Nome: <input type="text" name="nome">
        Estoque: <input type="number" name="estoque">
        Descrição: <input type="text" name="descricao">
        <input type="submit" value="Atualizar" name="update-form">
    </form>


    <h2>Apagar produto</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" name="id">
        <input type="submit" value="Deletar" name="delete-form">
    </form>
    <hr>

    <?php

    use App\Model\Produto;
    use App\Model\ProdutoDao;

    require_once 'vendor/autoload.php';

    $produtoDao = new ProdutoDao();

    if (isset($_POST['create-form'])) {
        $produto = new Produto($_POST['nome'], $_POST['estoque'], $_POST['descricao']);

        $produtoDao->create($produto);

        echo "Cadastrado com sucesso!";
    } elseif (isset($_POST['read-form'])) {
        $string_base = "";

        $read_result = $produtoDao->read();

        foreach ($read_result as $sub_array) {
            foreach ($sub_array as $value) {
                $string_base = $string_base . $value . " ";
            }
            echo "<li>$string_base</li>";
            echo "<br>";
            $string_base = "";
        }
    } elseif (isset($_POST['update-form'])) {
        $produto = new Produto($_POST['nome'], $_POST['estoque'], $_POST['descricao']);
        $produto->setId($_POST['id']);

        $produtoDao->update($produto);

        echo "Atualizado com sucesso!";        
    } elseif (isset($_POST['delete-form'])) {
        $produtoDao->delete($_POST['id']);

        echo "Deletado com sucesso!";
    }

    ?>
</body>

</html>