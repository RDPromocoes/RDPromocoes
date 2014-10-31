<?php

$produto = $_POST['produto'];
$marca = $_POST['marca'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$desconto = $_POST['desconto'];

$connect = mysql_connect('localhost','root','123');
$db = mysql_select_db('rd_promocoes_db');
$query_select = "SELECT produto FROM produtos WHERE produto = '$produto'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['produto'];

    if($produto == "" || $produto == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo produto deve ser preenchido');window.location.href='cad_cliente.php';</script>";
 
        }else{
            if($logarray == $produto){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse produto já existe');window.location.href='cad_cliente.php';</script>";
                die();
 
            }else{
            if(isset($_POST['categoria'])){
                foreach($_POST['categoria'] as $categoria){
                    $query = "INSERT INTO produtos (produto,marca,descricao,valor,desconto,categoria) VALUES ('$produto','$marca','$descricao','$valor','$desconto','$categoria')";
                    $insert = mysql_query($query,$connect); 
                }
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>window.location.href='cad_produto.php?cadastrado = 1'</script>";
                    echo "Cadastro feito com sucesso!!";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse produto');window.location.href='cad_produto.php'</script>";
                }
            }
              
                 
                
            }
        }
?>