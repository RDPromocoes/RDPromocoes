<!DOCTYPE html>
<html>
    <head>
    


        <meta charset="utf-8">
        <title>RD Promoções</title>
        <link href="estrutura.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="all">
            <?php include('menu.php'); ?>
            <div id="header">
                <table id="tablebusca">
                    <tr>
                        <td>
                            <form>
                                <select name = "menu" size=1 style="font-family: tahoma;">
                                    <OPTION>Selecione a cidade...      
                                    <OPTION>Itirapuã
                                    <OPTION>Itamogi
                                    <OPTION>Itaú               
                                    <OPTION>Franca
                                    <OPTION>Restinga
                                    <OPTION>Ribeirão Preto
                                    <OPTION>São Sebastião do Paraíso
                                </select>
                            </form>
                        </td>
                        <td>
                            <div id="busca">
                                | <a hreg="index.php">  Buscar  </a>
                            </div>
                        </td>
                        <td>
                            <a href="login.php">Login</a>
                        </td>  
                        
                        <td>
                             <a href="cad_cliente.php">Cadastre-se</a>
                        </td>
                    </tr>
                </table>  
            </div>
            <div id="mainframe">

                <div id="menuesquerda">
                    <fieldset>
                        Automotivo
                        <hr>
                        Esporte
                        <hr>
                        Eletrônico
                        <hr>
                        Eletrodomésticos
                        <hr>
                        Entretenimento
                        <hr>
                        Lazer
                        <hr>
                        Games
                        <hr>
                        Informática 
                        <hr>
                        Móveis
                    </fieldset>
                </div>
                <div id="">
                    <script>
                        document.write("<div id='caixa'></div>");

                        bannerRotativo();

                        function bannerRotativo() {
                            setTimeout("mostraBanner1()", 0000);
                            setTimeout("mostraBanner2()", 4000);
                            setTimeout("mostraBanner3()", 8000);
                            setTimeout("mostraBanner4()", 12000);
                            setTimeout("bannerRotativo()", 16000);
                        }
                        function mostraBanner1() {
                            document.getElementById('caixa').innerHTML = "<a href=''><img src='http://motosnovas.com.br/wp-content/uploads/2014/03/XJ6-2014.jpg' width='550'/></a> ";
                        }
                        function mostraBanner2() {
                            document.getElementById('caixa').innerHTML = "<a href=''><img src='http://cdn.yamaha-motor.eu/product_assets/2014/XJ6NSV/950-75/2014-Yamaha-XJ6NSV-EU-Competition-White-Studio-002.jpg' width='550'/></a>";
                        }
                        function mostraBanner3() {
                            document.getElementById('caixa').innerHTML = "<a href=''><img src='http://motosnovas.com.br/wp-content/uploads/2014/01/nova-yamaha-xj6-2014.jpg' width='550px'/></a>";
                        }
                        function mostraBanner4() {
                            document.getElementById('caixa').innerHTML = "<a href=''><img src='http://www.motoemotos.com.br/img/noticias/imagens/grande2632013_95547.jpg' width='550'/></a>";
                        }
                        $('.carousel').carousel({
                            interval: 2000
                        })
                    </script>

                </div>
                <div id="corpo">
                    <hr style="width: 800px;">
                    <div id="block">
                        <img src="http://i.imgur.com/UkLW09m.jpg" width="190px" heigth="200px;"/>
                        De R$ 1.499,00<br> Por apenas<br><a href="">Clique aqui</a>
                    </div>
                    <div id="block">
                        <img src="http://i.imgur.com/cgYsCTB.jpg" width="190px" heigth="200px;"/>
                        De R$ 1.599,00<br> Por apenas<br><a href="">Clique aqui</a>
                    </div>
                    <div id="block">
                        <img src="http://i.imgur.com/yvbfptl.jpg" width="190px" heigth="200px;"/>
                        De R$ 1.499,00<br> Por apenas<br><a href="">Clique aqui</a>
                    </div>
                    <div id="block">
                        <img src="http://i.imgur.com/Qi38nuy.jpg" width="190px" heigth="200px;"/>
                        De R$ 1.299,00<br> Por apenas<br><a href="">Clique aqui</a>
                    </div>
                    <div id="block">
                        <img src="http://i.imgur.com/UjA4s51.jpg" width="190px" heigth="200px;"/>
                        De R$ 3.599,00<br> Por apenas<br><a href="">Clique aqui</a>
                    </div>
                    <div id="block">
                        <img src="http://i.imgur.com/gIHM0mC.jpg" width="190px" heigth="200px;"/>
                        De R$ 1.099,00<br> Por apenas<br><a href="">Clique aqui</a>
                    </div>
                </div>

            </div>  
            
            <?php include('rodape.php'); ?>
        </div>
    </body>
</html>