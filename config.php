<?php
// Funcao responsavel por controlar a conexao com o banco de dados
	function database() {
		
		// Cria conexao com o bando de dados MySql
		$connect = mysql_connect("localhost", "root", "123");
		mysql_select_db("rd_promocoes_db", $connect);

		// Verifica a conexao com o banco
		if ( mysqli_connect_errno() ) {
		 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	}
?>