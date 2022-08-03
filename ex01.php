<?php
    $con = mysqli_connect("localhost","root","","bancoDeDados");
    if (mysqli_connect_errno()) {
        echo "Erro".mysqli_connect_errno();
    }else{


        $sql1 = "INSERT into usuario (cod_usuario,nome,sobrenome,email,cpf,sexo,usuario,senha) values(null,'$_POST[nome]','$_POST[sobrenome]','$_POST[email]','$_POST[cpf]','$_POST[sexo]','$_POST[usuario]','$_POST[senha]')";
        if(mysqli_query($con,$sql1)){
            echo "<h1>Cadastro concluido com sucesso</h1>" ;
        }
        else{
            echo"<h1>Erro inesperado tente novamente mais tarde.</h1>";
        }
        
    }
    mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h2>Acesse sua conta agora</h2>    
    <form action="login.html">
        <input type="submit" value="Acesse">
    </form>
</body>
</html>
