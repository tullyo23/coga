<?php
session_start();
include_once('./scr/pages/conexao.php');
$logado = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Co.Ga</title>

    <link
      rel="shortcut icon"
      href="../../imagens/CO.GA (New Logo).png"
      type="image/x-icon"
    />

    <link rel="stylesheet" href="../../css/reset.css"/>
    <link rel="stylesheet" href="../../css/formatopubli.css" />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https: //fonts.googleapis.com/css2? family= Karantina & display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="cabecalho">
      <div class="botoes">
        <a href="../../../index.html"> 
          <img class="logo" src="../../imagens/CO.GA (New Logo).png" alt="logo co.ga"/> 
        </a>
        <a href="../esports.html" class="link">
          <img src="../../imagens/thumbnail_32.E-SPORTS.png" alt="trofeu" />
          <p>E-sport</p>
        </a>

        <a href="../esports.html" class="link">
          <img src="../../imagens/game logo.png" alt="globo" />
          <p>Games</p>
        </a>
      </div>

      <div class="logado_sair">
          <div class="d-flex">
            <a href="./scr/pages/sair.php" class="btn btn-danger me-5">Sair</a>
          </div>
          <div class="nome_usuario">
            <?php
              echo "<u>$logado</u>";
              ?>
          </div>
    </header>

    <main class="corpo">
      <div class="div_artigo">
        <h1>
          Fortnite: Parceria com My Hero Academia chega em 16 de dezembro
        </h1>

        <p>

        A parceria mais aguardada do m??s chega ?? ilha do Fortnite!  Junto das skins chegar??, tamb??m, uma habilidade especial dentro do jogo onde o jogador poder?? utilizar uma habilidade especial do personagem principal do anime! <br>

        O Trailer da colabora????o Fortnite X My Hero Academia ser?? lan??ado ??s 09h da manh?? do dia 16 de Dezembro. <br>

        "Mostre seu hero??smo com Fortnite + My Hero Academia".</p>

          <img src="../../imagens/FkBxHxhXwAA0AjQ.png" alt="Fortnite"/>
          
      </div>
    </main>
  </body>
</html>
