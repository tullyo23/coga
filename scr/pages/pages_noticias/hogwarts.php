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
          Hogwarts Legacy ganha v??deo mostrando explora????o, combate e mais
        </h1>

        <p>
          A Warner Bros. Games divulgou um novo v??deo de gameplay mostrando um pouco mais do mundo e algumas mec??nicas de Hogwarts Legacy. Dentre os destaques, a grava????o mostra o voo, combate e a casa personaliz??vel. <br>

          Em um showcase de mais de 30 minutos, foi mostrado a explora????o pelo mapa em um hipogrifo Onyx, que ?? um b??nus de pr?? venda, ou a vassoura. </p>

          <img src="../../imagens/EGS_HogwartsLegacy_AvalancheSoftware_S1_2560x1440-2baf3188eb3c1aa248bcc1af6a927b7e.png" alt="Hogwarts Legacy" style="height: 700px;" />

         <p> Hogwarts Legacy tamb??m ter?? a Arena de Batalha de Arte das Trevas, outro benef??cio dispon??vel nas Edi????es Deluxe e Digital do jogo. O local fica dentro da Floresta Proibida e l?? ?? poss??vel treinar utilizando magias proibidas como Avada Kedavra e Crucio. <br>

          As vers??es de PS4 e Xbox One de Hogwarts Legacy ser??o lan??adas em 4 de abril de 2023; enquanto as vers??es de PS5, Xbox Series e PC chegam em 10 de fevereiro e a de Switch em 25 de julho.
        </p>

      </div>
    </main>
  </body>
</html>
