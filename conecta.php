<?php
$banco = 'rdpromo';
$usuario = 'root';
$senha = 'davidjr';
$hostname = 'localhost';
$conn = mysql_connect($hostname,$usuario,$senha) or mysql_error();
mysql_select_db($banco) or die("Não foi possível conectar ao banco MySQL");
mysql_set_charset('utf8',$conn);
if (!$conn) {echo "Não foi possível conectar ao banco MySQL.
"; exit;}
else {
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

$cmd = "select * from site";
$produtos = mysql_query($cmd);
$total = mysql_num_rows($produtos);
$registros = 8;
$numPaginas = ceil($total/$registros);
$inicio = $registros*$pagina;
$cmd = "SELECT * FROM site ORDER BY `id` DESC";
$produtos = mysql_query($cmd);
$total = mysql_num_rows($produtos);

while ($produto = mysql_fetch_array($produtos)){		
	echo "<div style='float: left; margin-left: 2%; margin-top: 2%; border:outset;'>";
	echo "<h2>" .$produto['nome']."<br></h2>";
	echo "<img src='upload/img/".$produto['img']."' width='140' height='120' /><br />";
    echo "<br /><b>R$ ".$produto['valor']."</b><br />";
    echo "<br /><i>Descrição:<br /></i><b><div style='width:200px; height:80px;'>" .$produto['descricao']. "</div></b>";
	echo "<a href='#'><img src='img/b_prod.png'></a>";
	echo "</div>";
  }
  
  for($i = 1; $i < $numPaginas + 1; $i++) {
    	echo "<a href='index.php?pagina=$i'>".$i."</a>";
	}
	
}
mysql_close();
?>