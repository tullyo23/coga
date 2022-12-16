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

    <link rel="stylesheet" href="./scr/css/styles.css" />
    <link rel="stylesheet" href="./scr/css/reset.css" />

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
          Valorant: Flamengo no Valorant!!!!
        </h1>

        <p>

          O Flamengo Esports anunciou, neste sábado (10) a entrada na modalidade do VALORANT. O rubro-negro contratou a line-up Bounce, que se classificou para a seletiva fechada do VALORANT Challengers Brasil 2023. A estreia do quinteto sob o comando do novo clube acontece às 18h. <br>

          O clube rubro-negro já esteve indiretamente ligado ao competitivo do VALORANT. Com parceria com a B4 no Free Fire, o Flamengo já tinha demonstrado interesse em ingressar no FPS da Riot Games dois anos atrás, mas o desejo nunca se concretizou. </p>

          <img src="../../imagens/flamengo-esports.png" alt="flamengo"/>

          <p>
            O time do Bounce foi uma das oito equipes a se classificarem para a etapa fechada. Para a a segunda etapa da classificatória, o time vai enfrentar a The Union pela primeira rodada da chave superior. Caso o  <br> Flamengo perca, terá uma segunda chance na repescagem. Confira o elenco do Flamengo: <br>
            Yury “AimGreen” Barbosa <br>
            Flávio “Vett” Barbosa  <br>
            Danilo “Xezaxi” Ataíde <br>
            Gabriel “ryuz4n” Freitas <br>
            Luhan “surpr1seee” Prieto <br>
 
            Alécio “v1NNi” Vinicius
          </p>
          
      </div>
    </main>
  </body>
</html>
