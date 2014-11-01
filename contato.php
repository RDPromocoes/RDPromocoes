<!DOCTYPE html>
<html>
    <head>
    


        <meta charset="utf-8">
        <title>RD Promoções</title>
        <link href="estrutura.css" rel="stylesheet" type="text/css"/>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		<script src="jquery.h5-lightbox.js"></script>
		<script src="script.js"></script> 
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
                <div id="corpo">
                    <div class="wrapper"> <br>
						<?php include ('/contato/form.php'); ?>
						</div>
						<br>
					</div>
				</div>  
            
            <?php include('rodape.php'); ?>
        </div>
    </body>
</html>