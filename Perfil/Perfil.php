<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../Home/Home.css" rel="stylesheet" type="text/css" />
    <link href="./Perfil.css" rel="stylesheet" type="text/css" />
    <title>Perfil Usuário</title>
  </head>
  <body>
    <header class="header">
      <div class="box-logo"></div>
      <nav class="menu">
        <ul class="menu__nav">
          <li><a href="../Home/Home.php">Início</a></li>
          <li><a href="../Home/Home.php">Jogos</a></li>
          <li><a href="Perfil.php">Perfil</a></li>
        </ul>
      </nav>
    </header>
    <section class="box-perfil">
      <button class="add-jogo"> <a href="../AddGame/AddJogos.html"> Adicionar jogo <a> </button>
      <main class="box-perfil__meus-jogos">
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
            <div class="box-btns">
              <button>Editar</button>
              <button>Excluir</button>
            </div>
         </article>
         <?php }
        }?>
      </main>
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
</html>