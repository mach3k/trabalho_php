<?php
include 'lista.php';

$texto = $_POST['busca'];


foreach ($matriz as $data2){  
    if (stristr($data2['nome'],$texto)){
      echo '<tr>';
      echo '<li>' . $data2['nome'] . '</li>';
      echo '<li>' . $data2['codigo'] . '</li>';
      echo '<li>' . $data2['carga-horaria'] . ' horas.</li>';
      echo '<li>' . $data2['semestre'] . 'º semestre. </li>';
      echo '</tr>';
    }
  }

echo'<ul>';
    foreach ($matriz as $data2){
      foreach ($data2['professor'] as $num ){
        if(stristr($num,$texto)){
          echo '<li>' . $num . '</li>';
          echo '<li>' . $data2['nome'] . '</li>';
          echo '<li>' . $data2['codigo'] . '</li>';
          echo '<li>' . $data2['carga-horaria'] . ' horas.</li>';
          echo '<li>' . $data2['semestre'] . 'º semestre. </li>';
        }
      }
    }
echo '<ul>';