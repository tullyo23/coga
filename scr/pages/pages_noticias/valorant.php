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
          Valorant: Killjoy e Raze s??o o primeiro casal LGBTQIA+ do game
        </h1>

        <p>
          A Riot Games tem feito publica????es nos perfis do Valorant nas redes sociais mostrando a perspectiva de Killjoy, contando sobre suas aventuras com Raze, Neon, Phoenix e Yoru. E no dia 11 de dezembro, a empresa postou uma imagem confirmando o primeiro casal LGBTQIA+ do game. <br>

          A imagem que mostra Killjoy e Raze se beijando, no momento da publica????o desta mat??ria, j?? possui mais de 600 mil curtidas e quase 92 mil retweets! <br>

          J?? faz um tempinho que os f??s suspeitam do casal, principalmente em 2021 quando a Riot lan??ou um simulador de namoro do Valorant no primeiro de abril. Para quem n??o lembra, no jogo, Cypher diz ter visto as duas agentes fazendo piquenique na praia. <br>

          Al??m disso, Killjoy e Raze tamb??m possuem falas especiais em que muitos f??s interpretaram como flerte entre as duas, e com a publica????o de hoje, est?? mais do que confirmado o shipp! <br>
        </p>

        <img src="../../imagens/image.png" alt="valorant" />
      </div>
    </main>
  </body>
</html>
