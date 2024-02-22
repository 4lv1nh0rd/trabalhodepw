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

        $nomePais = $_POST['nomePais'];
        $nomeCrianca = $_POST['nomeCrianca'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $mensagem = $_POST['mensagem'];

        $sql = "INSERT INTO pergunta(nomePais,nomeCrianca,email,idade,mensagem) VALUES('$nomePais','$nomeCrianca','$email','$idade','$mensagem')";

        if(executarComando($sql)){
            echo "<h1> Mensagem registrada </h1>";
        }else{
            echo "<h1> Falha ao registrar a mensagem. </h1>";
        }
    ?>
</body>
</html>