<?php
require_once "conexao.php";
session_start();

$name = $_POST['title'];
$desc = $_POST['desc'];
$usuario = $_SESSION['Email'];

if(isset($_FILES['pic'])){
    $ext = strtolower(substr($_FILES['pic']['name'],-4)); 
    $new_name = date("Y.m.d-H.i.s") . $ext; 
    $dir = '../assets/img/'; 
    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); 
}
  $Skl = "SELECT * FROM usuario where Login = '$usuario' ";
  $result = mysqli_query($conn, $Skl);
  if (mysqli_num_rows($result) > 0) {
       while($row = mysqli_fetch_assoc($result)) {
           $sql = "INSERT INTO post(Titulo,Descricao,Imagem,creatorFK,Autor) Values ('$name','$desc', '$new_name','$row[Id]','$row[name]')";
           if ($conn->query($sql) === TRUE) {
               header('Location: ../Perfil/Perfil.php');
             } else {
               echo "Error: " . $sql . "<br>" . $conn->error;
             }
       }
     }else{
       echo "Error: " . $Skl . "<br>" . $conn->error;
     }
?>