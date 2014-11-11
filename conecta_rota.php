<?php
$banco = 'rdprod';
$usuario = 'root';
$senha = 'davidjr';
$hostname = 'localhost';
$conn = mysql_connect($hostname,$usuario,$senha) or mysql_error();
mysql_select_db($banco) or die("Não foi possível conectar ao banco MySQL");
mysql_set_charset('utf8',$conn);
	
	if (!$conn) {
		echo "Não foi possível conectar ao banco MySQL."; exit;
	}else {
		$query = "SELECT * FROM site WHERE idvend = '".$_POST['id']."' ORDER BY id DESC LIMIT 1";
		$resultado = mysql_query($query,$conn);
		while ($linha = mysql_fetch_array($resultado)){
		echo "	<link href='estrutura.css' rel='stylesheet' type='text/css'/>
				
				<div class='rotacao'>
				
				<span><img src='upload/img/".$linha['img']."' width='400' height='320' /><span>
				<div>
				<h2>".$linha['nome']."</h2>
			
				<b>
            	R$ ".$linha['valor']."<br/></b>
            	Descrição:<br>"
            	.$linha['descricao']."
            	</div>
				
            	</div>
            	";
		}
	}
mysql_close();
?>
