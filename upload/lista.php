<?php
	
	//Conexão com banco de dados
	require("conecta.php");
	
	//Seleciona toso os usuários
	$sql = mysql_query("SELECT * FROM usuarios ORDER BY id DESC");
	
	//Exibir as informações
	while($usuario = mysql_fetch_object($sql)){
		
		//Exibindo a imagem
		
		echo "<img src='img/".$usuario->img."' alt='Imagem de Exibição' height='200' /><br /><br />";
		echo "<b>Nome do Produto: </b>".$usuario->nome."<br />";
		echo "<b>Descrição: </b>".$usuario->descricao."<br />";
		echo "<b>Categoria: </b>".$usuario->cat."<br />";
		echo "<b>Valor: </b>".$usuario->valor."<br /><br /><br />";
		
		
	}
	
	
?>
