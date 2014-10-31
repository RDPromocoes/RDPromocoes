<?php

function logarCliente($email, $senha){

	 $pdo = conectarComPdo();
	 try{

	 	$logar = $pdo->prepare("SELECT * FROM email WHERE email = :email AND senha = :senha");
	 	$logar->bindvalue(':email', $email);
	 	$logar->bindvalue(':senha', $senha);
	 	$logar->execute();

	 	if($logar->rowCount() == 1){

	 		$dados = $logar->fetch(PDO::FETCH_ASSOC);
	 		$_SESSION['logadoCliente'] = true;
	 		$_SESSION['cleinte'] = $dados['nome'];
	 		header('Location:http://localhost:81/rd-promocoes/index.php');

	 	}else{
	 		throw new Exception('Usuário ou senha inválidos!');
	 	}

	 }catch(PDOException $e){
	 	echo "Erro: " . $e -> getMessage();
	 }

	 

}
?>