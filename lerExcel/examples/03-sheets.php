<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<?php

// Configurações iniciais
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

// Biblioteca necessaria para o funcionamento
require_once __DIR__.'/../src/SimpleXLSX.php';

//Preparando arquivo
if ( $xlsx = SimpleXLSX::parse('countries_and_population.xlsx')) {

	// output worksheet 1 (index = 0)

	//Variaveis de dimensoes, linhas e colunas da tabela
	$dim = $xlsx->dimension();
	$num_cols = $dim[0];
	$num_rows = $dim[1];

	// Buscando nome da tabela
	echo '<h2>'.$xlsx->sheetName( 0 ).'</h2>';

	// Estruturando tabela
	echo '<table class="table table-hover">';

	//Foreach para cada linha ser montada
	foreach ( $xlsx->rows( 0 ) as $k => $r ) {
		echo '<tr>';
		// Para var i < numero de colunas, faça
		for ( $i = 0; $i < $num_cols; $i ++ ) {
			// Se k (linha ta planilha) = 0, faça senão
			if ($k == 0) {
				echo '<th>' . ( ! empty( $r[ $i ] ) ? $r[ $i ] : '&nbsp;' ) . '</th>';
			} else {
				echo '<td>' . ( ! empty( $r[ $i ] ) ? $r[ $i ] : '&nbsp;' ) . '</td>';
			}
		}
		// Se primeira linha for primeira linha, adicione mais uma linha com o valor more details
		if ($k == 0) {
				echo '<th>More details</th>';
			} else {
				echo '<td><button type="button" class="btn btn-outline-dark">Mais detalhes</button></td>';
			}
		echo '</tr>';
	}
} else {
	echo SimpleXLSX::parseError();
}