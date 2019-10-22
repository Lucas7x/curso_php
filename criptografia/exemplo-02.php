<?php 
	$data = [
		"nome"=>"Hcode"
	];
	
	define('SECRET_IV', pack('a16', 'senha'));
	define('SECRET', pack('a16', 'senha'));

	$openssl = openssl_encrypt(
		json_encode($data), 		//dados a serem criptografados
		'AES-128-CBC', 				//algoritmo de criptografia
		SECRET,						//chave
		0,							//opção, 0 retorna só os dados criptografados
		SECRET_IV					//segunda chave
	);

	var_dump($openssl);

	$string = openssl_decrypt(
		$openssl, 
		'AES-128-CBC', 
		SECRET, 
		0, 
		SECRET_IV
	);

	var_dump(json_decode($string, true));	
?>