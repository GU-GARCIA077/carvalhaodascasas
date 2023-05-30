<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de imóvel:</title>
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
            color: white;
            text-align: center;
            
        }
        fieldset{
            border:2px solid black;
            border-radius:5px ;
        }
    </style>
</head>
<body>
    
    <div id="d1">
    <img src="../IMOBILIARIA/imagens/logo.png" alt="" width="250" height="250">
        <form action="actioncadastro.php" method="post" enctype="Multipart/form-data">
            <fieldset>
                <legend>Cadastro de Imóvel:</legend>
            
                <label for="image">Insira imagens do imóvel:</label><br>
                <input type="file" name="image" multiple><br><br>
                <label for="radio1">Tipo:</label><br>
                <input type="radio" name="tipo" value="Casa">Casa. 
                <input type="radio" name="tipo" value="Apartamento">Apartamento. 
                <input type="radio" name="tipo" value="Lote">Lote. <br><br>
                <label for="radio2">Objetivo:</label><br>
                <input type="radio" name="objetivo" value="vender">Vender. 
                <input type="radio" name="objetivo" value="alugar">Alugar. <br><br>
                <label for="bairro">Bairro:</label><br>
                <input type="text" name="bairro"><br><br>
                <label for="vagas">Vagas de garagem:</label><br>
                <input type="number" name="vagas"><br><br>
                <label for="quartos">Quartos:</label><br>
                <input type="number" name="quartos"><br><br>
                <label for="metragem">Metragem:</label><br>
                <input type="number" name="metragem"><br><br>
                <label for="banheiros">Quantidade de banheiros:</label><br>
                <input type="number" name="banheiros"><br><br>
                <label for="descricao">Descrição do imóvel:</label><br>
                <textarea name="descricao" id="desc" cols="40" rows="5" placeholder="descreva o imóvel como desejar..." ></textarea><br><br>
                <label for="valor">Valor em R$:</label><br>
                <input type="text" name="valor"><br><br>
                <input type="submit" value="Enviar" class=" btn btn-success"><input type="reset" value="Limpar" class=" btn btn-danger">
            </fieldset>
        </form>
        <a href="menupriv.php">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
                    <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z"/>
                    <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z"/>
                </svg>
            </span> Voltar
        </a>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>