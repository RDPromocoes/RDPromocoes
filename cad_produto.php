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
            <?php include('menu.php') ?>
            <div id="header">
                <?php include('cabecalho.php');?> 
            </div>
            <div id="mainframe">
                <?php include('menuleft.php');?>
                <div id="blockcadfield">
                    <form action="cadastroprod.php" method="POST">
                        <table cellspacing="5" id="tablelog">
                            <tr>
                                <td>
                                    Produto:
                                </td>
                                <td colspan="2">
                                    <input type="text" name="produto"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Marca:
                                </td>
                                <td colspan="2">
                                    <input type="text" name="marca"><br>
                                </td>
                            </tr>      
                            <tr>
                                <td>
                                    Descrição:
                                </td>
                                <td>
                                    <textarea name="descricao" value="null">
            
                                    </textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Valor:
                                </td>
                                <td>
                                    <input type="text" name="valor">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Desconto:
                                </td>
                                <td>
                                    <input type="text" name="desconto" size="1" value="">%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Categoria:
                                </td>
                                <td>
                                    <table>
                                        <tr>
                                            <td><input type="checkbox" name="categoria[]" value="esporte">Esporte</td>
                                            <td><input type="checkbox" name="categoria[]" value="informatica">Informática</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="categoria[]" value="lazer">Lazer</td>
                                            <td><input type="checkbox" name="categoria[]" value="casa">Casa</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="categoria[]" value="moda">Moda</td>
                                            <td><input type="checkbox" name="categoria[]" value="moveis">Móveis</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="categoria[]" value="banho">Banho</td>
                                            <td><input type="checkbox" name="categoria[]" value="games">Games</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="categoria[]" value="automotivo">Automotivo</td>
                                            <td><input type="checkbox" name="categoria[]" value="smartphone">Smartphones</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="botaoform" type="submit" value="Cadastrar" id="" name="cadastrar">
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