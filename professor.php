<?php
include 'cabecalho.html';

require_once('lista.php');

$prof = $_GET['prof'];

$nomeprof = Professor($matriz,$prof);


?>

<main class="container">

	<ul>
		<li>Nome: <? = $prof['nome'] ?> </li>
		<li></li>
		<li></li>

	</ul>
	

</main>





<?php 

include 'rodape.html';
?>
