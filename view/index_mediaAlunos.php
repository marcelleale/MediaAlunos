<DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Sistema Aprovacao</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script type="text/javascript" src="../controller/jquery-3.6.3.min.js"> </script>
        <script type="text/javascript" language = "javascript" src="../controller/controller_mediaAlunos.js"></script>
        </head>

    <body>

    <h1>Média Alunos</h1>
    <br>

    <b>Nota AV1:</b></br>
    <input type="number" id="nota1" placeholder="Insira o número aqui.">
    </br></br>

    <b>Nota AV2:<b></br>
    <input type="number" id="nota2" placeholder="Insira o número aqui."> <br>

    <br> <button type="button" id="btn-calc">Calcular Média</button>

    </br></br>

    <i>Média do aluno:</i><br>
    <input type="text" id="result-media">
    <br><br>
    <i>Status:</i><br>
    <input type="text" id="status-aluno">

    

    </body>

</html>