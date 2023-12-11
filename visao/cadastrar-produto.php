<?php

    require "../controladora/conexao.php";
    require "../modelo/Produto.php";
    require "../repositorio/ProdutoRepositorio.php";

    if (isset($_POST['cadastro'])){
        $produto = new Produto(10,
            $_POST['prato'],
            $_POST['ingredientes'],
            $_POST['valor'],
            $_POST['imagem'],
        );

        $produtoRepositorio = new ProdutoRepositorio($conn);
        $produtoRepositorio->cadastrar($produto);

        header("Location: admin.php");

    }

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="../assets/img/topo.jpg" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Restaurante Delas - Cadastrar Produto</title>
</head>
<body>
<main>
    <section class="container-admin-banner">
        <img src="../assets/img/logo.png" class="logo-admin" alt="logo.png">
        <h1>Cadastro de Produtos</h1>
    </section>
    <section class="container-form">
        <form action="../controladora/processar-produtos.php" method="POST">

            <label for="nome">Prato</label>
            <input type="text" id="prato" name="prato" placeholder="Digite o nome do prato" required>
            
            <label for="descricao">Ingredientes</label>
            <input type="text" id="ingredientes" name="ingredientes" placeholder="Digite os ingredientes" required>

            <label for="valor">Valor</label>
            <input type="text" id="valor" name="valor" placeholder="Digite um valor" required>

            <label for="imagem">Envie uma imagem do produto</label>
            <input type="file" name="imagem" accept="image/*" id="imagem" placeholder="Envie uma imagem">

            <input type="submit" name="cadastro" class="botao-cadastrar" value="Cadastrar produto"/>
        </form>
    
    </section>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/index.js"></script>
</body>
</html>