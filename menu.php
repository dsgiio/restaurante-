<!doctype html>
<html lang="pt-br">
<style>
    body {
  background-color: black; 
  color: yellow; 
  text-align: center; 
  font-size: 18px; 
  line-height: 1.6; 
  padding: 20px; 
}

</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="assets/img/topo.jpg" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<main>
    <section class="container-admin-banner">
        <img src="../assets/img/logo.png" class="logo-admin" alt="logo.png">
        <h1>ADMINISTRAÇÃO</h1> <>
        
    </section>

<head>
    <title>Menu do Usuário</title>

    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="menu">
        <div class="user-info dropdown">
            <div class="user-photo">
       
            </div>
        
            <div class="centro">
            <div class="dropdown-content">
                <!-- Conteúdo do dropdown -->
                <form id="inicioForm" action="home.php" method="post" style="display: none;">
                </form>
                <a class="dropdown-item" href="#" onclick="enviarParaInicio();">Início</a>

                <a class="dropdown-item" href="login.php">Perfil</a>
                <a class="dropdown-item" href="#">Configurações</a>

                <!-- Use um formulário para redirecionar para admin.php -->
                <form id="adminForm" action="admin.php" method="post" style="display: none;">
                </form>
                <!-- Passa os dados diretamente para o JavaScript -->
                <a class="dropdown-item" href="../visao/admin.php" onclick="enviarParaAdmin();">Admin</a>

                <a class="dropdown-item" href="cadastrar-usuario.php" onclick="logout();">Sair</a>
            </div>
        </div>

        <!--<button class="logout-button" onclick="voltar()">Voltar</button> -->
    </div>
    <script>
        function enviarParaAdmin() {
            document.getElementById('adminForm').submit();
        }


        function voltar() {
            window.history.back(); // Isso retorna para a página anterior no histórico do navegador
        }
    </script>
    <script>
        function enviarParaInicio() {
            document.getElementById('inicioForm').submit();
        }
    </script>
    <script>
  function logout() {
    // Aqui você pode adicionar a lógica para o logout
    // Por exemplo, enviar uma solicitação para um script no servidor para encerrar a sessão

    // Um exemplo simples seria redirecionar para uma página de logout
    window.location.href = "login.php";
  }
</script>
    
</body>

</html>