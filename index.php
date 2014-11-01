<!DOCTYPE html>
<html>
    <head>
    


        <meta charset="utf-8">
        <title>RD Promoções</title>
        <link href="estrutura.css" rel="stylesheet" type="text/css"/>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		<script src="jquery.h5-lightbox.js"></script>
		<script src="script_rota.js"></script>		
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
                            document.getElementById('caixa').innerHTML = "<div id='rotacao' style='width=550px; display: table; align: center; margin:auto;'>";
                        }
                         function mostraBanner2() {
                            document.getElementById('caixa').innerHTML = "<div id='rotacao2' style='width=550px; display: table; align: center; margin:auto;'>";
                        }
                        function mostraBanner3() {
                            document.getElementById('caixa').innerHTML = "<div id='rotacao3' style='width=550px; display: table; align: center; margin:auto;'>";
                        }
                        function mostraBanner4() {
                            document.getElementById('caixa').innerHTML = "<div id='rotacao4' style='width=550px; display: table; align: center; margin:auto;'>";
                        }
                        $('.carousel').carousel({
                            interval: 2000
                        })
                    </script>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                <div id="corpo">
                    <div class="wrapper"> <br>
                     <div id="local" style="margin-left: 5%; display: table;"><br />
                     <?php include('home.php'); ?>
						<!-- AQUI EH AREA --></div>
                        
						<br>
					</div>
				</div>  
            
            <?php include('rodape.php'); ?>
        </div>
    </body>
</html>