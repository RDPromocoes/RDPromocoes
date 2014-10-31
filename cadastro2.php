<?php
 
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$cpf = $_POST['cpf'];
$cpf2 = $_POST['cpf2'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$cep2 = $_POST['cep2'];
$email = $_POST['email'];
$estado = $_POST['estado'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('localhost','root','123');
$db = mysql_select_db('rd_promocoes_db');
$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['email'];
 
    if($email == "" || $email == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
 
        }else{
            if($logarray == $email){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
                die();
 
            }else{
                $query = "INSERT INTO usuarios (nome,sobrenome,dia,mes,ano,cpf,cpf2,rua,numero,cidade,cep,cep2,email,estado,senha) VALUES ('$nome','$sobrenome','$dia','$mes','$ano','$cpf','$cpf2','$rua','$numero','$cidade','$cep','$cep2','$email','$estado','$senha')";
                $insert = mysql_query($query,$connect);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='form.php'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='form.php'</script>";
                }
            }
        }
?>

