<?php
    include("conexao.php");
    session_start();

    $tip=$_POST['tipo'];
    $objetivo=$_POST['objetivo'];
    $bairro=$_POST['bairro'];
    $vagas=$_POST['vagas'];
    $quartos=$_POST['quartos'];
    $metragem=$_POST['metragem'];
    $banheiros=$_POST['banheiros'];
    $desc=$_POST['descricao'];
    $valor=$_POST['valor'];

    if($_FILES["image"]["error"]==UPLOAD_ERR_OK){
        $target_dir="uploads/";
        $target_file=$target_dir.date("YmdHis").".".pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);

        if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file)){
            $sql="INSERT INTO  imoveistable (id, nome, caminho, tipo, objetivo,bairro, vagas, quartos, metragem, banheiros,descricao,valor)
            VALUES(null,'".$_FILES["image"]["name"]."','". $target_file."','$tip','$objetivo','$bairro','$vagas','$quartos','$metragem','$banheiros','$desc','$valor')";
         if(mysqli_query($con, $sql)){
            echo "A imagem foi enviada e armazenada com sucesso.";
            echo "<a href='menupriv.php'> Voltar</a>";
        }else{ echo "erro ao armazenar a imagem:".mysqli_error($con);}
      
        }else {
            echo "erro ao fazer upload da imagem.";
        }
    }else{
        echo "Erro ao enviar a imagem ". $_FILES["image"]["error"];
    }

?>