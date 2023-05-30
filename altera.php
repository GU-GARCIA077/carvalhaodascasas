<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todos os imóveis</title>
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
        header{
            background:linear-gradient(45deg,black,silver);
        }
        #img1{
            border-radius: 5px;
        }
        h1,h2,h3{
            font-style: italic;
            color:whitesmoke;
            text-decoration:none;
            text-shadow: black;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        #fundo{
        background-image:url(https://img-4.linternaute.com/a2wjTQPut1g7Okvitr8wuxtEeYY=/1240x/smart/6072cc9cbc6b49bebd555c190d511ebe/ccmcms-linternaute/10346361-saota.jpg) ;
        height:400px ;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    h5{ 
            font-style: italic;
            text-decoration: underline;
            
           
        }
       
       .nav-link:link{
        color:darkgreen;
       }
        a:active{
        color: darkgreen;
       }
       
       .nav-link:hover{
        color: blanchedalmond;
       }
       .nav-link:visited{
        color: blanchedalmond;
       }
       .selects,#procura{
        background-color: darkolivegreen;
        width: 200px;
        height: 50px;
        border-radius: 5px;
        border: 1px solid black;
        color: white;
       }
       #envia{
        border: none;
        background-color: darkolivegreen;
        color: white;
       }
       #form_filtro{
        width: 80%;
        background-color:thistle;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        border: 2px solid darkgreen;
    
       }
       #centraliza{
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        color: white;
        align-items: center;
        justify-content: center;
        text-align: justify;

       }
       #centraliza2{
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        color: white;
        align-items: center;
        justify-content: center;
        align-content: center;
        text-align: justify;
        border: 2px solid black;
        border-radius: 5px;
        width: 70%;
        margin-left: 15%;
        
       }
       #p{
        text-align:center ;
        color:black;
        font-size: medium;
        font-weight: normal;
        text-decoration: solid;
        text-decoration-line: underline;
        text-decoration-color: black;
       }
       #a1{
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        border: 1px solid black;
        border-radius: 5px;
        color: black;
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
    #slide_top {
    position:fixed;
    right:1rem;
    bottom:1rem;
    z-index:998;
    display:none;
    width:45px;
    height:45px;
	background:linear-gradient(45deg, silver, darkolivegreen);
    text-indent:-9999px;
    border: 1px solid black;
    border-radius: 10px;
	-webkit-transition:opacity .2s ease-in-out 0s, display .3s ease-in-out 0s;
	-moz-transition:opacity .2s ease-in-out 0s, display .3s ease-in-out 0s;
	-ms-transition:opacity .2s ease-in-out 0s, display .3s ease-in-out 0s;
	-o-transition:opacity .2s ease-in-out 0s, display .3s ease-in-out 0s;
	transition:opacity .2s ease-in-out 0s, display .3s ease-in-out 0s;
}

#slide_top:before {
	content: "";
	position: absolute;
	top:16px;
	left:18px;
	border:5px solid transparent;
	border-bottom-color: black;
	-webkit-transition:border-color .2s ease-in-out;
	-moz-transition:border-color .2s ease-in-out;
	-ms-transition:border-color .2s ease-in-out;
	-o-transition:border-color .2s ease-in-out;
	transition:border-color .2s ease-in-out;
}



</style>
</head>
<body>
    <header>
            <div class="container-fluid" id="anc0">
                <nav class="navbar">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img id="img1" src="../IMOBILIARIA/imagens/logo.png" alt="logo carvalhao das casas" width="300" height="200" class="d-inline-block align-text-top">
                        </a>
                        <div class="divcab">
                            <h1>Carvalhão das Casas</h1><br>
                            <h3>"O cara da casa certa pra você"</h3>
                        </div>
                        <a class="navbar-brand" href="#">
                            <img id="img1" src="../IMOBILIARIA/imagens/logo.png" alt="logo carvalhao das casas" width="300" height="200" class="d-inline-block align-text-top">
                        </a><br>
                        <a id="a1" href="indeximob.html">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
                                        <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z"/>
                                        <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z"/>
                                    </svg>
                                </span> Voltar
                        </a>
                    </div>
                </nav>
            </div>
    </header>
    <section>
        <div class="container-fluid">
            <div id="centraliza">
                <h2>Imóveis:</h2><br>

                <?php
                include("conexao.php");

                $sql="SELECT id, nome, caminho,tipo, objetivo, bairro, vagas, quartos, metragem, banheiros, descricao, valor FROM imoveistable"; 
                $result=mysqli_query($con,$sql);

                if(mysqli_num_rows($result)>0){
                    while ($row=mysqli_fetch_assoc($result)){
                        echo "<div class='container-fluid'>";
                            echo"<div id='centraliza2'>";
                                echo "<h3>".$row["tipo"]." para ".$row["objetivo"]." no bairro ".$row["bairro"]."</h3><br><br>";
                                echo "<img src='" . $row["caminho"] . "' alt='" . $row["nome"] . "' style='max-width: 80%';'height:500px';'display:flex';'flex-wrap: wrap';'align-items: center';
                                'justify-content: center';'border-radius: 5px;'"."'class='img-fluid''>"."<br><br>";
                                echo "<p id='p'><strong> #id referência: ".$row["id"]."</strong></p>";
                                echo " <ul class='list-group list-group-flush'>"
                                            ."<li class='list-group-item'>".
                                            "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-car-front-fill' viewBox='0 0 16 16'>
                                            <path d='M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z'/>
                                        </svg> Vagas de garagem: ".$row["vagas"]."</li>".
                                        "<li class='list-group-item'>".
                                        "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-bricks' viewBox='0 0 16 16'><path d='M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5v-3zM3 4v2h4.5V4H3zm5.5 0v2H13V4H8.5zM3 10v2h4.5v-2H3zm5.5 0v2H13v-2H8.5zM1 1v2h3.5V1H1zm4.5 0v2h5V1h-5zm6 0v2H15V1h-3.5zM1 7v2h3.5V7H1zm4.5 0v2h5V7h-5zm6 0v2H15V7h-3.5zM1 13v2h3.5v-2H1zm4.5 0v2h5v-2h-5zm6 0v2H15v-2h-3.5z'/>
                                        </svg>". $row["quartos"]." quartos</li>".
                                        "<li class='list-group-item'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-rulers' viewBox='0 0 16 16'>
                                        <path d='M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1H1z'/>
                                        </svg>".$row["metragem"] ." m²</li>".
                                        " <li class='list-group-item'>
                                        <span class='material-symbols-outlined'>bathtub</span> Banheiros:".$row["banheiros"]." </li>".
                                        "</ul>";
                                echo "<br><br>"."<p id='p'><strong>Descrição do imóvel:</strong></p>"."<p>".$row["descricao"]."</p>".
                                    "<p id='p'><b>Investimento:</b><br></p>"."<p><strong>R$:".$row["valor"]."</strong></p>";
                                    echo "<a href='formaltera.php?id={$row['id']}'><svg xmlns='http://www.w3.org/2000/svg' width='22' height='22' fill='currentColor' class='bi bi-arrow-repeat' viewBox='0 0 16 16'>
                                    <path d='M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z'/>
                                    <path fill-rule='evenodd' d='M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z'/>
                                  </svg>Alterar Imóvel</a>";
                                 echo "</div>";
                            echo "<hr>";
                        echo "</div>";
                    
                    }
                }


                ?>
            </div>
        </div>
    </section>
    <!--botão topo-->
    <a href="#anc0" id="slide_top" style="display:inline ;">
        ::before
        <span id="slide_top_hover" style="opacity:0;"></span>
    </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>