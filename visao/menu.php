<!DOCTYPE html>
<html>

<head>
    <title>Menu do Usuário</title>

    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="menu">
        <div class="user-info dropdown">
            <div class="user-photo">
                <img src="..\assets\img\logo.png" alt="Foto do Usuário">
            </div>

            <div class="dropdown-content">
                <!-- Conteúdo do dropdown -->
                <form id="inicioForm" action="home.php" method="post" style="display: none;">

                </form>
                <a class="dropdown-item" href="home.php" onclick="enviarParaInicio();">Início</a>

                <a class="dropdown-item" href="login.php">Perfil</a>
                <a class="dropdown-item" href="editar-produto.php">Configurações</a>

                <!-- Use um formulário para redirecionar para admin.php -->
                <form id="adminForm" action="admin.php" method="post" style="display: none;">

            
                </form>
                <!-- Passa os dados diretamente para o JavaScript -->
                <a class="dropdown-item" href="admin.php"  onclick="enviarParaAdmin();">Admin</a>

                <a class="dropdown-item" href="cadastrar-usuario.php" onclick="logout();">Sair</a>
            </div>
        </div>
        <!--<button class="logout-button" onclick="voltar()">Voltar</button> -->
    </div>
    <script>
        function enviarParaAdmin() {
            document.getElementById('adminForm').submit();
        }