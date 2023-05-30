<?php
include("conexao.php");
$usuario=$_POST['usuario'];
$senha= $_POST['senha'];
$email= $_POST['email'];
$creci= $_POST['creci'];

$sql="INSERT INTO  logs (usuario, senha, email, creci) VALUES ('$usuario','$senha','$email','$creci')";
if(mysqli_query($con,$sql)){
    echo "Corretor cadastrado com sucesso!". "<br>";
    echo "<a href='tela_login.php'>Home</a>";
}else{
    mysqli_close($con);
}



?>

