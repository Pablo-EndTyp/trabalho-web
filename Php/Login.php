<?php
session_start();
require_once "conexao.php";

//Link -localhost/O que ainda nunca foi realizado/Login/Login.html

$email = $_POST['email'];
$password = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE Login='$email' AND Senha='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $_SESSION["Logado"] = "Logado";
    $_SESSION["Email"] = "$email";
    header('Location: ../Home/Home.php');
  }
}else{
    header('Location: ../Login/Login.php?Error=error');
}

?>