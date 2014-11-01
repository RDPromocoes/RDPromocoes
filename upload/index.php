	<html>
	<head>
		<title>Upload de Imagens com PHP e MySql</title>
	</head>
	<body>
		<div id="formulario">
			<h1>Cadastro de Produtos</h1>
			<form action="usuario.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<label for="nome">
						Nome do Produto:
						<input type="text" name="nome" />
					</label>
					<label for="descricao">
						Descrição:
						<input type="text" name="descricao" />
					</label>
                    <label for="valor">
						Valor:
						<input type="text" name="valor" />
					</label>
                    <br>
					<label for="idvend">
						ID Vendedor:
						<input type="text" name="idvend" />
					</label>
					<br>
					<label for="img">
						Imagem:
						<input type="file" name="img" />
					</label>
					<input type="submit" name="cadastrar" value="Cadastrar" />
				</fieldset>
			</form>
		</div>
	</body>
</html>