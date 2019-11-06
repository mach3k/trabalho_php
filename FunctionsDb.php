<?php
require_once "Database.php";

function getMatriz($semestre){
	$db= new Database();
	$conexao = $db->getConexao();
	$sql = "	select d.id as id_disciplina, d.codigo, d.nome as nome_disciplina, d.cargahoraria, d.semestre, p.id as id_professor, p.nome as nome_professor, p.email, p.foto
from disciplina d, disciplina_professor dp, professor p
WHERE
d.id = dp.id_disciplina AND
p.id = dp.id_professor 
and d.semestre =:semestre
ORDER by d.semestre, d.nome
			";
	$stmt = $conexao->prepare($sql);
	$stmt->bindParam(':semestre',$semestre);

	$stmt->execute();
	$matriz= $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $matriz;
}

function Semestre($id){
	$db= new Database();
	$conexao = $db->getConexao();
	$sql = "select * from disciplina where semestre= :id";
	$stmt = $conexao->prepare($sql);
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$semestre= $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $semestre;
}


//Exercício 2
function CargaHoraria($id){
	$db= new Database();
	$conexao = $db->getConexao();
	$sql = "select sum(cargahoraria) as carga from disciplina where semestre= :id";
	$stmt = $conexao->prepare($sql);
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$semestre= $stmt->fetch(PDO::FETCH_ASSOC);
	return $semestre;
}


//Exercício 3
function DadosDic($id){
$db= new Database();
$conexao = $db->getConexao();
$sql = "select * from disciplina where codigo= :id";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(':id',$id);
$stmt->execute();
$disc= $stmt->fetchAll(PDO::FETCH_ASSOC);
return $disc;
}

//Exercício 4
function MateProf($id){
$db= new Database();
$conexao = $db->getConexao();
$sql = "select id from professor where nome= :id";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(':id',$id);
$stmt->execute();
$lista= $stmt->fetchAll(PDO::FETCH_ASSOC);
$sla=$lista[0]['id'];
$sql = "select id_disciplina from disciplina_professor where id_professor=:id";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(':id',$sla);
$stmt->execute();
$lista= $stmt->fetchAll(PDO::FETCH_ASSOC);

}
/*
echo '<pre>';
print_r(getMatriz(2));
*/