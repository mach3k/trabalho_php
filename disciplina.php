<?php
include 'cabecalho.html';
include 'Database.php';
require_once('lista.php');
$cod = $_GET['cod'];

$disc = infoDisciplina($matriz, $cod);

?>
<main class="container">
	<ul>
		<li>Codigo: <?= $disc['codigo'] ?></li>
		<li>Nome: <?= $disc['nome'] ?></li>
		<li>Semestre: <?= $disc['semestre'] ?></li>
		<li>Carga:  <?= $disc['carga-horaria'] ?></li>
	</ul>

</main>
<?php
include 'rodape.html';
?>