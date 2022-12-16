<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CO.GA</title>
  <link rel="shortcut icon" href="../imagens/CO.GA (New Logo).png" type="image/x-icon">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/modal.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https: //fonts.googleapis.com/css2? family= Karantina & display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap" rel="stylesheet">

</head>
<body>
  <header class="cabecalho">
  <div class="botoes">
     <a href="../../index.html"> <img class="logo" src="../imagens/CO.GA (New Logo).png" alt="logo co.ga"> </a>
      <a href="../pages/esports.html" class="link">
        <img src="../imagens/thumbnail_32.E-SPORTS.png" alt="trofeu" />
        <p>E-sport</p>
      </a>

      <a href="../pages/gerais.html" class="link">
        <img src="../imagens/game logo.png" alt="globo">
        <p>Games</p>
      </a>
    </div>

    <button type="button" class="cadastrese">
      <a href="./cadastro.php">Cadastre-se</a>
    </button>

  </header>
  <main class="corpo">
    <form class="form" action="testLogin.php" method="POST">
      <div class="grupo">
        <label>Usuário</label>
        <input type="text" name="usuario">
      </div>

      <div class="grupo">
        <label>Senha</label>
        <input type="password" name="senha">
      </div>

      <div class="grupo">
        <a href="./cadastro.php">Novo aqui? Cadastre-se</a>
      </div>

      <div class="grupo">
        
        <button type="submit" name="submit" id="submit">Confirmar</button>
      </div>
    </form>
  </main>
</body>
</html>