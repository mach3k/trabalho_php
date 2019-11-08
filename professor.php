<?php
require_once('helpers/util.php');
include 'cabecalho.php';
include 'FunctionsDb.php';
require_once('lista.php');

$prof = $_GET['prof'];
$method = $_GET['method'];

if ($method == 'list')
	$registros = Professor($matriz,$prof);
else {
	$registros = MateProf($prof);
	// dd($registros);
}

?>

<main class="container">
	<?php
		echo "<h2>Professor(a) " . $prof . "</h2>";
		
		$chTotal = 0;
		
		echo "<div class='d-flex justify-content-between'>";
		echo "<table class='table table-bordered table-striped table-hover table-reponsive text-center'>";
		echo "<thead>";
		echo "<tr><th colspan='4'>Disciplinas do(a) professor(a) " . $prof . "</th></tr>";
		echo "</thead>";

		echo "<tbody>";
		foreach ($registros as $disciplina) {
			echo "<tr>";
			echo "<td><a href='disciplina.php?cod={$disciplina['id']}&method=db'>{$disciplina['codigo']}</a></td>";
			echo "<td><a href='disciplina.php?cod={$disciplina['id']}&method=db'>{$disciplina['nome']}</a></td>";
			echo "<td>{$disciplina['cargahoraria']}</td>";
			echo "</tr>";
			$chTotal += $disciplina['cargahoraria'];
		}
		echo "</tbody>";

		echo "<tfoot>";
		echo "<th colspan='4'>Carga horária do professor: " . $chTotal . " horas</th>";
		echo "</tfoot>";
		echo "</table></div>";
	?>
</main>

<?php
include 'rodape.html';
?>
