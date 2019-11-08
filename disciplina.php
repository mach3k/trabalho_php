<?php
require_once('helpers/util.php');
include 'cabecalho.php';
include 'FunctionsDb.php';
require_once('lista.php');

$cod    = $_GET['cod'];
$method = $_GET['method'];

if ($method == 'list')
	$disc = infoDisciplina($matriz, $cod);
else{
	$registros = DadosDic($cod);
	$disc = $registros[0];
}

?>

<main class="container">

<?php

	echo "<h2>" . $disc['nome'] . "</h2>";
	
	echo "<table class='table table-bordered table-hover table-reponsive text-center'><tbody>";
	echo "<tr><th >Código</th>";
	echo "<td>" . $disc['codigo'] . "</td></tr>";
	echo "<tr><th>Nome</th>";
	echo "<td>" . $disc['nome'] . "</td></tr>";
	echo "<tr><th>Professor</th>";
	echo "<td>";

	for ($i=0; $i < sizeof($registros); $i++) {
		echo "<a href='professor.php?prof=" . $registros[$i]['nome_professor'] . "&method=db'>";
		if ($i == 0)
			echo $registros[$i]['nome_professor'];
		else
			echo ", " . $registros[$i]['nome_professor'];
		echo "</a>";
	}
	
	echo "</td></tr>";
	echo "<tr><th>Carga horária</th>";
	echo "<td>" . $disc['cargahoraria'] . "</td></tr>";
	echo "<tr><th>Curso</th>";
	echo "<td>" . $disc['nome_curso'] . "</td></tr>";
	echo "<tr><th>Semestre</th>";
	echo "<td>" . $disc['semestre'] . "º</td></tr>";
	echo "</tbody></table>";
?>

</main>

<?php
include 'rodape.html';
?>