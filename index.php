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
      href="./scr/imagens/CO.GA (New Logo).png"
      type="image/x-icon"
    />

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
        <a href="./index.html">
          <img class="logo" src="./scr/imagens/CO.GA (New Logo).png" alt="logo co.ga" />
        </a>

        <a href="./scr/pages/esports.html" class="link">
          <img src="./scr/imagens/thumbnail_32.E-SPORTS.png" alt="trofeu" />
          <p>E-sport</p>
        </a>

        <a href="./scr/pages/gerais.html" class="link">
          <img src="./scr/imagens/game logo.png" alt="globo" />
          <p>Games</p>
        </a>
        <a href="./scr/pages/sair.php" class="link" class="sairpg"><p>Sair</p></a>
      </div>
      
        <div>
            <?php
              echo "<h1><u>$logado</u></h1>";
              ?>
          </div>
    </header>

    <main class="corpo">
      <div class="escopo">
        <div class="noticias">
          <a href=".scr/pages/pages_noticias/formatocblo.php" target="_top" class="destaque">
            <div
              class="div_destaque"
              style="
                background-image: url(./scr/imagens/Thomas-CEO-paiN-Fina-CBLOL-2022.jpg),
                  linear-gradient(
                    0deg,
                    rgba(0, 0, 0, 0.533) 30%,
                    rgba(255, 255, 255, 0.25) 100%
                  );
              "
            >
              <div class="textos_destaques">
                <span> League of Legends </span>
                <h3>
                  LoL: Fundador e CEO da pain comentam sobre formato do CBLOL:
                  ???n??o gostamos???
                </h3>
              </div>
            </div>
          </a>
          <a class="secundaria" href="./scr/pages/pages_noticias/valorant.html" target="_top">
            <div
              class="div_secundaria"
              style="
                background-image: url(./scr/imagens/image.png),
                  linear-gradient(
                    0deg,
                    rgba(0, 0, 0, 0.533) 30%,
                    rgba(255, 255, 255, 0.25) 100%
                  );
              "
            >
              <div class="texto_secundario">
                <span>
                  Valorant
                </span>
                <h3>
                  Valorant: Killjoy e Raze s??o o primeiro casal LGBTQIA+ do game
                </h3>
              </div>
            </div>
          </a>
          <a href="./scr/pages/pages_noticias/thelastofus.html" class="secundaria" target="_top">
            <div
            class="div_secundaria"
              style="
                background-image: url(./scr/imagens/Esboco-do-roteiro-de-The-Last-of-Us-Parte-3-esta-pronto-e-jogo-multiplayer-Factions-sera-uma-mistura-de-Escape-From-Tarkov-e-The-Division-diz-rumor-1.png),
                  linear-gradient(
                    0deg,
                    rgba(0, 0, 0, 0.533) 30%,
                    rgba(255, 255, 255, 0.25) 100%
                  );
              "
            >
              <div class="texto_secundario">
                <span>
                  The Last of Us
                </span>
                <h3>
                  The Last of Us Part 3 ser?? o pr??ximo jogo da Naughty Dog, diz rumor.

                </h3>
              </div>
            </div>
          </a>
        </div>
        <div class="noticia_com_info">
          <a href="./scr/pages/pages_noticias/hogwarts.html" target="_top">
            <div class="noti_com_leitura">
              <picture style="grid-area: 1 / 1 / -1 / 8;
              background-image: url(./scr/imagens/EGS_HogwartsLegacy_AvalancheSoftware_S1_2560x1440-2baf3188eb3c1aa248bcc1af6a927b7e.png), linear-gradient(transparent 70%, black)"></picture>
              <div class="noti_textos">
                <div>
        
                  <span>
                    Hogwarts Legacy
                  </span>
                  <h4>
                    Hogwarts Legacy ganha v??deo mostrando explora????o, combate e mais
                  </h4>
                  <p>
                    A Warner Bros. Games divulgou um novo v??deo de gameplay mostrando um pouco mais do mundo e algumas mec??nicas...
                  </p>
                </div>
                <div class="data">
                  <span>
                    dezembro 14, 2022
                  </span>
                </div>
              </div>
            </div>
          </a>

          <a href="./scr/pages/pages_noticias/fotnitefestival.html" target="_top">
            <div class="noti_com_leitura">
              <picture style="grid-area: 1 / 1 / -1 / 8;
              background-image: url(./scr/imagens/FkBxHxhXwAA0AjQ.png), linear-gradient(transparent 70%, black)"></picture>
              <div class="noti_textos">
                <div>
        
                  <span>
                    Fortnite
                  </span>
                  <h4>
                    Fortnite: Parceria com My Hero Academia chega em 16 de dezembro
                  </h4>
                  <p>
                    A parceria mais aguardada do m??s chega ?? ilha do Fortnite!
                  </p>
                </div>
                <div class="data">
                  <span>
                    dezembro 14, 2022
                  </span>
                </div>
              </div>
            </div>
          </a> 

          <a href="./scr/pages/pages_noticias/fortniteinvernal.html" target="_top">
            <div class="noti_com_leitura">
              <picture style="grid-area: 1 / 1 / -1 / 8;
              background-image: url(./scr/imagens/fortnite-festival-invernal-trajes-800x450.png), linear-gradient(transparent 70%, black)"></picture>
              <div class="noti_textos">
                <div>
        
                  <span>
                    Fortnite
                  </span>
                  <h4>
                    Fortnite: Festival Invernal retorna com itens gratuitos e equipamentos tem??ticos!
                  </h4>
                  <p>
                    O Festival Invernal do Fortnite est?? de volta! 
                  </p>
                </div>
                <div class="data">
                  <span>
                    dezembro 14, 2022
                  </span>
                </div>
              </div>
            </div>
          </a>
 
          <a href="./scr/pages/pages_noticias/flamengo.html" target="_top">
            <div class="noti_com_leitura">
              <picture style="grid-area: 1 / 1 / -1 / 8;
              background-image: url(./scr/imagens/flamengo-esports.png), linear-gradient(transparent 70%, black)"></picture>
              <div class="noti_textos">
                <div>
        
                  <span>
                    Valorant
                  </span>
                  <h4>
                    Valorant: Flamengo no Valorant!!!!
                  </h4>
                  <p>
                    O Flamengo Esports anunciou, neste s??bado (10)...
                  </p>
                </div>
                <div class="data">
                  <span>
                    dezembro 14, 2022
                  </span>
                </div>
              </div>
            </div>
          </a>

          <a href="./scr/pages/pages_noticias/fns.html" target="_top">
            <div class="noti_com_leitura">
              <picture style="grid-area: 1 / 1 / -1 / 8;
              background-image: url(./scr/imagens/FNS.jpg), linear-gradient(transparent 70%, black)"></picture>
              <div class="noti_textos">
                <div>
        
                  <span>
                    Valorant
                  </span>
                  <h4>
                    Valorant: FNS diz que 100Thieves come??ar?? na frente na liga Americana.
                  </h4>
                  <p>
                    O ex-jogador da Optic afirma que diante de todos...
                  </p>
                </div>
                <div class="data">
                  <span>
                    dezembro 14, 2022
                  </span>
                </div>
              </div>
            </div>
          </a>

          <a href="./scr/pages/pages_noticias/vtc.html" target="_top">
            <div class="noti_com_leitura">
              <picture style="grid-area: 1 / 1 / -1 / 8;
              background-image: url(./scr/imagens/vtc.png), linear-gradient(transparent 70%, black)"></picture>
              <div class="noti_textos">
                <div>
        
                  <span>
                    Valorant
                  </span>
                  <h4>
                    Valorant: VCT 2023 ter?? torneio internacional no Brasil
                  </h4>
                  <p>
                    Os trinta times franqueados se reunir??o na cidade em fevereiro e mar??o
                    O in??cio do sistema de franquias...
                  </p>
                </div>
                <div class="data">
                  <span>
                    dezembro 14, 2022
                  </span>
                </div>
              </div>
            </div>
          </a>

          <a href="./scr/pages/pages_noticias/cblol.html" target="_top">
            <div class="noti_com_leitura">
              <picture style="grid-area: 1 / 1 / -1 / 8;
              background-image: url(./scr/imagens/cblol.png), linear-gradient(transparent 70%, black)"></picture>
              <div class="noti_textos">
                <div>
        
                  <span>
                    League of Legends
                  </span>
                  <h4>
                    CBLOL 2023: "Sorte enorme" ter Route, diz novo t??cnico da LOUD
                  </h4>
                  <p>
                    BeellzY, treinador-chefe do time de League of Legends da LOUD, comenta novo cargo e contrata????o de jogador sul-coreano...
                  </p>
                </div>
                <div class="data">
                  <span>
                    dezembro 14, 2022
                  </span>
                </div>
              </div>
            </div>
          </a>











        </div>
      </div>
    </main>
  </body>
</html>
