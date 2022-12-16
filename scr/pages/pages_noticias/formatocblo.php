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
          LoL: Fundador e CEO da pain comentam sobre formato do CBLOL: <br />
          “não gostamos”
        </h1>

        <p>
          O formato do CBLOL foi alvo de discussão por muitos anos e até hoje,
          mesmo com a dupla eliminação implantada, ainda discussões podem ser
          feitas ao redor dele, visando detalhes para torná-lo ainda melhor. Em
          participação no Md3 Podcast, o fundador e o CEO da paiN Gaming, Paada
          e Thomas, comentaram sobre o atual formato do torneio.
        </p>

        <img src="../../imagens/Thomas-CEO-paiN-Fina-CBLOL-2022.jpg" alt="" />
        <p>
          "Não gostamos muito desse formato. Para mim, a Fase de Pontos não
          define muita coisa. Tem um ponto que eu acredito ser debatível, é o
          seguinte, a paiN foi para duas finais pela Upper Bracket, é o que você
          não ganha com isso, nós perdemos com isso na real, porque o time que
          vem debaixo, ele vem embalado porque ganhou de todo mundo. Enquanto
          isso, nós ganhamos pela Upper e temos uma semana a mais, mas ela é bem
          pouco proveitosa, porque ninguém está treinando. Na nossa visão, o
          time que vai pela Upper tem uma desvantagem."
        </p>

        <p>
          Na sequência, Thomas explicou o que ele acredita que deveria ser dado
          como vantagem ao time que chegar à Grande Final do CBLOL pelo
          chaveamento superior. “Uma vitória a mais é demais, mas por exemplo,
          escolher todos os lados da série, nós cogitamos, começar com 1×0
          talvez seja demais.” Para mostrar seu ponto, o CEO dos Tradicionais
          usa o 2º split deste ano como exemplo, onde a paiN chegou à decisão
          pela Upper Bracket, vencendo a própria LOUD no processo. Na sua visão,
          considerando também o formato de “Dupla Eiminação”, a paiN deveria
          também perder duas vezes para estar totalmente fora da disputa pela
          taça. “A LOUD perdeu para nós, voltou e foi campeã, nós perdemos uma
          vez e já era. Acho que é um assunto debatível, porque é muito pouco o
          que se tem de vantagem hoje”, afirma. O fundador da paiN, Paada,
          afirma que deve-se buscar o equilíbrio entre o que é justo e o que é
          bom para o espetáculo. Ele cita a Copa do Mundo que é eliminação
          direta, o que ele diz ser bom para o espetáculo, mas se um time
          “acordar num dia ruim, já era.” “Nós temos a sensação que, hoje, é
          melhor ir para a Final pela Lower”, declara Thomas. Um dos
          participantes do debate, Djoko, sugere que uma solução para isso seria
          que ambos os times que chegaram à Grande Final já estejam garantidos
          para o Worlds, o que tornaria a ida pela Upper Bracket interessante
          pois é a garantia mais cedo de vaga para um torneio internacional.
          “Além disso, o campeão iria direto para a Fase de Grupos e o vice vai
          para a Fase de Entrada”, completa.
        </p>
      </div>
    </main>
  </body>
</html>
