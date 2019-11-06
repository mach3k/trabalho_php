<?php
include 'cabecalho.html';
include 'Database.php';
include 'FunctionsDb.php';
?>

<main class="container"> 

<TABLE border="4px">;

<?php 

echo "<h1>Sistemas para Internet</h1>";

for ($i=1; $i<7; $i++){
	$matriz = getMatriz($i);
	echo "<tr><th colspan='4'>Disciplinas do {$i} semestre</th></tr>";
	
	foreach ($matriz as $disciplina) {
		
		echo "<td><a href='disciplina.php?cod={$disciplina['id_disciplina']}'>{$disciplina['codigo']}</a></td>";
		echo "<td>{$disciplina['nome_disciplina']}</td>";
		echo "<td>{$disciplina['cargahoraria']}</td>";	
		echo "<td>{$disciplina['nome_professor']}</td>";			
		
		echo "</tr>";		
		
	}
	$ch = CargaHoraria($i);
	echo "<th colspan='4'>Carga horaria: ".$ch['carga']."</th>";

}
echo '</table>';

?>
</TABLE border="4px">
<main class="container">
   

    
    </form>
		<TABLE border="4px">
			
			 <?php 
						require_once('lista.php');
							for ($s=1; $s <7 ; $s++) { 
							 echo "<tr><th colspan='4'> Semestre".$s."</th></tr>";
							
									foreach ($matriz as  $value) {
										if ($value['semestre']==$s) {
											echo"<tr>";
										 	echo "<td>".$value['codigo']."</td>";
											echo "<td><a href='disciplina.php?cod={$value['codigo']}'>".$value['nome']."</a></td>";
											echo "<td>".$value['carga-horaria']."</td>";
											echo "<td>";
											foreach ( $value['professor'] as $nomeprof) {
												echo "<a href='professor.php?prof={$nomeprof}='>{$nomeprof}</a> <br> ";
											}
											echo "</td></tr>";
										}
									}
									$total=semestreHorario($matriz,$s);
										echo "<th colspan='4'>Carga Horaria : ".$total."</th>";
									$totalC=semestreHorario($matriz,0);
									
								}
							echo "<tr><td colspan='4' >Carga Horaria : ".$totalC."</td></tr>";
			?>
		
			
			



		</TABLE>    
</main>

<?php
include 'rodape.html';
?>
