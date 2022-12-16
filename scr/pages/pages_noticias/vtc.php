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
          Valorant: VCT 2023 terá torneio internacional no Brasil
        </h1>

        <p>

          Os trinta times franqueados se reunirão na cidade em fevereiro e março
          O início do sistema de franquias no Valorant será marcante para o público brasileiro: São Paulo vai receber um campeonato internacional da modalidade, reunindo os trinta times franqueados pela Riot Games ao redor do mundo. A competição, apelidada de Kick Off, acontecerá entre fevereiro e março de 2023, e será o maior torneio internacional do FPS desde sua criação. </p>

          <img src="../../imagens/vtc.png" alt="vtc"/>

          <p>
            O rápido crescimento e o alto engajamento da comunidade brasileira de VALORANT, dentre as mais apaixonadas do mundo, certamente foi um dos fatores mais relevantes para essa decisão.
            Esse engajamento se dá pela paixão da comunidade pelo jogo, pela presença de times e jogadores de alta performance que rapidamente colocaram o Brasil no topo do esporte globalmente, e também pela tradição que o Brasil traz de alto engajamento com os eventos de esports no Brasil — explica Carlos Antunes, head de esports da Riot Brasil, sobre a escolha do país para sediar o Kick Off. <br>
            
            VCT franqueado
            Além do Kick Off, a Riot ainda revelou mais detalhes sobre a temporada do próximo ano: a empresa confirmou que as cidades-sede para os três campeonatos franqueados, chamados apenas de VCT, serão Los Angeles, Berlin, e Seoul.
            Vale lembrar que o VCT será jogado em "macrorregiões": times do Brasil, LATAM e América do Norte jogarão todos na mesma liga em Los Angeles; e a mesma lógica se aplica para Europa, Oriente Médio e África (Berlin); e para a região do Pacífico (Seoul). <br>
            
            A disputa será entre março e maio, com os melhores times de suas regiões garantindo vaga no único Masters do ano. A Riot explica que, para garantir que os times se acomodem nas cidades-sede, 2023 terá apenas um split competitivo; a partir de 2024, a temporada será dividida em duas etapas — provavelmente inferindo que o circuito voltará a ter dois Masters anuais. <br>
            
            Depois do Masters, os times do VCT que ainda não garantiram a vaga no Champions irão para os Last Chance Qualifiers em julho, buscando um lugar no mundial. A temporada se encerra em agosto, com a coroação do campeão supremo no Valorant Champions 2023. <br>
            
            Valorant Challengers
            Acontecendo simultaneamente ao VCT, o Valorant Challengers terá dois splits em 2023: entre janeiro e julho, os times disputarão por um lugar no Ascension, campeonato que dá vaga temporária na liga franqueada. De acordo com o calendário da Riot, o Ascension deve acontecer no mesmo período que os Last Chance Qualifiers.
          </p>
          
      </div>
    </main>
  </body>
</html>
