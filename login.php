<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>RD Promoções</title>
        <link href="estrutura.css" rel="stylesheet" type="text/css"/>
        <link href="menucss.css" rel="stylesheet" type="text/css"/>
        <link href="stylecad.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="all">
            <div id="header">
               <?php include('menu.php') ?>  
            </div>
            <div id="mainframe">
                <div class="imagemlogin"><img src="imagem/cadeado.jpg" width="300px" /></div>
                <div id="divlogin">
                    <form action="loga.php" method="POST">
                        <table cellspacing="" id="tablelog">
                            <tr>
                                <td>
                                    <label>Email:</label>
                                </td>
                                <td colspan="2">
                                    <input type="text" name="email"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Senha:</label>
                                </td>
                                <td colspan="2">
                                    <input type="password" name="senha"><br>
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <input class="botaoform" type="submit" value="Logar" id="" name="logar">
                                </td>
                                <td>
                                    <input class="botaoform" type="reset" value="Limpar" id="">
                                </td>
                            </tr>     
                        </table>
                    </form>
                </div>
            </div>
            <?php include('rodape.php'); ?>
        </div>
            
    </body>
</html>