<?php
include 'helpers/util.php';
include 'cabecalho.php';
include 'Database.php';
include 'FunctionsDb.php';
?>

<main class="container">

	<h1>Sistemas para Internet</h1>
	<h6><small>Acessando banco de dados</small></h6>

	<?php

	$chTotal = 0;

	for ($i=1; $i<7; $i++){
		$matriz = getMatriz($i);
		echo "<div class='d-flex justify-content-between'>";
		echo "<table class='table table-bordered table-striped table-hover table-reponsive text-center'>";
		echo "<thead>";
		echo "<tr><th colspan='4'>Disciplinas do {$i} semestre</th></tr>";
		echo "</thead>";

		echo "<tbody>";
		foreach ($matriz as $disciplina) {
			echo "<tr>";
			echo "<td><a href='disciplina.php?cod={$disciplina['id_disciplina']}&method=db'>{$disciplina['codigo']}</a></td>";
			echo "<td><a href='disciplina.php?cod={$disciplina['id_disciplina']}&method=db'>{$disciplina['nome_disciplina']}</a></td>";
			echo "<td>{$disciplina['cargahoraria']}</td>";
			echo "<td><a href='professor.php?prof={$disciplina['nome_professor']}&method=db'>{$disciplina['nome_professor']}</td>";
			echo "</tr>";
		}
		echo "</tbody>";

		$ch = CargaHoraria($i);
		$chTotal += $ch['carga'];

		echo "<tfoot>";
		echo "<th colspan='4'>Carga horária: ".$ch['carga']." horas</th>";
		echo "</tfoot>";
		echo "</table></div>";
	}

	echo "<table class='table table-bordered table-striped table-hover table-reponsive text-center'>";
	echo "<thead>";
	echo "<tr><th colspan='4'>Carga horária total: " . $chTotal . " horas</th></tr>";
	echo "</thead></table>";
	?>
	
	<hr/>
	<h1>Sistemas para Internet</h1>
	<h6><small>Manipulando matrizes</small></h6>

	<?php
		require_once('lista.php');

		for ($s=1; $s <7 ; $s++) {
			
			echo "<div class='d-flex justify-content-between'>";
			echo "<table class='table table-bordered table-striped table-hover table-reponsive text-center'>";
			echo "<thead>";
			echo "<tr><th colspan='4'>Disciplinas do ".$s."º semestre</th></tr>";
			echo "</thead>";
		
			echo "<tbody>";
			foreach ($matriz as  $value) {
				if ($value['semestre']==$s) {
					echo"<tr>";
					echo "<td><a href='disciplina.php?cod=" . $value['codigo'] . "&method=list'>" . $value['codigo'] . "</a></td>";
					echo "<td><a href='disciplina.php?cod=" . $value['codigo'] . "&method=list'>" . $value['nome'] . "</a></td>";
					echo "<td>".$value['cargahoraria']."</td>";
					echo "<td>";
					foreach ( $value['professor'] as $nomeprof) {
						echo "<a href='professor.php?prof={$nomeprof}&method=list'>{$nomeprof}</a><br> ";
					}
					echo "</td></tr>";
				}
			}
			echo "</tbody>";

			$total=semestreHorario($matriz,$s);
			echo "<tfoot>";
			echo "<th colspan='4'>Carga Horaria : ".$total."</th>";
			echo "</tfoot>";
			echo "</table></div>";
		}

		echo "<table class='table table-bordered table-striped table-hover table-reponsive text-center'>";
		echo "<thead>";
		echo "<tr><th colspan='4'>Carga horária total: " . semestreHorario($matriz,0) . " horas</th></tr>";
		echo "</thead></table>";
	?>
	</table>
</main>

<?php
include 'rodape.html';
?>