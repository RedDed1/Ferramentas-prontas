<?php /** @noinspection ForgottenDebugOutputInspection */
require_once __DIR__ . '/src/SimpleXLS.php';

echo '<h1>Parse books.xsl</h1><pre>';
if ( $xls = SimpleXLS::parse('C:/Users/jonathav1/Desktop/Lista Usuarios com email.xlsx') ) {
    print_r( $xls->rows() );
} else {
    echo SimpleXLS::parseError();
}
echo '<pre>';
?>