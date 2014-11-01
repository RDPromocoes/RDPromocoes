<?php
	
	//Conexão com o banco de dados
	require("conecta.php");
	
	//Verifico se usuario clicou em cadastrar
	if($_POST['cadastrar']){
		
		//Recebendo os campos
		$nome	=	$_POST['nome'];
		$descricao	=	$_POST['descricao'];
		$valor	=	$_POST['valor'];
		$idvend	=	$_POST['idvend'];
		$img =	$_FILES['img'];
		
		$erro = array();
		
		//Se a imagem foi selecionada
		if(!empty($img["name"])){
			
			//Largura máxima em pixels
			$largura = 1080;
			
			//Altura máxima em pixels
			$altura = 1920;
			
			//Tamanho máximo em bytes
			$tamanho = 2048000;
			
			//Verifico se é imagem
			if(!eregi("^image\/(pjepg|jpeg|png|gif|bmp)$", $img["type"])){
				$error[1] = "Isso não é uma imagem";
			}
			
			//Pega as dimensões da imagem			
			$dimensoes = getimagesize($img["tmp_name"]);
			
			//Verifico se a largura da imagem é maior que a largura permitida
			if($dimensoes[0] > $largura){
				$erro[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels.";
			}
			
			//Verifico se a altura da imagem é maior que a altura permitida
			if($dimensoes[1] > $altura){
				$erro[3] = "A altura da imagem não deve ultrapassar ".$altura." pixels.";
			}
			
			//Verifico se o tamanho do arquivo é maior que o permitido
			if($img["size"] > $tamanho){
				$erro[4] = "A altura da imagem não deve o tamanho máximo de  ".$tamanho." bytes.";
			}
			
			//Se não houver erros
			if(count($erro)==0){
				
				//Pega a extensão da imagem
				preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $img["name"], $ext);
				
				//Gera nome único para imagem
				$nomeImagem = md5(uniqid(time())).".".$ext[1];
				
				//Caminho da imagem
				$caminhoImagem = "img/".$nomeImagem;
				
				//Faz o upload da imagem para seu caminho
				move_uploaded_file($img["tmp_name"], $caminhoImagem);
				
				//Insere no banco de dados
				$sql = mysql_query("INSERT INTO site (nome, descricao, idvend, valor, img)  VALUES('".$nome."','".$descricao."','".$idvend."',".$valor.",'".$nomeImagem."');");
				
				echo mysql_error();
				
				//Verifico se os dados forem inseridos com sucesso
				if($sql){
					echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://127.0.0.1/HEITOR/index.htm'>";
				}else {
				echo "Erro Não Cadastrado";	
				}
				
			}
			else {
			echo "Erro Não Cadastrado";
			}
			
			//Se houver mensagens de erro, exibe-as
			if(count($erro) !=0){
				foreach($erro as $error){
					echo $error."<br />";
				}
			}
			
		} else{
		echo "Favor inserir Imagem!";	
		}
		
	}else {
	echo "Erro de inserção";	
	}
	
	
	
	

?>
