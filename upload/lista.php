<?php
	
	//Conex�o com banco de dados
	require("conecta.php");
	
	//Seleciona toso os usu�rios
	$sql = mysql_query("SELECT * FROM usuarios ORDER BY id DESC");
	
	//Exibir as informa��es
	while($usuario = mysql_fetch_object($sql)){
		
		//Exibindo a imagem
		
		echo "<img src='img/".$usuario->img."' alt='Imagem de Exibi��o' height='200' /><br /><br />";
		echo "<b>Nome do Produto: </b>".$usuario->nome."<br />";
		echo "<b>Descri��o: </b>".$usuario->descricao."<br />";
		echo "<b>Categoria: </b>".$usuario->cat."<br />";
		echo "<b>Valor: </b>".$usuario->valor."<br /><br /><br />";
		
		
	}
	
	
?>
