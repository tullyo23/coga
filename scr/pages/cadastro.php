<?php

include_once('conexao.php');

if(isset($_POST['submit']))
    {
    //print_r('usuario: ' . $_POST['usuario']);
   // print_r('<br>');
    //print_r('email: ' . $_POST['email']);
    //print_r('<br>');
    //print_r('senha: ' . $_POST['senha']);

    //include_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmasenha = $_POST['confirmasenha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(usuario,email,senha,confirmasenha) 
    VALUES ('$usuario','$email','$senha','$confirmasenha')");

    
//$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";

//$result = $conexao->query($sql);

 //print_r($sql);
// print_r($result);

//if(mysqli_num_rows($result) < 1)
if (!$result)
{
 //   unset($_SESSION['usuario']);
//  unset($_SESSION['senha']);
    header('Location: cadastro.php');
}
else
{
   // $_SESSION['usuario'] = $usuario;
   // $_SESSION['senha'] = $senha;
    header('Location: login.php');
}


  //if (!$result){
   // echo "<script type='javascript'>alert('cadastro realizado com Sucesso!');";
  // header('Location: login.php');
  //}
  //else{
  //  echo "<script type='javascript'>alert('ERROR vc é burro!!!!!!!!!!!!!');";
  //}

    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CO.GA</title>
  <link rel="shortcut icon" href="../imagens/CO.GA (New Logo).png" type="image/x-icon">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/cadastro.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https: //fonts.googleapis.com/css2? family= Karantina & display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap" rel="stylesheet">
</head>
<body>
<header class="cabecalho">
      <div class="botoes">
        <a href="../../index.html"> <img class="logo" src="../imagens/CO.GA (New Logo).png" alt="logo coga"></a>
         <a href="../pages/esports.html" class="link">
           <img src="../imagens/thumbnail_32.E-SPORTS.png" alt="trofeu" />
           <p>E-sport</p>
         </a>
   
         <a href="../pages/gerais.html" class="link">
          <img src="../imagens/game logo.png" alt="globo">
          <p>Games</p>
        </a>
       </div>
      
      <div class="bailao">
  
        <button type="button" class="login">
          <a href="./login.php">Login</a>
        </button>
      </div>

    </header>

  <main class="corpo">

    <form class="form" action="cadastro.php" method="post">

      <h1>CRIAR CONTA</h1>

      <div class="grupo">
      <form action="cadastro.php" method="post">
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario" class="inputUser" required>
      </div>

      <div class="grupo">
        <label for="email">email</label>
        <input type="email" name="email" id="email" class="inputUser" required>
      </div>

      <div class="grupo">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" class="inputUser" required>
      </div>

      <div class="grupo">
        <label for="confirmasenha">Confirmar Senha</label>
        <input type="password" name="confirmasenha" id="confirmasenha" class="inputUser" required>
      </div>

      <div class="grupo">
        <button type="submit" name="submit" id="submit">Confirmar</button>
      </div>
    </form>

  </main>
  
</body>
</html>