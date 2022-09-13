<?php 
session_start();
error_reporting(0);
$VerLogado =  $_SESSION["Logado"];
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="Home.css" rel="stylesheet" type="text/css" />
    <title>Página Principal</title>
  </head>
  <body>
    <header class="header">
      <div class="box-logo"></div>
      <nav class="menu">
        <ul class="menu__nav">
          <li><a href="#inicio">Início</a></li>
          <li><a href="#jogos">Jogos</a></li>
   
          <?php  if($VerLogado !== "Logado"){ ?>
          <li style='display: none'><a href="../Perfil/Perfil.html">Peril</a></li>
          <li><a href="../Login/Login.php">Login</a></li>
           <?php }else{ ?>
         <li><a href="../Perfil/Perfil.php">Perfil</a></li>
          <li style='display: none'><a href="../Login/Login.php">Login</a></li>
         <?php }?>
          
        </ul>
      </nav>
    </header>
    <section id="inicio" class="container">
      <div class="container__slide"></div>
    </section>
    <section id="jogos" class="lista-jogos">
      <div class="jogos">
            
      <?php 
         session_start(); 
         require_once "../PHP/conexao.php";


         $sql = "SELECT * FROM post";
         $result = mysqli_query($conn, $sql);
         if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {?>
            
            <article class="perfil-jogo">
            <img
              class="jogo-imagem"
              src="../assets/img/<?php echo $row['Imagem'];?>"
              alt="imagem do jogo"
            />
            <div class="jogo-descricao">
              <h3> <?php echo $row['Titulo']; ?> </h3>
              <p>
                 <?php echo $row['Descricao']; ?>
              </p>
            </div>
            
         </article>

         <?php } } ?> 
      </div>
    </section>

    <footer>
      <div class="direitos-autorais">
        <p>©2022 Pablo Alves - Todos os direitos reservados</p>
      </div>
      <div class="redes-sociais">
        <a
          class="social-link"
          href="https://www.instagram.com/rei_poring/"
          target="_blank"
        >
          <img src="../assets/icon/icons8-instagram.svg" alt="Instagram" />
        </a>
        <a
          class="social-link"
          href="https://github.com/Pablo-EndTyp"
          target="_blank"
        >
          <img src="../assets/icon/icons8-github.svg" alt="GitHub" />
        </a>
        <a class="social-link" href="mailto:nanorip6@gmail.com" target="_blank">
          <img src="../assets/icon/icons8-gmail.svg" alt="Email" />
        </a>
      </div>
    </footer>
  </body>
  <script src="./Home.js"></script>
</html>