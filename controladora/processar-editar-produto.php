<?php
require_once "conexao.php";
require '../repositorio/ProdutoRepositorio.php';
require '../modelo/Produto.php';
// ...


$produtosRepositorio = new ProdutoRepositorio($conn);


// Verifique se um arquivo de imagem foi enviado
if (isset($_GET["imagem"]) && !empty($_GET["imagem"])) {


    $imagem = "img/" . $_GET["imagem"];
    $produto = new Produto(
        $_GET["id"],
        $_GET["prato"],
        $_GET["ingredientes"],
        $_GET["valor"],
        $imagem
    );
    $resultado = $produtosRepositorio->atualizarProduto($produto);
    
    if ($resultado) {
        

            header("Location: ../visao/editar-produto-sucesso.php?teste=1&nome={$produto->getNome()}&tipo={$produto->getTipo()}&descricao={$produto->getDescricao()}&preco={$produto->getPreco()}&id={$produto->getId()}&imagem={$produto->getImagem()}");
            exit();
        } else {
          
            header("Location: ../visao/editar-produto.php?erro=1&id={$produto->getId()}");
            exit();
        }
    
} else {

    $produto = new Produto(
        $_GET["id"],
        $_GET["prato"],
        $_GET["ingredientes"],
        $_GET["valor"],
        $_GET["imagem"]
    );
    $resultado = $produtosRepositorio->atualizarProduto($produto);
    
    if ($resultado) {
        

            header("Location: ../visao/editar-produto-sucesso.php?teste=1&nome={$produto->getNome()}&tipo={$produto->getTipo()}&descricao={$produto->getDescricao()}&preco={$produto->getPreco()}&id={$produto->getId()}&imagem={$produto->getImagem()}");
            exit();
        } else {
          
            header("Location: ../visao/editar-produto.php?erro=1&id={$produto->getId()})");
            exit();
        }
}
?>
