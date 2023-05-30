<?php
include("conexao.php");
$sql="DELETE FROM imoveistable WHERE id=". $_GET['id'];

if(mysqli_query($con,$sql)){
    echo "imóvel excluido com sucesso!";
}
else{
    echo "Erro:". mysqli_error($con);
}

echo  "<br>"."<a href='menupriv.php'>Menu privado</a>";


?>