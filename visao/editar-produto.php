<?php
$hostname = "localhost"; // substitua pelo host do seu banco de dados
$username = "root"; // substitua pelo nome de usuário do seu banco de dados
$password = ""; // substitua pela senha do seu banco de dados
$database = "restaurantedelas"; // substitua pelo nome do seu banco de dados

// Cria a conexão
try {
    $conn = new mysqli($hostname, $username, $password, $database);
} catch (Exception $e) {
    die("Erro na conexão: " . $e->getMessage());
}

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida!";
}
?>

<?php
session_start();

include '..\controladora\conexao.php';
include '..\Modelo\Produto.php';
include '..\Repositorio\ProdutoRepositorio.php';
// Exemplo de listagem de produtos

                               


$produtosRepositorio = new ProdutoRepositorio($conn);

// Verifica se o ID do produto foi enviado via GET
if (isset($_GET['id'])) {
    $id_produto = $_GET['id'];

    echo "ID do produto: $id_produto";

    // Busca o produto no banco de dados com base no ID
    $produto = $produtosRepositorio->buscarProdutoPorId($id_Produto);

    // Verifica se o produto foi encontrado
    var_dump($produto);
} else {
    echo "ID do produto não fornecido.";
    exit;
}

?>

<!-- Restante do seu código -->
<label for="prato">Prato</label>
<input type="text" id="Prato" name="Prato" value="<?= $produto->getPrato(); ?>" required>

<label for="ingredientes">Ingredientes</label>
<input type="text" id="ingredientes" name="ingredientes" value="<?= $produto->getIngredientes(); ?>" required>

<label for="valor">Valor</label>
<input type="text" id="valor" name="valor" value="<?= $produto->getValor(); ?>" required>

<label for="imagem">Envie uma nova imagem do produto ou mantenha a imagem atual:</label>
<div class="container-foto">
    <img src="<?= $produto->getImagem(); ?>" alt="<?= $produto->getImagem(); ?>" width="200">
</div>
<input type="file" name="imagem" accept="image/*" id="imagem" value="<?php echo $produto->getImagem(); ?>">

