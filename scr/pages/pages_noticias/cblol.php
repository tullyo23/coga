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

      <div class="bailao">
        <button type="button" class="cadastrese">
          <a href="../cadastro.html">Cadastre-se</a>
        </button>
        <button type="button" class="login">
          <a href="../login.html">Login</a>
        </button>
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
          CBLOL 2023: "Sorte enorme" ter Route, diz novo t??cnico da LOUD
        </h1>

        <p>
          BeellzY, treinador-chefe do time de League of Legends da LOUD, comenta novo cargo e contrata????o de jogador sul-coreano
          Com a dispensa de Gabriel "Von", o assistente t??cnico Lucas "BeellzY" assumiu a posi????o de treinador-chefe do time de League of Legends da LOUD na temporada 2023 do Campeonato Brasileiro (CBLOL), conforme oficializado pela organiza????o nesta quarta-feira. Ele fez uma s??rie de publica????es no Twitter para explicar a sua entrada como comandante da comiss??o t??cnica e exaltar a contrata????o do atirador sul-coreano Geom-su "Route".
        </p>

          <img src="../../imagens/cblol.png" alt="flamengo"/>

          <p>
            O novo jogador n??o participa de uma competi????o oficial desde meados de 2021, quando disputou a LCK Spring, a liga de LoL da Coreia do Sul, com a Liiv SANDBOX, ficando na 8?? coloca????o da fase classificat??ria, mas se mant??m em alta nas filas ranqueadas do servidor sul-coreano.
            Route joga profissionalmente desde 2016 e passou por times que participaram das primeira e segunda divis??es da LCK. Em 2019, o atirador fez parte do elenco da Jin Air Green Wings que perdeu as 18 partidas da fase classificat??ria da LCK Summer. <br>
            
            ??? N??s tivemos uma sorte enorme de ter um 'AD' [AD Carry, atirador] do calibre do Route ainda dispon??vel e foi disputado, n??o foi nem de longe algo n??o pensado ??? escreveu BeellzY no Twitter. <br>
            
            Ele tamb??m comentou a sua promo????o para treinador-chefe no lugar de Von: <br>
            
            ??? Em momento algum eu assumi que simplesmente o Von iria sair e eu iria ficar no lugar dele, mas foi uma situa????o que aconteceu e teve aprova????o de todos internamente, ent??o, mesmo que n??o tenha sido algo que todos esperavam, fiquem tranquilos que todo planejamento est?? pronto <br>
             ??? escreveu o t??cnico, ressaltando que ter?? Pedro "Shaquinn" como companheiro na comiss??o t??cnica, embora o profissional conste como jogador do topo na lista de inscritos no CBLOL divulgada pela Riot Games. <br>
            
            ??? N??o vou ficar sozinho na staff. Por mais que me vejam sozinhos no CBLOL, vou ter o ShaQuinn atuando comigo como meu assistant [assistente] e que vai auxiliar com positional ambas as lines. N??o queria que me trabalho tivesse uma lacuna na LOUD, dado que tivemos bons resultados com esse modelo.
            BeellzY entrou para a comiss??o t??cnica da LOUD em junho de 2021 e participou da vitoriosa campanha no 2?? Split do CBLOL 2022. <br>
          </p>
          
      </div>
    </main>
  </body>
</html>
