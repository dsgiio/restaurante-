<!DOCTYPE html>
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
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="assets/img/topo.jpg" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Menu do Usuário</title>
</head>
<body>
    <main>
        <section class="container-admin-banner">
            <img src="../assets/img/logo.png" class="logo-admin" alt="logo.png">
            <h1>ADMINISTRAÇÃO</h1>
        </section>

        <div class="menu">
            <div class="user-info dropdown">
                <div class="user-photo"></div>
                <div class="centro">
                    <div class="dropdown-content">
                        <!-- Conteúdo do dropdown -->
                        <form id="inicioForm" action="home.php" method="post" style="display: none;"></form>
                        <a class="dropdown-item" href="#" onclick="enviarParaInicio();">Início</a>
                        <a class="dropdown-item" href="login.php">Perfil</a>
                        <a class="dropdown-item" href="#">Configurações</a>
                        <!-- Use um formulário para redirecionar para admin.php -->
                        <form id="adminForm" action="admin.php" method="post" style="display: none;"></form>
                        <!-- Passa os dados diretamente para o JavaScript -->
                        <a class="dropdown-item" href="../visao/admin.php" onclick="enviarParaAdmin();">Admin</a>
                        <a class="dropdown-item" href="cadastrar-usuario.php" onclick="logout();">Sair</a>
                    </div>
                </div>
            </div>
            <!--<button class="logout-button" onclick="voltar()">Voltar</button> -->
        </div>
    </main>

    <script>
        function enviarParaAdmin() {
            document.getElementById('adminForm').submit();
        }

        function enviarParaInicio() {
            document.getElementById('inicioForm').submit();
        }

        function logout() {
            window.location.href = "login.php";
        }
    </script>
</body>
</html>
