<?php
require "conexao.php";
require "../modelo/Produto.php";
require "../repositorio/ProdutoRepositorio.php";

//if (isset($_POST['cadastro'])){ ou
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $prato = $_POST["prato"];
    $ingredientes = $_POST["ingredientes"];
    $valor = $_POST["valor"];
    $imagem = $_POST["imagem"];
    
    $produto = new Produto(0,
        $prato,
        $ingredientes,
        $imagem,
        $valor
    );

    $produtoRepositorio = new ProdutoRepositorio($conn);
    $produtoRepositorio->cadastrar($produto);
    header("Location: ../visao/cadastrar-produto-sucesso.php");
}

?>