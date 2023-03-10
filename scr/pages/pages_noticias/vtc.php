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

    </header>

    <main class="corpo">
      <div class="div_artigo">
        <h1>
          Valorant: VCT 2023 ter?? torneio internacional no Brasil
        </h1>

        <p>

          Os trinta times franqueados se reunir??o na cidade em fevereiro e mar??o
          O in??cio do sistema de franquias no Valorant ser?? marcante para o p??blico brasileiro: S??o Paulo vai receber um campeonato internacional da modalidade, reunindo os trinta times franqueados pela Riot Games ao redor do mundo. A competi????o, apelidada de Kick Off, acontecer?? entre fevereiro e mar??o de 2023, e ser?? o maior torneio internacional do FPS desde sua cria????o. </p>

          <img src="../../imagens/vtc.png" alt="vtc"/>

          <p>
            O r??pido crescimento e o alto engajamento da comunidade brasileira de VALORANT, dentre as mais apaixonadas do mundo, certamente foi um dos fatores mais relevantes para essa decis??o.
            Esse engajamento se d?? pela paix??o da comunidade pelo jogo, pela presen??a de times e jogadores de alta performance que rapidamente colocaram o Brasil no topo do esporte globalmente, e tamb??m pela tradi????o que o Brasil traz de alto engajamento com os eventos de esports no Brasil ??? explica Carlos Antunes, head de esports da Riot Brasil, sobre a escolha do pa??s para sediar o Kick Off. <br>
            
            VCT franqueado
            Al??m do Kick Off, a Riot ainda revelou mais detalhes sobre a temporada do pr??ximo ano: a empresa confirmou que as cidades-sede para os tr??s campeonatos franqueados, chamados apenas de VCT, ser??o Los Angeles, Berlin, e Seoul.
            Vale lembrar que o VCT ser?? jogado em "macrorregi??es": times do Brasil, LATAM e Am??rica do Norte jogar??o todos na mesma liga em Los Angeles; e a mesma l??gica se aplica para Europa, Oriente M??dio e ??frica (Berlin); e para a regi??o do Pac??fico (Seoul). <br>
            
            A disputa ser?? entre mar??o e maio, com os melhores times de suas regi??es garantindo vaga no ??nico Masters do ano. A Riot explica que, para garantir que os times se acomodem nas cidades-sede, 2023 ter?? apenas um split competitivo; a partir de 2024, a temporada ser?? dividida em duas etapas ??? provavelmente inferindo que o circuito voltar?? a ter dois Masters anuais. <br>
            
            Depois do Masters, os times do VCT que ainda n??o garantiram a vaga no Champions ir??o para os Last Chance Qualifiers em julho, buscando um lugar no mundial. A temporada se encerra em agosto, com a coroa????o do campe??o supremo no Valorant Champions 2023. <br>
            
            Valorant Challengers
            Acontecendo simultaneamente ao VCT, o Valorant Challengers ter?? dois splits em 2023: entre janeiro e julho, os times disputar??o por um lugar no Ascension, campeonato que d?? vaga tempor??ria na liga franqueada. De acordo com o calend??rio da Riot, o Ascension deve acontecer no mesmo per??odo que os Last Chance Qualifiers.
          </p>
          
      </div>
    </main>
  </body>
</html>
