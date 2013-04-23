<?php 
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	if (!($nome) || !($email) || !($senha)){
		print "Preencha todos os campos!"; exit();
	}
	//Abrindo Conexao com o banco de dados
	$conexao = mysql_pconnect("XwGo6Y94p8Sm.db.10856794.hostedresource.com","XwGo6Y94p8Sm","as@quA00P7JcC") or die (mysql_error());
	$banco = mysql_select_db("XwGo6Y94p8Sm");
	
	//Utilizando o  mysql_real_escape_string voce se protege o seu código contra SQL Injection.
	$nome = mysql_real_escape_string($nome);
	$email = mysql_real_escape_string($email);
	$senha = mysql_real_escape_string($senha);
	
	$insert = mysql_query("insert into usuario (nome,email,senha) values ('{$nome}','{$email}','{$senha}')");
	if($insert) {
		print "Cadastro Realizado!";
	}else {
		print "Erro ao Cadastrar!";
	}
	mysql_close($conexao);

?>