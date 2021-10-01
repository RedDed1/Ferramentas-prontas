<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/9a3f1523ac.js" crossorigin="anonymous"></script>

<?php

// Configurações iniciais
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

// Biblioteca necessaria para o funcionamento
require_once __DIR__.'/src/SimpleXLSX.php';

//Preparando arquivo
if ( $xlsx = SimpleXLSX::parse('ListaEmail.xlsx')) {

	// output worksheet 1 (index = 0)

	//Variaveis de dimensoes, linhas e colunas da tabela
	$dim = $xlsx->dimension();
	$num_cols = $dim[0];
	$num_rows = $dim[1];

	// Buscando nome da tabela
	echo '<h2>'.$xlsx->sheetName( 0 ).'</h2>';

	// Estruturando tabela
	echo '<table class="table table-hover" style="font-size: 15px">';

	//Foreach para cada linha ser montada
	foreach ( $xlsx->rows( 0 ) as $k => $r ) {
		echo '<tr>';
		// Para var i < numero de colunas, faça
		for ( $i = 0; $i <= $num_cols; $i ++ ) {
			// Se k (linha ta planilha) = 0, faça senão
			if ($k == 0) {
				echo '<th>' . ( ! empty( $r[ $i ] ) ? $r[ $i ] : '&nbsp;' ) . '</th>';
			} else {
				echo '<td>' . ( ! empty( $r[ $i ] ) ? $r[ $i ] : '&nbsp;' ) . '</td>';
			}
			if ($i == $num_cols) {
				// Se primeira linha for primeira linha, adicione mais uma linha com o valor more details
				if ($k == 0) {
					echo '<th>More details</th>';
				} else {
					//Botão que esta ligado ao identificador de linha da tabela
					echo '<td>' .
					'<div class="btn-group" role="group">' .
					'<button type="button" class="btn btn-outline-dark" style="font-size: 15px" title="'. $r [ 0 ] .'"><i class="fas fa-globe"></i></button>' .
					'<button type="button" class="btn btn-outline-dark" style="font-size: 15px" title="'. $r [ 0 ] .'"><i class="fas fa-edit"></i></button>' .
					'<button type="button" class="btn btn-outline-dark" style="font-size: 15px" title="'. $r [ 0 ] .'"><i class="fas fa-eye"></i></button>' .
					'</div>' .
					'</td>';
				}
			}
		}
		echo '</tr>';
	}
} else {
	echo SimpleXLSX::parseError();
}