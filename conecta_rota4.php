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
$query = "SELECT * FROM site WHERE idvend = '".$_POST['id']."' ORDER BY id DESC LIMIT 3,1";
$resultado = mysql_query($query,$conn);
while ($linha = mysql_fetch_array($resultado)){
	echo "	<div style='float: left; margin-top: 2%;'>
			<h2>".$linha['nome']."<br></h2>
			<b style='font-size:32px; color: red'>
            R$ ".$linha['valor']."<br />
            </b><br />
			<img src='upload/img/".$linha['img']."' width='400' height='320' /><br />
			<br />
            </div>";
	}
}
mysql_close();
?>