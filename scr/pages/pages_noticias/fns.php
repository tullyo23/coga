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
          Valorant: FNS diz que 100Thieves começará na frente na liga Americana.
        </h1>

        <p>
          O ex-jogador da Optic afirma que diante de todos os times apresentados na liga Americana o time da 100Thieves começará com o pé na frente. <br>

          A vantagem se dá devido a pouca alteração em seu elenco diz o jogador, elenco esse que conta com os jogadores : Peter “Asuna” Mazuryk, Derrek “Derrek” Ha, Brenden “stellar” McGrath e Sean “bang” Bezerra, que já faziam parte do elenco e contam com a adição Matthew “Cryo” Panganiban e a ida de William “Will” Cheng o que torna contundente a afirmação do FNS já que os outros times como Cloud9 e Sentinels tiveram grandes mudanças em seus elencos o que pode ocasionar em uma maior demora para o encaixe dos jogadores.
          </p>

          <img src="../../imagens/FNS.jpg" alt="FNS" style="height: 700px;"/>
          
      </div>
    </main>
  </body>
</html>
