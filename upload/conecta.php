<?php
    //conexão com o banco de dados
	$con = mysql_connect("localhost", "root", "davidjr") or die ("Problemas na conexão.");
	$db	 = mysql_select_db("rdprod", $con) or die ("Problemas na conexão.");
?>
