<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Links CSS-->
    <link href="../Cadastro/Cadastro.css" rel="stylesheet" type="text/css" />
    <title>Login</title>
  </head>
  <body>
    <a href="../Home/Home.php" class="icon_home">
      <img src="../assets/icon/icons8-home.svg" />
    </a>
    <form class="formulario" method="post" action="../Php/Login.php">
      <h1>Login</h1>
      <div class="formulario__email">
        <h4>Email</h4>
        <input type="email" placeholder="Digite seu email..." name="email" />
      </div>
      <div class="formulario__senha">
        <h4>Senha</h4>
        <input type="password" placeholder="Digite sua senha..." name="senha" />
      </div>
      <div>
        <a class="" href="../Cadastro/Cadastro.html"
          >Não possui uma conta? Clique aqui!</a
        >
      </div>
      <button class="btn" onclick="">Logar</button>
    </form>
  </body>
</html>
