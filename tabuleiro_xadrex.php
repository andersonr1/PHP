<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Tabuleiro de xadrez</title>
	</head>

	<body>
		
		<?php

		$tabuleiro[8]['a'] = 'torre preto';
		$tabuleiro[8]['b'] = 'bispo preto';
		$tabuleiro[8]['c'] = 'cavalo preto';
		$tabuleiro[8]['d'] = 'rainha preto';
		$tabuleiro[8]['e'] = 'rei preto';
		$tabuleiro[8]['f'] = 'cavalo preto';
		$tabuleiro[8]['g'] = 'bispo preto';
		$tabuleiro[8]['h'] = 'torre preto';
	
		$tabuleiro[7]['a'] = 'peão preto';
		$tabuleiro[7]['b'] = 'peão preto';
		$tabuleiro[7]['c'] = 'peão preto';
		$tabuleiro[7]['d'] = 'peão preto';
		$tabuleiro[7]['e'] = 'peão preto';
		$tabuleiro[7]['f'] = 'peão preto';
		$tabuleiro[7]['g'] = 'peão preto';
		$tabuleiro[7]['h'] = 'peão preto';
		

		
		$tabuleiro[2]['a'] = 'peão branco';
		$tabuleiro[2]['b'] = 'peão branco';
		$tabuleiro[2]['c'] = 'peão branco';
		$tabuleiro[2]['d'] = 'peão branco';
		$tabuleiro[2]['e'] = 'peão branco';
		$tabuleiro[2]['f'] = 'peão branco';
		$tabuleiro[2]['g'] = 'peão branco';
		$tabuleiro[2]['h'] = 'peão branco';
		
		$tabuleiro[1]['a'] = 'torre branco';
		$tabuleiro[1]['b'] = 'bispo branco';
		$tabuleiro[1]['c'] = 'cavalo branco';
		$tabuleiro[1]['d'] = 'rainha branco';
		$tabuleiro[1]['e'] = 'rei branco';
		$tabuleiro[1]['f'] = 'cavalo branco';
		$tabuleiro[1]['g'] = 'bispo branco';
		$tabuleiro[1]['h'] = 'torre branco';

		print_r($tabuleiro);


		

		?>
	</body>
</html>

