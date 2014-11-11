<?php

$id_sec = $_POST['id_sec'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$cpf = $_POST['cpf'];
$cpf2 = $_POST['cpf2'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$cep2 = $_POST['cep2'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);   

$connect = mysql_connect('localhost','root','davidjr');
$db = mysql_select_db('rdprod');
$query_select = "SELECT email FROM usuario WHERE email = '$email'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['email'];
    
    if($email == "" || $email == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido');window.location.href='cad_cliente.php';</script>";
 
        }else{
            if($logarray == $email){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse email já existe');window.location.href='cad_cliente.php';</script>";
                die();
 
            }else{
               $query = "INSERT INTO usuario (id_sec, nome,sobrenome,dia,mes,ano,cpf,cpf2,rua,numero,estado,cidade,cep,cep2,email,senha) VALUES ('id_sec','$nome','$sobrenome','$dia','$mes','$ano','$cpf','$cpf2','$rua','$numero','$estado','$cidade','$cep','$cep2','$email','$senha')";
               $insert = mysql_query($query,$connect);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cad_cliente.php'</script>";
                }
            }
        }
?>