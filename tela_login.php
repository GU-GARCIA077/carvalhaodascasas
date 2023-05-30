<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image:linear-gradient(45deg,darkolivegreen,black) ; 

        }
        ::-webkit-scrollbar {
        width:15px;
        height: 5px;
        }
        ::-webkit-scrollbar-track {
        background:linear-gradient(45deg, darkolivegreen,silver);
        }
        ::-webkit-scrollbar-thumb {
        background:linear-gradient(45deg, silver,darkolivegreen);
        border:1px solid black;
        border-radius: 10px;
        }
        #d1{
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            justify-items: center;
            color: white;
            background-image: url(../IMOBILIARIA/imagens/arearestrita-removebg-preview.png);
            background-repeat: space;
            background-position: left;
            background-size: 500px;
        }
        #ultimo{
        background:linear-gradient(45deg,silver,darkolivegreen);
        color:black;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-items: center;
        justify-items: center;
        text-align: center;
        font-size: larger;
    }
        
    </style>
</head>
<body>
        <div class="container-fluid" id="d1">
            <img src="../IMOBILIARIA/imagens/logo.png" alt="" width="250" height="250">
            <form action="fazendolog.php" method="post">
                <legend>Login</legend>
                Usuário: <input type="text" name="usuario"><br><br>
                Senha: <input type="password" name="senha"><br><br>
                <input type="submit" value="Entrar" class=" btn btn-success"><br>
                <p>Não possui acesso ainda?<br>Cadastre-se em contato pela <strong>newsletter</strong></p>
            </form>
            <a href="indeximob.html">
    <span>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
            <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z"/>
            <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z"/>
        </svg>
    </span> Voltar
</a><br>
        </div><br><br>
        <footer id="ultimo">
        <p>Desenvolvido por <Strong>Gustavo Carvalho</Strong> - todos os direitos reservados</p>
        <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-c-circle" viewBox="0 0 16 16">
                <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512Z"/>
            </svg>
            Carvalhão das casas - 2023
        </p>
    
    </footer>


        
        
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</body>
</html>