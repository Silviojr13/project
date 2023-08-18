<!DOCTYPE html>
<?php
    
    include_once("conexao.php")

?>
<html class="tamanho">

<head>
    <meta charset="utf-8">
    <title>PUCine</title>
    <link rel="icon" href="icons/image 4.png" type="image/x-icon" >
    <!--css-->
    <link rel="stylesheet" href="css/PUCine.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lilita+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>

</head>

<body>

    <div class="index">
        <!--começo do header-->
        <div class="header">

            <div class="logo">
                <a href="PUCine.php"><img src="icons/LOGO.png" class="iconPuc"></a>
            </div>
            

            <div class="teste">

                <div class="">
                    <a href="404.html" class="flex">
                        <img src="icons/claquete1.png" class="oo1">
                        <h3 class="menu">PROGRAMAÇÃO</h3>
                    </a>
                </div>

                <div class="">
                    <a href="404.html" class="flex">
                        <img src="icons/ic_outline-miscellaneous-services.png" class="oo1">
                        <h3 class="menu">SERVIÇOS</h3>
                    </a>
                </div>

                <div class="">
                    <a href="404.html" class="flex">
                        <img src="icons/solar_hand-stars-broken.png" class="oo1">
                        <h3 class="menu">BENEFÍCIOS</h3>
                    </a>
                </div>

                <div class="">
                    <a href="contato.php" class="flex">
                        <img src="icons/Vector.svg" class="oo1">
                        <h3 class="menu">CONTATO</h3>
                    </a>
                </div>

            </div>

            <div class="loogin">
                <div class="login">
                    <a href="404.html" class="menu">
                        <img src="icons/mdi_account-outline.png" class="oo1">
                        <h3 class="menu">LOGIN</h3>
                    </a>
                </div>
            </div>
        </div>
        <!--fim do header-->

        <!--começo do carrossel-->
        <div class="carrossel">
            <img  src="icons/Group 1.png" width="100%">
        </div>
        <!--fim do carrossel-->

        <!--começo do catalogo-->
        <div class="catalogo">

            <div>
                <h2 class="cat">Catálogo</h2>
            </div>
            
            <div class="topicos ">

                <div class="topico1 flex" >
                    <a href="404.html" class="flex">
                        <img src="icons/ic_round-local-movies (1).svg" class="oo1">
                        <h3 class="menu">Em Cartaz</h3>
                    </a>
                </div>

                <div class="topico2 flex" >
                    <a href="404.html" class="flex">
                        <img src="icons/ic_round-local-movies (1).svg" class="oo1">
                        <h3 class="menu">Em Breve</h3>
                    </a>
                </div>

            </div>

            <div class="flex">

                <!--<img class="filmes" src="icons/Filmes (1).png" >-->

                <div class="cartaz">

                    <a class="arrow" href=""><img src="icons/ep_arrow-left.svg"></a>

                    
                        <a href="404.html">
                            <div class="shadow">
                                <img class="svg" src="icons/Rectangle 6.svg" >
                            </div>
                        </a>
                    

                    <a href="404.html"><img src="icons/Rectangle 9.svg" ></a>

                    <a href="404.html"><img src="icons/Rectangle 11.svg" ></a>

                    <a href="404.html"><img src="icons/Rectangle 13.svg" ></a>

                    <a href="404.html"><img src="icons/Rectangle 15.svg" ></a>

                    <a class="arrow" href=""><img class="vira" src="icons/ep_arrow-left.svg"></a>
                
                </div>
            </div>

        </div>

        <div>
            <img class="beneficios" src="icons/Benefícios.png " >
        </div>
    
        <div>
            <img class="conheca" src="icons/Conheça.png" alt="">
        </div>

        <div class="roda-pe1">
            <!--<img src="icons/Rodapé 1.png" alt="">-->

            <div class="programacao">
                <h1>PROGRAMAÇÃO</h1>
                <a href="">Em cartaz</a>
                <a href="">Em Breve</a>
                <a href="">Ingressos</a>
            </div>

            <div class="servico">
                <h1>SERVIÇOS</h1>
                <a href="">Aluguel de Salas</a>
                <a href="">Vauncher PUCine</a>
            </div>

            <div class="benef">
                <h1>BENEFÍCIOS</h1>
                <a href="">Aluno PUCPR</a>
                <a href="">Familía Marista</a>
            </div>

            <div class="sobre">
                <h1>SOBRE</h1>
                <a href="">Cinema dos estudantes</a>
                <a href="">A PUCPR</a>
                <a href="">Grupo Marista</a>
            </div>



        </div>

        <div class="roda-pe2">
            <img src="icons/Rodapé 2.png" alt="">
        </div>
    </div>

</body>

</html>