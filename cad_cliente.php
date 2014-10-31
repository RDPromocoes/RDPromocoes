<?php 
    
       session_start(); 

       if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)) { 
        unset($_SESSION['email']); 
        unset($_SESSION['senha']); 
        header('location:login.php'); 
        } 
        $logado = $_SESSION['email']; 

        //echo "Bem vindo" . $_SESSION['email'];
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>RD Promoções</title>
        <link href="estrutura.css" rel="stylesheet" type="text/css"/>
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
                    <form action="cadastro.php" method="POST">
                        <table cellspacing="5" id="tablelog">
                            <tr>
                                <td>
                                    <span>Nome:</span>
                                </td>
                                <td>
                                    <input type="text" name="nome" id="" size="40"><br>
                                </td>
                            </tr>
                                <td>
                                    <span>Sobrenome:</span>
                                </td>
                                <td>
                                    <input type="text" name="sobrenome" id="" size="40"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Data Nasc.:</span>
                                </td>
                                <td>
                                    <input type="text" name="dia" id="" size="1" maxlength="2" >/ 
                                    <input type="text" name="mes" id="" size="1" maxlength="2" >/ 
                                    <input type="text" name="ano" id="" size="2" maxlength="4" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>CPF:</span>
                                </td>
                                <td>
                                    <input type="text" name="cpf" id="" size="9" maxlength="9"> - <input type="text" name="cpf2" id="cpf2" size="1" maxlength="2">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Rua:</span>
                                </td>
                                <td>
                                    <input type="text" name="rua" id="" size="40"><br>
                                </td>
                                <td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Número:</span>
                                </td>
                                <td colspan="0">
                                    <input type="text" name="numero" id="" size="4"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Estado:</span>
                                </td>
                                 <td colspan="0">
                                    <input type="text" name="estado" id="" size="1" maxlength="2" size="40"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Cidade: </span>
                                </td>
                                <td align="left">
                                    <input type="text" name="cidade" id="" size="40">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>CEP: </span>
                                </td>
                                <td align="left">
                                    <input type="text" name="cep" id="" size="2" maxlength="5"> - <input type="text" name="cep2" size="2" maxlength="3">
                                </td>

                            </tr>   
                            <tr>
                                <td>
                                    <span>E-mail: </span>
                                </td>
                                <td align="left">
                                    <input type="text" name="email" id="" size="40">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Senha: </span>
                                </td>
                                <td align="left">
                                    <input type="password" name="senha" id="" size="40">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="botaoform" type="submit" value="Cadastrar" id="" name="cadastrar">
                                </td>
                                <td>
                                    <input class="botaoform" type="reset" value="Limpar" id="limpar">
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