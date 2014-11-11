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
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>RD Promoções</title>
        
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
