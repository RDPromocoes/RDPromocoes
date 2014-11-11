<?php
// session_start inicia a sessão 
session_start(); 

$email = $_POST['email'];
$senha = MD5($_POST['senha']);

$connect = mysql_connect("localhost","root","davidjr");
$db = mysql_select_db("rdprod");
$query_select = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);

if(mysql_num_rows ($select) > 0 ) { 
	$_SESSION['email'] = $email; 
	$_SESSION['senha'] = $senha;
	$_SESSION['nome'] = $array['nome'];
	$_SESSION['sobrenome'] = $array['sobrenome'];
	header('location:index.php'); 
} else{ 
	unset ($_SESSION['email']); 
	unset ($_SESSION['senha']); 
	unset ($_SESSION['nome']);
	unset ($_SESSION['sobrenome']);
	header('location:login.php'); 
}
?>