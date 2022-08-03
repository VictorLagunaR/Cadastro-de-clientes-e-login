<?php
    $con = mysqli_connect("localhost","root","","bancoDeDados");
    if (mysqli_connect_errno()) {
        echo "Erro".mysqli_connect_errno();
    }else{
        session_start();
        $coluna = 'select usuario, senha, nome from usuario';
        $verificacao = mysqli_query($con, $coluna);
        
        while($usuario = mysqli_fetch_array($verificacao)){
            if ($usuario[0] == $_POST['usuario'] && $usuario[1] == $_POST['senha']) {
                $_SESSION["nome"] = $usuario[2];
                echo "bem-vindo ao site! ".  $_SESSION["nome"];
                break;
            }

            
        }
        if(!$usuario){
            echo "Usuário não encontrado";
        }
        
        
    }
    mysqli_close($con);
?>

<a href="login.html">
    <button>
        Sair da Página.
    </button>
    <?php
        session_destroy();
    ?>
</a>