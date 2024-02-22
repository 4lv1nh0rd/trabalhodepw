<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include ('conexao_bd.php');

        $nomeProf = $_POST['nomeProf'];
        $formacao = $_POST['formacao'];
        $tempoE = $_POST['tempoE'];
        $escola = $_POST['escola'];
        $turnoD = $_POST['turnoD'];

        $sql = "INSERT INTO professor(nomeProf,formacao,tempoE,escola,turnoD) VALUES('$nomeProf','$formacao','$tempoE','$escola','$turnoD')";

        if(executarComando($sql)){
            echo "<h1> Professor Registrado! </h1>";
        }else{
            echo "<h1> Falha ao registrar o professor. </h1>";
        }
    ?>
</body>
</html>