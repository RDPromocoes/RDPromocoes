<?php 
$conn = mysql_connect("localhost","root","davidjr"); 
mysql_set_charset('utf8',$conn);
$db = mysql_select_db("rdpromo");
$busca = "SELECT * FROM site ORDER BY `id` DESC"; 
$total_reg = "5"; // número de registros por página
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : '';
//$pagina = $_GET['pagina']; 
if (!$pagina) { 
$pc = "1"; 
} else { 
$pc = $pagina; 
}
$inicio = $pc - 1; 
$inicio = $inicio * $total_reg;
$limite = mysql_query("$busca LIMIT $inicio,$total_reg"); $todos = mysql_query("$busca"); $tr = mysql_num_rows($todos); // verifica o número total de registros 
$tp = $tr / $total_reg; // verifica o número total de páginas 
// vamos criar a visualização

while ($dados = mysql_fetch_array($limite)) { 
echo "<link href='estrutura.css' rel='stylesheet' type='text/css'/>
<div id='produto'>";
	echo "<h2>" .$dados['nome']."<br></h2>";
	echo "<img src='upload/img/".$dados['img']."' width='140' height='120' /><br />";
    echo "<br /><b>R$ ".$dados['valor']."</b><br />";
    echo "<br /><i>Descrição:<br /></i><b><div>" .$dados['descricao']. "</div></b>";
	echo "<br />Categoria: " .$dados['Cat']."<br />";
	echo "<a href='produto.php?id=".$dados['id']."'><img src='img/b_prod.png'></a>";
	echo "</div>"; } 
 // agora vamos criar os botões "Anterior e próximo" 
 $anterior = $pc -1; 
 $proximo = $pc +1; 
 echo "<b><div style='float: right; margin-top: 3%;'>";
 echo "<a href='index.php'>Inicial</a> | ";
 if ($pc>1) { 
 echo " <a href='?pagina=$anterior'><-Anterior</a> ";
 } 
 echo "|"; 
 if ($pc<$tp) { 
 echo " <a href='?pagina=$proximo'>Próxima-></a>";
 }
 echo "</div></b>";
mysql_close();
?>