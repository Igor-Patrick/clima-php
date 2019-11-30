<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Informações Climáticas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="js/clima.js"></script>

        <!-- Tags Gerais -->
        <meta NAME="DESCRIPTION" CONTENT="Site de informações Climáticas de Brusque, desenvolvida por Igor P. Ponticelli"/>
        <meta NAME="ABSTRACT" CONTENT="Informações Climáticas"/>
        <meta name="keywords" content="clima, temperatura para brusque, tempo para brusque, umidade para brusque, previsao para brusque, por do sol de brusque, clima de brusque, temperatura, umidade, vai chover em brusque, dia para sol em brusque, Igor Patrick Ponticelli, Climas santa catarina, velocidade do vento para brusque"/>
        <meta NAME="title" CONTENT="Informações Climáticas" />
        <meta NAME="identifier-url" content="https://igor-clima.herokuapp.com/" />
        <meta NAME="author" content="Igor Patrick Ponticelli" />
        <meta NAME="ROBOTS" CONTENT="All" />
        <meta NAME="RATING" CONTENT="general" />
        <meta NAME="DISTRIBUTION" CONTENT="global" />
        <meta NAME="LANGUAGE" CONTENT="pt-br" />
        <meta name="content-language" content="portuguese" />
        <meta name="doc-class" content="Completed" /> 
        <meta name="reply-to" content="igor_p_ponticelli@estudante.sc.senai.br"/>

        <!-- Tags Para rede social Facebook -->
        <meta property="og:url" content="https://igor-clima.herokuapp.com/" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Informações Climáticas" />
        <meta property="og:title" content="Informações Climáticas" />
        <meta property="og:description" content="Site de informações Climáticas de Brusque, desenvolvida por Igor P. Ponticelli" />
        <meta property="og:image" content="https://igor-clima.herokuapp.com/img/icones/nascerDoSol.png" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />


        <!-- Tags Para rede social Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Site de informações Climáticas de Brusque, desenvolvida por Igor P. Ponticelli" />
        <meta name="twitter:title" content="Informações Climáticas" />
    </head>
    <body class="bg-dark">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron bg-success">
                    <h1 class="text-center text-white">Tempo para Brusque - SC || <span id="temperatura"></span></h1>
                    <p class="text-center">
                        <img id="icone" src="">
                        <span id="situacao"></span>
                    </p>
                    <div class="container text-white">
                        <div class="row text-center">
                            <div class="col-sm">
                                <p>Umidade</p>
                                <img src="img/icones/umidade.png" width="40px"><br><span id="umidade"></span>
                            </div>
                            <div class="col-sm">
                                <p>Temperatura máxima</p>
                                <img src="img/icones/tempMaxima.png" width="40px"><br><span id="tempMaxima"></span>
                            </div>
                            <div class="col-sm">
                                <p>Temperatura mínima</p>
                                <img src="img/icones/tempMinima.png" width="40px"><br><span id="tempMinima"></span>
                            </div>

                            <div class="col-sm">
                                <p>Pressão</p>
                                <img src="img/icones/pressao.png" width="40px"><br><span id="pressao"></span>
                            </div>

                            <div class="col-sm">
                                <p>Velocidade do vento</p>
                                <img src="img/icones/velocVento.png" width="40px"><br><span id="velocVento"></span>
                            </div>
                            <div class="col-sm">
                                <p>Nascer do sol</p>
                                <img src="img/icones/nascerDoSol.png" width="40px"><br><span id="nascerDoSol"</span>
                            </div>
                            <div class="col-sm">
                                <p>Pôr do sol</p>
                                <img src="img/icones/porDoSol.png" width="40px"><br><span id="porDoSol"</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
