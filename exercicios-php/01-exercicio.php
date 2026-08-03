<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
    <style>
.exercicio{ 
       border: solid 4px;
       padding: 4px;}
      
 

    </style>
</head>
<body>
    <h1 class= "exercicio">Exercícios 01</h1>
    <hr>
      <?php 
      $data = "29/07/2026";
      $curso = "Técnico de Informática";
      $nome = "Cristo";
      $cargaHorarioDoCurso = 1600;
      $limiteDeFaltas = $cargaHorarioDoCurso * 0.25; 
      ?>
      <?php
      echo "<p>O Cristo está cursando no Senac o curso  ".$curso." na data de ".$data." a carga horário deste curso é de ".$cargaHorarioDoCurso." horas o curso tem limite de falta de 25% da carga horária = " .$limiteDeFaltas."</p>";
      ?>
     <!-- Forma simpolificada de saída HTML: usando PHP onde precisa -->
      <p>Aluno: <?=$nome?></p>
      <p>Curso: <?=$curso?></p>
      <p>Data: <?=$data?></p>
      <p>Carga horária: <?=$cargaHorarioDoCurso?></p>
      <p>Limite de Faltas é de: 25% da Carga horária</p>
      <p>Total de Faltas é de: <?=$limiteDeFaltas?> faltas da carga horária</p>
      <?php $teste = "test"; 
      echo $teste;
      ?>
      <p class="exercicio">Teste <?= $teste ?></p>



      

    

  
</body>
</html>