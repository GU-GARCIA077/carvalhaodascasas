<?php
include("conexao.php");
session_start();

$tip = $_POST['tipo'];
$objetivo = $_POST['objetivo'];
$bairro = $_POST['bairro'];
$vagas = $_POST['vagas'];
$quartos = $_POST['quartos'];
$metragem = $_POST['metragem'];
$banheiros = $_POST['banheiros'];
$desc = $_POST['descricao'];
$valor = $_POST['valor'];

// Verificar se o ID é válido (por exemplo, se é um número inteiro)

// Verificar se um novo arquivo de imagem foi enviado
if ($_FILES["image"]["error"] == UPLOAD_ERR_OK) {
    $target_dir = "uploads/";
    $target_file = $target_dir . date("YmdHis") . "." . pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // Construir a query de atualização, incluindo a alteração do caminho da imagem
        $sql = "UPDATE imoveistable SET 
        nome='".$_FILES["image"]["name"]."', 
        caminho='".$target_file."', 
        tipo='$tip', 
        objetivo='$objetivo', 
        bairro='$bairro', 
        vagas='$vagas', 
        quartos='$quartos', 
        metragem='$metragem',
        banheiros='$banheiros', 
        descricao='$desc',
        valor='$valor' WHERE id=" .$_GET['id'];

        // Executar a query de atualização
        if (mysqli_query($con, $sql)) {
            echo "Registro atualizado com sucesso.". "<br>". "<a href='menupriv.php'>menu restrito</a>";

            
        } else {
            echo "Erro ao atualizar registro: " . mysqli_error($conexao);
        }
    }
} else {
    // Caso nenhuma nova imagem tenha sido enviada, atualizar apenas os outros campos (sem alterar o caminho da imagem)
    $sql = "UPDATE imoveistable SET
     tipo='$tip', 
     objetivo='$objetivo', 
     bairro='$bairro', 
     vagas='$vagas', 
     quartos='$quartos', 
     metragem='$metragem', 
     banheiros='$banheiros', 
     descricao='$desc', 
     valor='$valor'  WHERE id=" .$_GET['id'];

    // Executar a query de atualização
    if (mysqli_query($con, $sql)) {
        echo "Registro atualizado com sucesso.". "<br>". "<a href='menupriv.php'>menu restrito</a>";


    } else {
        echo "Erro ao atualizar registro: " . mysqli_error($conexao);
    }
}

// Fechar a conexão com o banco de dados
mysqli_close($con);
?>
