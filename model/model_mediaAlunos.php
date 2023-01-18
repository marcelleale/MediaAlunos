<?php

include "../Aluno.php";

$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];

$aluno = new Aluno();

$resultado = $aluno->calcularMediaAluno($nota1, $nota2);

echo $resultado;

?>