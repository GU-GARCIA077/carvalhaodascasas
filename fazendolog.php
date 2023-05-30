
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("conexao.php");

        // session_start inicia a sessão
        session_start();

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // A variavel $result pega as variaveis $login e $senha, faz uma
        //pesquisa na tabela de usuarios
        $sql = "SELECT usuario, senha FROM  logs
        WHERE `usuario` = '$usuario' AND `SENHA`= '$senha'";
        
        $result = mysqli_query($con, $sql);

        /* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi
        bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
        será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do
        resultado ele redirecionará para a página site.php ou retornara  para a página
        do formulário inicial para que se possa tentar novamente realizar o login */
        if(mysqli_num_rows ($result) > 0 ) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('location:menupriv.php');
        }
        else {
            unset ($_SESSION['usuario']);
            unset ($_SESSION['senha']);
            header('location:tela_login.php');

  }

  mysqli_close($con);
?>

</body>
</html>

?>