<?php
require_once "conexao.php"; //Conexão c/ BD

$useremail = $_POST["email"];
$password = $_POST["senha"];
$autor    = $_POST["name"];

//$sql = "INSERT INTO nomeBD" (firstname, lastname, email)
//VALUES ('John, Doe', nome@gmail.com)

$sql = "INSERT INTO usuario (Login, Senha, name)
        Values ('$useremail','$password','$autor')";

if ($conn->query($sql) === TRUE){
  header('Location: ../Perfil/Perfil.php');
} else{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>