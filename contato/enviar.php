<? require ("configuracao.php");

$hoje_tmp = getdate();
$hoje = ($hoje_tmp[hours].":".$hoje_tmp[minutes].":".$hoje_tmp[seconds]);

$nome = $_POST["Nome"];
$email = $_POST["email"];
$fone = $_POST["fone"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];


global $email;


$enviou = mail($conf_email, $conf_assunto, 

"Nome: $nome
 E-mail: $email
 Fone: $fone
 Assunto: $assunto
 Mensagem: $mensagem
======================"
,
"From: $email");

if ($enviou){
?> <script language="javascript"> alert ('<? echo "$nome, Contato Enviado com Sucesso! Aguarde nosso retorno!."; ?>') </script> <?
}

else {
?> <script language="javascript"> alert ('<? echo "$nome, Não enviado<br>Tente novamente."; ?>') </script> <?

}
?>
