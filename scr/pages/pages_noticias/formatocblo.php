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
          ???n??o gostamos???
        </h1>

        <p>
          O formato do CBLOL foi alvo de discuss??o por muitos anos e at?? hoje,
          mesmo com a dupla elimina????o implantada, ainda discuss??es podem ser
          feitas ao redor dele, visando detalhes para torn??-lo ainda melhor. Em
          participa????o no Md3 Podcast, o fundador e o CEO da paiN Gaming, Paada
          e Thomas, comentaram sobre o atual formato do torneio.
        </p>

        <img src="../../imagens/Thomas-CEO-paiN-Fina-CBLOL-2022.jpg" alt="" />
        <p>
          "N??o gostamos muito desse formato. Para mim, a Fase de Pontos n??o
          define muita coisa. Tem um ponto que eu acredito ser debat??vel, ?? o
          seguinte, a paiN foi para duas finais pela Upper Bracket, ?? o que voc??
          n??o ganha com isso, n??s perdemos com isso na real, porque o time que
          vem debaixo, ele vem embalado porque ganhou de todo mundo. Enquanto
          isso, n??s ganhamos pela Upper e temos uma semana a mais, mas ela ?? bem
          pouco proveitosa, porque ningu??m est?? treinando. Na nossa vis??o, o
          time que vai pela Upper tem uma desvantagem."
        </p>

        <p>
          Na sequ??ncia, Thomas explicou o que ele acredita que deveria ser dado
          como vantagem ao time que chegar ?? Grande Final do CBLOL pelo
          chaveamento superior. ???Uma vit??ria a mais ?? demais, mas por exemplo,
          escolher todos os lados da s??rie, n??s cogitamos, come??ar com 1??0
          talvez seja demais.??? Para mostrar seu ponto, o CEO dos Tradicionais
          usa o 2?? split deste ano como exemplo, onde a paiN chegou ?? decis??o
          pela Upper Bracket, vencendo a pr??pria LOUD no processo. Na sua vis??o,
          considerando tamb??m o formato de ???Dupla Eimina????o???, a paiN deveria
          tamb??m perder duas vezes para estar totalmente fora da disputa pela
          ta??a. ???A LOUD perdeu para n??s, voltou e foi campe??, n??s perdemos uma
          vez e j?? era. Acho que ?? um assunto debat??vel, porque ?? muito pouco o
          que se tem de vantagem hoje???, afirma. O fundador da paiN, Paada,
          afirma que deve-se buscar o equil??brio entre o que ?? justo e o que ??
          bom para o espet??culo. Ele cita a Copa do Mundo que ?? elimina????o
          direta, o que ele diz ser bom para o espet??culo, mas se um time
          ???acordar num dia ruim, j?? era.??? ???N??s temos a sensa????o que, hoje, ??
          melhor ir para a Final pela Lower???, declara Thomas. Um dos
          participantes do debate, Djoko, sugere que uma solu????o para isso seria
          que ambos os times que chegaram ?? Grande Final j?? estejam garantidos
          para o Worlds, o que tornaria a ida pela Upper Bracket interessante
          pois ?? a garantia mais cedo de vaga para um torneio internacional.
          ???Al??m disso, o campe??o iria direto para a Fase de Grupos e o vice vai
          para a Fase de Entrada???, completa.
        </p>
      </div>
    </main>
  </body>
</html>
