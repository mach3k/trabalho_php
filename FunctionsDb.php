<?php
require_once "Database.php";

function getMatriz($semestre){
	$db= new Database();
	$conexao = $db->getConexao();
	$sql = "SELECT d.id as id_disciplina, d.codigo, d.nome as nome_disciplina, d.cargahoraria, " .
		"d.semestre, p.id as id_professor, p.nome as nome_professor, p.email, p.foto " .
		"FROM disciplina d, disciplina_professor dp, professor p " .
		"WHERE d.id = dp.id_disciplina " .
		"AND p.id = dp.id_professor " .
		"AND d.semestre =:semestre " .
		"ORDER by d.semestre, d.nome";

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
	
	$sql = "SELECT d.id, d.codigo, d.nome, d.cargahoraria, d.semestre, " .
	"p.id AS id_professor, p.nome AS nome_professor, " .
	"c.nome AS nome_curso " .
	"FROM disciplina d " .
	"LEFT JOIN disciplina_professor AS dp ON (d.id = dp.id_disciplina) " .
	"LEFT JOIN professor AS p ON (dp.id_professor = p.id) " .
	"LEFT JOIN curso AS c ON (d.curso_id = c.id)" .
	"WHERE d.id= :id";
	$stmt = $conexao->prepare($sql);
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

//Exercício 4
function MateProf($nome){
	$db= new Database();
	$conexao = $db->getConexao();
	
	$sql = "SELECT d.id, d.codigo, d.curso_id, d.nome, d.cargahoraria, d.semestre " . 
	"FROM disciplina AS d " .
	"LEFT JOIN disciplina_professor AS dp ON (d.id = dp.id_disciplina) " .
	"LEFT JOIN professor AS p ON (dp.id_professor = p.id) " .
	"WHERE p.nome = :nome";
	$stmt = $conexao->prepare($sql);
	$stmt->bindParam(':nome',$nome);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}