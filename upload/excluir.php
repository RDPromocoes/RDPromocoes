<?php
// ID de exemplo
$id = 1;
 
// Selecionando nome da foto do usu�rio
$sql = mysql_query("SELECT foto FROM site WHERE id = '".$id."'");
$usuario = mysql_fetch_object($sql);
 
// Removendo usu�rio do banco de dados
$sql = mysql_query("DELETE FROM site WHERE id = '".$id."'");
 
// Removendo imagem da pasta img/
unlink("img/".$usuario->foto."");
?>