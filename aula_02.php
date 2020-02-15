<?php 
	// padrão de nome de variável

	$anoNascimento = 1980;

	// Isso é um comentário de linha

	/*
	Isto é um
	comentário
	de bloco, isto é, de multilinhas
	*/

	/*
	 *
	 * Para ficar bonitinho.
	 *
	 */

	// Como remover variável:
	$nome = "João";
	$idade = "23";

	echo ($nome);

	unset($nome, $idade);

	// Quebrar linha
	echo "<br/>"; 

	echo($nome);

	// Verificar se a variável já exite (está "setada")
	if (isset($nome)) {
		echo $nome;
	}

	else {
		echo "Não existe essa variável";
	}

	// Para parar/sair do código:
	// exit;

	echo "<br/>"; 

	//Concatenação:
	$nome = "João";
	$sobrenome = "Amorim";

	$nomeCompleto = $nome . " " . $sobrenome;

	echo $nomeCompleto;

	////////////////////////////
	// TIPOS BÁSICOS DE DADOS //
	////////////////////////////

	// String
	$nome = "João";
	$site = 'joaoamorim@weaverengenharia.com';
	//Inteiro
	$ano = 1950;
	//Ponto flutuante
	$salario = 5500.99;
	//Boleano
	$bloqueado = false;
	
	//////////////////////////////
	// TIPOS COMPOSTOS DE DADOS //
	//////////////////////////////

	//Array
	$frutas = array("abacaxi", "manga", "laranja");
	echo $frutas[2];
	//Objeto
	$nascimento = new DateTime();
	echo "<br/>";
	var_dump($nascimento);

	//////////////////////////////
	// TIPOS ESPECIAIS DE DADOS //
	//////////////////////////////

	//Resource
	$arquivo = fopen("aula_01.php", "r");
	echo "<br/>";
	var_dump($arquivo);
	//Null
	$nulo = NULL; //Auxência de valor

	$vazio = "";  //Foi iniciado na memória, só não tem informação != NULL

 ?>