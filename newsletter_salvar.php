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

        $email = $_POST['email'];

        $sql = "INSERT INTO newsletter(email) VALUES('$email')";

        if(executarComando($sql)){
            echo "<h1> Você está registrado na nossa newsletter </h1>";
        }else{
            echo "<h1> Falha ao registrar o email </h1>";
        }
    ?>
</body>
</html>