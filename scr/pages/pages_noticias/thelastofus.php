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

    <link rel="stylesheet" href="../../css/reset.css" />
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
          The Last of Us Part 3 ser?? o pr??ximo jogo da Naughty Dog, diz rumor.
        </h1>

        <p>
          O mundo amanheceu nesta quarta-feira (14/12/2022) com um rumor de que The Last of Us Part III ?? o pr??ximo projeto de Neil Druckmann na Naughty Dog. <br>

          A informa????o surgiu no perfil de ViewerAnon no Twitter, um leaker que vem ganhando cada vez mais credibilidade entre os jogadores. Entretanto, ele apenas menciona que o game est?? em produ????o, sem nenhuma outra informa????o. <br>

          Enquanto The Last of Us Part 3 ainda pode demorar, a franquia n??o para de crescer. Al??m do remake do jogo original da s??rie estar chegando ao PC, um multiplayer standalone ta <br>

          Al??m disso, os f??s da franquia poder??o experimentar o universo dos games de uma nova maneira em janeiro de 2023: a s??rie de The Last of Us produzida pela HBO estreia no dia 15 de janeiro!
        </p>

        <img src="../../imagens/Esboco-do-roteiro-de-The-Last-of-Us-Parte-3-esta-pronto-e-jogo-multiplayer-Factions-sera-uma-mistura-de-Escape-From-Tarkov-e-The-Division-diz-rumor-1.png" alt="the last of us" />
      </div>
    </main>
  </body>
</html>
