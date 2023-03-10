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
          Fortnite: Festival Invernal retorna com itens gratuitos e equipamentos tem??ticos!
        </h1>

        <p>
          O Festival Invernal do Fortnite est?? de volta! O evento retorna mais uma vez com o Chal?? Aconchegante, em que 17 presentes ser??o distribu??dos gratuitamente, todos os dias, a todos os jogadores que entrarem no jogo. <br>
          
          As recompensas incluem dois trajes, duas asas-deltas, dois envelopamentos, tr??s m??sicas do lobby, tr??s sprays, um acess??rio para as costas, uma picareta, um rastro de fuma??a, um gesto e um emote. <br>
          
          Al??m disso, v??rios equipamentos tem??ticos retornar??o ao jogo. Sa??ram do Cofre os Lan??adores de Bolas de Neve, os Presentes de Natal e o Caminh??o Chamativo, que distribui presentes enquanto anda. Por fim, quem jogar com no m??nimo cinco amigos diferentes durante o per??odo do evento ganhar?? tamb??m o gesto Estilo Maromba.
        </p>

          <img src="../../imagens/fortnite-festival-invernal-trajes-800x450.png" alt="Fortnite"/>
          
      </div>
    </main>
  </body>
</html>
