<?php

class Aluno {

    public $resultado = "";

    function calcularMediaAluno($nota1, $nota2){
        
            $resultado = ($nota1 + $nota2) / 2;

            $status = $this->statusAluno($resultado);

        return $resultado. " " .$status;       

    }

    function statusAluno($resultado){
        
        $status = "";
       

        if($resultado >= 6){
            $status = "Aprovado.";
        } else {
            $status = "Reprovado.";
        }

        return $status;
    }

}

?>