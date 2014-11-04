<html>
<head>
<title>Upload</title>
<meta charset="utf-8">
</head>
<body>
<div id="formulario">
  <h1>Cadastro de Produtos</h1>
  <form action="upload/usuario.php" method="post" enctype="multipart/form-data">
    <fieldset>
      <label for="nome"> Nome do Produto: <br />
        <input type="text" name="nome" />
      </label>
      <br />
      Descrição<br />
      <TEXTAREA NAME="descricao" COLS=40 ROWS=6></TEXTAREA>
      <br />
      <label for="valor"> Valor:<br />
        <input type="text" name="valor" />
      </label><br />
      Categoria: <br />
      <SELECT NAME="cat" MULTIPLE SIZE=5>
        <OPTION VALUE="Eletronico">Eletronico
        <OPTION VALUE="Casa">Casa
        <OPTION VALUE="Automotivo">Automotivo
        <OPTION VALUE="Esporte">Esporte
        <OPTION VALUE="Lazer">Lazer
      </SELECT><br />
      <label for="idvend"> ID Vendedor:<br />
        <input type="text" name="idvend" />
        <br />
      </label>
      <br>
      <label for="img"> Imagem:
        <input type="file" name="img" />
        <br />
      </label>
      <input type="submit" name="cadastrar" value="Cadastrar" />
    </fieldset>
  </form>
</div>
</body>
</html>