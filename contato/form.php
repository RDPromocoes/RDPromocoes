<?
session_start();

// Inicio a sessão, pois estamos trabalhando com sessões.

// Aqui é a ação do formulário, se clicar em enviar ele chama isto.

	// Texto digitado no campo imagem, e transformando tudo em mínúsculo, caso queria que haja distinção de maiúsculas e minúsculas, só retire o strtoupper().

	
	// Caracteres que estão na imagem, também deixando tudo em minúsulo.

	
	// Verificando se o texto digitado, for igual aos caracteres que estão na imagem
	

 /* Se os dados estão corretos então enviará o e-mail com os formulário abaixo
Não esqueça de Configurar o Enviar.php */


  

// Incluindo o imgSet.php que seta os valores da sessão.	
require ("configuracao.php");

?>

<html>
<head>
<style type="text/css">
<!--
.Estilo3 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 12; }
.Estilo4 {font-size: 12}
.Estilo5 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Estilo10 {
	font-size: 9px;
	color: #333333;
}
.Estilo14 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 10px; }
-->
</style>
</head>
<body>

<form id="form1" name="frmImgValida" method="post" action="enviar.php" style="align:center;">
  <table width="30%" border="0" cellspacing="2">
    <tr>
      <td width="88%"><span class="Estilo4">
        <label>
        <input name="Nome" type="text" id="Nome" size="40" placeholder="Nome" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td><span class="Estilo4">
        <input name="email" type="text" id="email" size="40" placeholder="e-mail"/>
      </span></td>
    </tr>
    <tr>
      <td><span class="Estilo4">
        <input name="ddd" type="text" id="ddd" size="7" placeholder="ddd" />
        <input name="fone" type="text" id="fone" size="20" placeholder="fone" />
      </span></td>
    </tr>
    <tr>
      <td><label><span class="Estilo4">
      <input name="assunto" type="text" id="assunto" size="28" placeholder="assunto" />
      </span></label></td>
    </tr>
    <tr>
      <td><span class="Estilo4">
        <textarea name="mensagem" cols="40" rows="10" id="mensagem" placeholder="digite aqui a mensagem a ser enviada"></textarea>
      </span></td>
    </tr>
    <tr>
      <td><div align="right"><span class="Estilo10">
      <input type="submit" name="Submit" value="Enviar" />
      </span></div>        
	  </td>
    </tr>
  </table>
</form>

</body>
</html>
