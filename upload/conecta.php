<?php
    //conex�o com o banco de dados
	$con = mysql_connect("localhost", "root", "davidjr") or die ("Problemas na conex�o.");
	$db	 = mysql_select_db("rdpromo", $con) or die ("Problemas na conex�o.");
?>
