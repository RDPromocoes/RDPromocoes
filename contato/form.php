<?
session_start();

// Inicio a sess�o, pois estamos trabalhando com sess�es.

// Aqui � a a��o do formul�rio, se clicar em enviar ele chama isto.

// Texto digitado no campo imagem, e transformando tudo em m�n�sculo, caso queria que haja distin��o de mai�sculas e min�sculas, s� retire o strtoupper().


// Caracteres que est�o na imagem, tamb�m deixando tudo em min�sulo.


// Verificando se o texto digitado, for igual aos caracteres que est�o na imagem


/* Se os dados est�o corretos ent�o enviar� o e-mail com os formul�rio abaixo
N�o esque�a de Configurar o Enviar.php */




// Incluindo o imgSet.php que seta os valores da sess�o.  
require ("configuracao.php");

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>RD Promo��es</title>
        
        <link href="stylecad.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <form method="post" action="enviar.php">
            <table width="30%" border="0" cellspacing="2" id="tablelog">
                <tr>
                    <td width="88%">
                        
                            <input name="Nome" type="text" size="40" placeholder="Nome" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input name="email" type="text" isize="40" placeholder="e-mail"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input name="ddd" type="text"  size="7" placeholder="ddd" />
                        <input name="fone" type="text"  size="20" placeholder="fone" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input name="assunto" type="text"  size="28" placeholder="assunto" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="mensagem" cols="40" rows="10"  placeholder="digite aqui a mensagem a ser enviada"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                         <input type="submit" name="Submit" value="Enviar" />
                                
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html>
