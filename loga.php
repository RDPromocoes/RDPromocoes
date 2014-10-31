<?php

// session_start inicia a sessão 
session_start(); 

$email = $_POST['email'];
$senha = MD5($_POST['senha']);
//$nome = $_POST['nome'];

$connect = mysql_connect("localhost","root","123");
$db = mysql_select_db("rd_promocoes_db");
$query_select = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);

if(mysql_num_rows ($select) > 0 ) { 
	$_SESSION['email'] = $email; 
	$_SESSION['senha'] = $senha; 
	header('location:index.php'); 
} else{ 
	unset ($_SESSION['email']); 
	unset ($_SESSION['senha']); 
	header('location:login.php'); 
}
?>