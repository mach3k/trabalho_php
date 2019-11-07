<?php
include 'cabecalho.php';
include 'FunctionsDb.php';
require_once('helpers.php');
require_once('lista.php');

$cod    = $_GET['cod'];
$method = $_GET['method'];

if ($method == 'list')
	$disc = infoDisciplina($matriz, $cod);
else{
	$registros = DadosDic($cod);
	$disc = $registros[0];
}

// dd($discs);

?>
<main class="container">
	<ul>
		<li>Codigo: <?= $disc['codigo'] ?></li>
		<li>Nome: <?= $disc['nome'] ?></li>
		<li>Semestre: <?= $disc['semestre'] ?></li>
		<li>Carga:  <?= $disc['cargahoraria'] ?></li>
	</ul>
</main>

<?php
include 'rodape.html';
?>